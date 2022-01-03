<?php
if (isset($ADMINKEY)) { }else{ exit('404');   } 

  include('../Php/Admin/cookie.php');?>
<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>管理中心</title>
    <meta name="description" content="这是一个 index 页面">
    <meta name="keywords" content="index">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="renderer" content="webkit">
	  <link rel="icon" type="image/png" href="../Static/Admin/Pic/favicon.png">
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <meta name="apple-mobile-web-app-title" content="Amaze UI" />
    <link rel="stylesheet" href="../Static/Admin/Css/amazeui.min.css" />
    <link rel="stylesheet" href="../Static/Admin/Css/admin.css">
    <link rel="stylesheet" href="../Static/Admin/Css/app.css">
<!--    <script src="../Static/Admin/Css/echarts.min.js"></script>-->
  </head>
  <body data-type="index">
	<?php include('../Php/Admin/header.php');?>
    <div class="tpl-page-container tpl-page-header-fixed">
	<?php include('../Php/Admin/list.php');?>
        <div class="tpl-content-wrapper">

            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li>友情链接</li>
				 <li class="am-active">友情链接设置</li>
            </ol>
<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 友情链接设置<a style="color: #E91E63;">注：排序是按照数字大小来排序的数字越大排在越前，默认为空显示最后</a>
                    </div>



                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">
					 <form method="post" enctype="multipart/form-data" class="am-form">
