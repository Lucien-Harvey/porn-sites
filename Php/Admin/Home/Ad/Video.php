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
                <li>广告设置</li>
				 <li class="am-active">详情与内容横幅广告</li>
            </ol>
<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 播放横幅广告
                    </div>



                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">
                      <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <a href="?Php=Home/Ad/VideoAdd"><button type="button" class="am-btn am-btn-default am-btn-success"><span class="am-icon-plus"></span> 新增</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
										    <th class="table-title">广告排序</th>
                                            <th class="table-title">广告链接</th>
                                            <th class="table-type">广告图片</th>
											<th class="table-type">图片宽度</th>
											<th class="table-type">图片高度</th>
											<th class="table-type">状态</th>
                                            <th class="table-date am-hide-sm-only">广告费/联系方式</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="word-break: break-all;">	
									
<?php

$AdminVideo = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminVideo.php"),true);
array_multisort(array_column($AdminVideo,'VideoId'),SORT_DESC,$AdminVideo);//SOTR_ASC,SOTR_DESC
$count 	= count($AdminVideo);
for ($x=0; $x<=$count-1; $x++) {
$Video		=	$AdminVideo[$x];	
$VideoId	=	$Video['VideoId'];//广告链接
$VideoWebUrl	=	$Video['VideoWebUrl'];//广告链接
$VideoRemarks =	$Video['VideoRemarks'];//广告备注
$VideoPicUrl	=	$Video['VideoPicUrl'];//广告图片
$VideoState	=	$Video['VideoState'];//到期时间
$VideoPicUrlWidth =	$Video['VideoPicUrlWidth'];//广告图片宽度
$VideoPicUrlHeight =	$Video['VideoPicUrlHeight'];//广告图片高度

date_default_timezone_set("Asia/Shanghai");//设置时区
$time=date("Ymd");
if($VideoState<$time){
	$VideoStateName='<a style="color: #E91E63;">已到期,不显示此广告</a>';
}
if($VideoState>$time){
	$VideoStateName='<a style="color: #00BCD4;">未到期，显示此广告</a>';
}
?>
                                        <tr>
											<td><a href="#"><?php echo $VideoId?></a></td>
                                            <td><a href="#"><?php echo $VideoWebUrl?></a></td>
                                            <td><a target="_blank" href="<?php echo $VideoPicUrl?>">[点击打开]</a></td>

											  <td><?php echo $VideoPicUrlWidth?></td>
                                            <td><?php echo $VideoPicUrlHeight?></td>
											<td><?php echo $VideoStateName?></td>
											<td><?php echo $VideoRemarks?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
<a href="?Php=Home/Ad/VideoMod&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>
                                                        <a href="?Php=Home/Ad/Video&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-danger _am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</a>
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

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>
            </div>        </div>		
<?php
if (isset($_GET['Php']) && isset($_GET['Id']) ) {	
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}	
$Php = post_input($_GET["Php"]);	
$Id = post_input($_GET["Id"]);	
if($Php =="Home/Ad/Video" || $Id !== NULL ){
$AdminVideo = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminVideo.php"),true);
    array_multisort(array_column($AdminVideo,'VideoId'),SORT_DESC,$AdminVideo);//SOTR_ASC,SOTR_DESC

include('../Php/Public/Mysql.php');	
$file = fopen("../JCSQL/Admin/Ad/AdminVideo.php","w");
fwrite($file,json_encode(DELETE($AdminVideo,$Id)));
fclose($file);  
?>
	<script language="javascript"> 
	<!-- 

	alert("恭喜删除成功！"); 
	window.location.href="?Php=Home/Ad/Video" 

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