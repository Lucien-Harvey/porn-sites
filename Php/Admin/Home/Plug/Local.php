<?php
if (isset($ADMINKEY)) { }else{ exit('404');   }   include('../Php/Admin/cookie.php');?>
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
    <script src="../Static/Admin/Css/echarts.min.js"></script>
  </head>
  <body data-type="index">
	<?php include('../Php/Admin/header.php');?>
    <div class="tpl-page-container tpl-page-header-fixed">
	<?php include('../Php/Admin/list.php');?>
        <div class="tpl-content-wrapper">

            <ol class="am-breadcrumb">
                <li><a href="#" class="am-icon-home">首页</a></li>
                <li>插件中心</li>
				 <li class="am-active">插件中心</li>
            </ol>
<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span>插件中心
                    </div>



                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">
					 <form method="post" class="am-form">
<?php
$CdName	=NULL;	
if (isset($_GET['Php']) && isset($_GET['Cd']) ) {	
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}	
$Php = post_input($_GET["Php"]);	
$Cd = post_input($_GET["Cd"]);	
if($Php =="Home/Ad/IeUrl" || $Cd !== NULL ){
$AdminIeUrlCd = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
array_multisort(array_column($AdminIeUrlCd,'IeUrlId'),SORT_DESC,$AdminIeUrlCd);//SOTR_ASC,SOTR_DESC
$Cdcount 	= count($AdminIeUrlCd);
$Cdcounts	=$Cdcount-1;
include('../Php/Public/Mysql.php');
include('../Php/Public/Curl.php');
if($Cd < $Cdcounts ||$Cd == $Cdcounts){

$IeUrl		=	$AdminIeUrlCd[$Cd];	
$IeUrlId	=	$IeUrl['IeUrlId'];//友链排序
$IeUrlName	=	$IeUrl['IeUrlName'];//友链标题
$IeUrlWebUrl	=	$IeUrl['IeUrlWebUrl'];//友链链接
$IeUrlState	=	$IeUrl['IeUrlState'];//友链状态	

$IeUrlCurl = Fcurl($IeUrlWebUrl,false);

if(strpos($IeUrlCurl,$_SERVER['SERVER_NAME']) !== false){ 
$IeUrlState	=	'ok';//友链状态	
}else{
$IeUrlState	=	'no';//友链状态	
}
$AdminIeUrlMod['IeUrlId'] = $IeUrlId;
$AdminIeUrlMod['IeUrlName'] = $IeUrlName;
$AdminIeUrlMod['IeUrlWebUrl'] = $IeUrlWebUrl;
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
					 
                      <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
									<a href=""><button type="button" class="am-btn am-btn-default am-btn-success">本地插件</button></a>
									<a href=""><button type="button" class="am-btn am-btn-default am-btn-success">下载插件</button></a>
								
								

									
								</div>
                            </div>
                        </div>
                        <div class="am-u-sm-12">

                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-title">插件类型</th>
											<th class="table-title">插件名称</th>
                                            <th class="table-type">	插件功能</th>
											<th class="table-type">	插件版本</th>
											<th class="table-type">	插件作者</th>

                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="word-break: break-all;">	
<?php 
/***检测模板插件***/

$TemplatePlug = scandir("../Plug/PlugWeb/TemplatePlug/");
foreach ($TemplatePlug as $TemplatePlugName) {
	 if(strpos($TemplatePlugName,'.') !==false || strpos($TemplatePlugName,'-') !==false ){
	}else{
		
		include("../Plug/PlugWeb/TemplatePlug/".$TemplatePlugName."/index.json");

	}
}
?>





                                        <tr>
											<td><a href="#">功能插件</a></td>
                                            <td><a href="#">哥哥草模板</td>
                                            <td>一套自适应模板</td>
											<td>1.0</td>
											<td>9CCMS</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="?Php=Home/Ad/IeUrl&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-pencil-square-o"></span> 设置</a>

                                                        <a href="?Php=Home/Ad/IeUrl&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-trash-o"></span> 卸载</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
											<td><a href="#">商业插件</a></td>
                                            <td><a href="#">哥哥草模板</td>
                                            <td>一套自适应模板</td>
											<td>1.0</td>
											<td>9CCMS</td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <a href="?Php=Home/Ad/IeUrl&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-pencil-square-o"></span> 设置</a>

                                                        <a href="?Php=Home/Ad/IeUrl&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-trash-o"></span> 卸载</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>



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
$AdminIeUrlINSERT=INSERT($AdminIeUrlINSERT,$AdminIeUrlMod);
}
$file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
fwrite($file,json_encode($AdminIeUrlINSERT));
fclose($file);  
?>
	<script language="javascript"> 
	<!-- 

	alert("恭喜修改成功！"); 
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


	<?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>