<?php
$CdName	=NULL;
if (isset($_GET['Php']) && isset($_GET['Cd']) ) {	
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}	
$Php = post_input($_GET["Php"]);	
$Cd = post_input($_GET["Cd"]);	
if($Php =="Home/Ad/IeUrl" || $Cd !== NULL ){
$AdminIeUrlCd = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
array_multisort(array_column($AdminIeUrlCd,'IeUrlId'),SORT_DESC,$AdminIeUrlCd);//SORT_ASC,SORT_DESC

    $Cdcount 	= count($AdminIeUrlCd);
$Cdcounts	=$Cdcount-1;
include('../Php/Public/Mysql.php');
include('../Php/Public/Curl.php');
if($Cd < $Cdcounts ||$Cd == $Cdcounts){

$IeUrl		=	$AdminIeUrlCd[$Cd];	
$IeUrlId	=	$IeUrl['IeUrlId'];//友链排序
$IeUrlName	=	$IeUrl['IeUrlName'];//友链标题
$IeUrlWebUrl	=	$IeUrl['IeUrlWebUrl'];//友链链接
$IeUrlState	=	$IeUrl['IeUrlState'];//友链显示隐藏状态
$TestIeUrlState	=	isset($IeUrl['TestIeUrlState'])?$IeUrl['TestIeUrlState']:'yes';//友链检测状态

$IeUrlCurl = Fcurl($IeUrlWebUrl,false);

if(strpos($IeUrlCurl,$_SERVER['SERVER_NAME']) !== false){ 
$TestIeUrlState	=	'ok';//友链检测状态
}else{
$TestIeUrlState	=	'no';//友链检测状态
}
$AdminIeUrlMod['IeUrlId'] = $IeUrlId;
$AdminIeUrlMod['IeUrlName'] = $IeUrlName;
$AdminIeUrlMod['IeUrlWebUrl'] = $IeUrlWebUrl;
$AdminIeUrlMod['TestIeUrlState'] = $TestIeUrlState;
$AdminIeUrlMod['IeUrlState'] = $IeUrlState;


$UPDATE=UPDATE($AdminIeUrlCd,$Cd,$AdminIeUrlMod); 
$file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
fwrite($file,json_encode($UPDATE));
fclose($file);  

	$CD=$Cd+1;
	$CdName='进度：'.$Cdcount.'条，完成'.$CD.'条';

	echo '<meta http-equiv="Refresh" content="3; url=?Php=Home/Ad/IeUrl&Cd='.$CD.'"/>';
}else{
	$CdName='检测完毕';
	echo '<meta http-equiv="Refresh" content="1; url=?Php=Home/Ad/IeUrl"/>';
}



	}
}	
?>

                         <div class="am-u-sm-12 am-u-md-4">
                             <div class="am-btn-toolbar">
                                 <div class="am-btn-group am-btn-group-xs">
                                     <a href="?Php=Home/Ad/IeUrlAdd"><button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 友链新增</button></a>
                                     <a href="?Php=Home/Ad/IeUrl&Cd=0"><button type="button" class="am-btn am-btn-default am-btn-success">检测状态	<?php echo $CdName;?></button></a>
                                     <a><button  name="submit" type="submit"  class="am-btn am-btn-default am-btn-success"><span class="am-icon-pencil-square-o"></span>修改</button></a>

                                    </div>
                             </div>
                         </div>
                         <div class="am-u-sm-12 am-u-md-8">
                             <div class="am-btn-toolbar ">
                                 <div class="am-btn-group am-btn-group-xs">
                                     <a href="?Php=Home/Ad/IeUrl&export=1"><button type="button" class="am-btn am-btn-default am-btn-success">导出友链</button></a>
                                     <input type="file" name="friendLink" id="friendLink" style="display: none"  onchange="$('#path').val(this.value);$('#sureFriend').show()" multiple="multiple"  accept=".txt" />
                                     <a><button type="button"  onclick="$('#friendLink').click()" class="am-btn am-btn-default am-btn-success">导入友链(仅支持txt格式)</button></a>
                                     <input name="path" id="path" readonly>
                                     <a style="display: none;" id="sureFriend"><button   name="submit" type="submit" class="am-btn am-btn-default am-btn-success"><span class="am-icon-pencil-square-o"></span>确认导入</button></a>
                                 </div>
                             </div>

                             <div style="font-size: 12px;color: red;padding-left: 105px;" >导入说明:仅支持txt文件格式,内容格式如下:友链排序|友链标题|友链地址URL+回车	</div>
                         </div>
                        <div class="am-u-sm-12">

                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-title">友链排序</th>
											<th class="table-title">友链标题</th>
                                            <th class="table-type">	友链地址URL</th>
											<th class="table-type">状态</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="word-break: break-all;">	
									
										<?php

										$AdminIeUrl = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
										array_multisort(array_column($AdminIeUrl,'IeUrlId'),SORT_DESC,$AdminIeUrl);//SORT_ASC,SORT_DESC
										$count 	= count($AdminIeUrl);
										for ($x=0; $x<=$count-1; $x++) {
										$IeUrl		=	$AdminIeUrl[$x];	
										$IeUrlId	=	$IeUrl['IeUrlId'];//友链排序
										$IeUrlName	=	$IeUrl['IeUrlName'];//友链标题
										$IeUrlWebUrl	=	$IeUrl['IeUrlWebUrl'];//友链链接
										$TestIeUrlState	=	isset($IeUrl['TestIeUrlState'])?$IeUrl['TestIeUrlState']:'yes';//友链检测状态
										$IeUrlState	=	$IeUrl['IeUrlState'];//友链显示隐藏状态

										date_default_timezone_set("Asia/Shanghai");//设置时区

										if($TestIeUrlState =='no'){
											$IeUrlStateName='<a style="color: #E91E63;">目标地址首页检测不到我方友链地址，状态异常，请站长手工核查</a>';
										}
										if($TestIeUrlState =='ok'){
											$IeUrlStateName='<a style="color: #00BCD4;">目标地址首页检测成功我方友链地址，状态正常</a>';
										}
										?>
                                        <tr>
											<td><input type="text" name="IeUrlId[]"  value="<?php echo $IeUrlId?>"></td>
                                            <td><input type="text" name="IeUrlName[]"  value="<?php echo $IeUrlName?>"></td>
                                            <td><input type="text" name="IeUrlWebUrl[]"  value="<?php echo $IeUrlWebUrl?>"></td>
											<td>
                                                <input type="hidden" name="TestIeUrlState[]"  value="<?php echo  $TestIeUrlState;?>" />
                                                <input type="hidden" name="IeUrlState[]"  value="<?php echo  $IeUrlState;?>" />
                                                <?php echo $IeUrlStateName?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">

                                                        <?php if ($IeUrlState == 'ok'){?>
                                                            <a href="?Php=Home/Ad/IeUrl&SId=<?php echo $x?>&Show=no" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-close"></span>隐藏</a>&nbsp;&nbsp;
                                                        <?php }else {?>
                                                            <a href="?Php=Home/Ad/IeUrl&SId=<?php echo $x?>&Show=ok" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-check"></span>显示</a>&nbsp;&nbsp;
                                                        <?php }?>

                                                        <a href="?Php=Home/Ad/IeUrl&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

<?php	
	
} 

?>	
                                    </tbody>
                                </table>
                                <hr>

							
                        </div>
                    </form>
                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>        </div>
<?php


if (isset($_POST['submit']) && isset($_POST['IeUrlId']) && isset($_POST['IeUrlName']) && isset($_POST['IeUrlWebUrl']) && isset($_POST['IeUrlState']) ) {

$IeUrlId	=	$_POST['IeUrlId'];//友链排序
$IeUrlName	=	$_POST['IeUrlName'];//友链标题
$IeUrlWebUrl=	$_POST['IeUrlWebUrl'];//友链链接
$IeUrlState	=	$_POST['IeUrlState'];//友链状态
$TestIeUrlState	=	$_POST['TestIeUrlState'];//友链状态

if ($IeUrlId ==null) { echo'<script language="javascript">alert("友链排序不可为空"); </script>';exit();}
if ($IeUrlName ==null) { echo'<script language="javascript">alert("友链标题不可为空"); </script>';exit();}
if ($IeUrlWebUrl ==null) { echo'<script language="javascript">alert("友链链接不可为空"); </script>';exit();}
if ($IeUrlState ==null) { echo'<script language="javascript">alert("状态不能为空，非法操作！"); </script>';exit();}	
include('../Php/Public/Mysql.php');
$AdminIeUrlcount 	= count($IeUrlName);
$AdminIeUrlINSERT	=NULL;
for ($x=0; $x<=$AdminIeUrlcount-1; $x++) {
$AdminIeUrlMod['IeUrlId'] = $IeUrlId[$x];
$AdminIeUrlMod['IeUrlName'] = $IeUrlName[$x];
$AdminIeUrlMod['IeUrlWebUrl'] = $IeUrlWebUrl[$x];
$AdminIeUrlMod['IeUrlState'] = $IeUrlState[$x];
$AdminIeUrlMod['TestIeUrlState'] = $TestIeUrlState[$x];
$AdminIeUrlINSERT=INSERT($AdminIeUrlINSERT,$AdminIeUrlMod);
}
$file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
fwrite($file,json_encode($AdminIeUrlINSERT));
fclose($file);

//导入友链
if ($_FILES["file"]["error"] <= 0)
{
    //解析文件友链
    $dataStr = file_get_contents(safeRequest($_FILES["friendLink"]["tmp_name"]));
    $res = array();
    if ($dataStr){
        $data = array_filter(explode(PHP_EOL,$dataStr));//换行符分隔
        if ($data){
            foreach ($data as $k =>$v){
                $item = explode('|',$v);
                if (is_array($item)&&count($item)==3){
                    $itemArray['IeUrlId'] = $item[0];
                    $itemArray['IeUrlName'] = $item[1];
                    $itemArray['IeUrlWebUrl'] = $item[2];
                    $itemArray['IeUrlState'] = 'ok';
                    $itemArray['TestIeUrlState'] = 'ok';
                    $res[] =$itemArray;
                }
            }
        }
    }

    //合并原有友链
    $AdminIeUrl = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
    array_multisort(array_column($AdminIeUrl,'IeUrlId'),SORT_DESC,$AdminIeUrl);//SORT_ASC,SORT_DESC
    $AdminIeUrl = array_merge($AdminIeUrl,$res);

    $file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
    fwrite($file,json_encode($AdminIeUrl));
    fclose($file);
}


?>
	<script language="javascript"> 
	<!-- 

	alert("恭喜操作成功！");
	window.location.href="?Php=Home/Ad/IeUrl"

	--> 
	</script> 
<?php
}
?>


<?php
if (isset($_GET['Php']) && isset($_GET['Id']) ) {
    function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
    $Php = post_input($_GET["Php"]);
    $Id = post_input($_GET["Id"]);
    if($Php =="Home/Ad/IeUrl" || $Id !== NULL ){
        $AdminIeUrl = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
        array_multisort(array_column($AdminIeUrl,'IeUrlId'),SORT_DESC,$AdminIeUrl);//SORT_ASC,SORT_DESC

        include('../Php/Public/Mysql.php');
        $file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
        fwrite($file,json_encode(DELETE($AdminIeUrl,$Id)));
        fclose($file);
        ?>
        <script language="javascript">
            <!--

            alert("恭喜删除成功！");
            window.location.href="?Php=Home/Ad/IeUrl"

            -->
        </script>
        <?php
    }
}
?>

<?php
if (isset($_GET['Php']) && isset($_GET['SId']) && isset($_GET['Show']) ) {

function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
$Php = post_input($_GET["Php"]);
$Id = post_input($_GET["SId"]);
$Show = post_input($_GET["Show"]);

if($Php =="Home/Ad/IeUrl" || $Id !== NULL ){
    include('../Php/Public/Mysql.php');
    $AdminIeUrl = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
    array_multisort(array_column($AdminIeUrl,'IeUrlId'),SORT_DESC,$AdminIeUrl);//SORT_ASC,SORT_DESC

    $IeUrl		=	$AdminIeUrl[$Id];
    $AdminIeUrlMod['IeUrlId'] = $IeUrl['IeUrlId'];
    $AdminIeUrlMod['IeUrlName'] = $IeUrl['IeUrlName'];
    $AdminIeUrlMod['IeUrlWebUrl'] = $IeUrl['IeUrlWebUrl'];
    $AdminIeUrlMod['TestIeUrlState'] = $IeUrl['TestIeUrlState'];
    $AdminIeUrlMod['IeUrlState'] = $Show;
    $UPDATE=UPDATE($AdminIeUrl,$Id,$AdminIeUrlMod);
    $file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
    fwrite($file,json_encode($UPDATE));
    fclose($file);
    ?>

<?php
}

?>
        <script language="javascript">
            <!--
            alert("恭喜操作成功！");
            window.location.href="?Php=Home/Ad/IeUrl"
            -->
        </script>
<?php
}
?>


<?php
//导出
if (isset($_GET['Php']) && isset($_GET['export']) ) {
    $AdminIeUrlCd = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
    array_multisort(array_column($AdminIeUrlCd,'IeUrlId'),SORT_DESC,$AdminIeUrlCd);//SORT_ASC,SORT_DESC

    if ($AdminIeUrlCd){
        $file = fopen("../JCSQL/Admin/Ad/friendLink.txt","w");
        foreach ($AdminIeUrlCd as $value){
            $urlTxt ='';
            $IeUrlId =isset($value['IeUrlId'])?$value['IeUrlId']:'';
            $IeUrlName =isset($value['IeUrlName'])?$value['IeUrlName']:'';
            $IeUrlWebUrl =isset($value['IeUrlWebUrl'])?$value['IeUrlWebUrl']:'';
            $urlTxt.=$IeUrlId.'|'.$IeUrlName.'|'.$IeUrlWebUrl.PHP_EOL;
            fwrite($file,$urlTxt);
        }
        fclose($file);
    }
    ?>

    <a id="downLoad" href="/JCSQL/Admin/Ad/friendLink.txt" download ></a>
    <script language="javascript">
        var   link = document.getElementById('downLoad');
        link.click();
    </script>
    <?php
}
?>


        <?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>