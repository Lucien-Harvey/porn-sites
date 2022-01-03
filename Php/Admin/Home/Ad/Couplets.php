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
				 <li class="am-active">对联展现广告</li>
            </ol>
<div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 对联展现广告<a style="color: #E91E63;">注：广告到期时间在当前时间之前前台不会加载此广告，也可以代表关闭此广告，智能化管理广告</a>
                    </div>



                </div>
                <div class="tpl-block">
                    
                    <div class="am-g">

                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
											<th class="table-title">广告位置</th>
                                            <th class="table-title">广告链接</th>
                                            <th class="table-type">广告图片</th>
											<th class="table-type">状态</th>
                                            <th class="table-date am-hide-sm-only">广告费/联系方式</th>
                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody style="word-break: break-all;">	
									
<?php

$AdminCouplets = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminCouplets.php"),true);
$count 	= count($AdminCouplets);
for ($x=0; $x<=$count-1; $x++) {
$Couplets		=	$AdminCouplets[$x];	
$CoupletsName	=	$Couplets['CoupletsName'];//广告位置
$CoupletsWebUrl	=	$Couplets['CoupletsWebUrl'];//广告链接
$CoupletsRemarks =	$Couplets['CoupletsRemarks'];//广告备注
$CoupletsPicUrl	=	$Couplets['CoupletsPicUrl'];//广告图片
$CoupletsState	=	$Couplets['CoupletsState'];//到期时间

date_default_timezone_set("Asia/Shanghai");//设置时区
$time=date("Ymd");
if($CoupletsState<$time){
	$CoupletsStateName='<a style="color: #E91E63;">已到期,不显示此广告</a>';
}
if($CoupletsState>$time){
	$CoupletsStateName='<a style="color: #00BCD4;">未到期，显示此广告</a>';
}
?>
                                        <tr>
											 <td><a href="#"><?php echo $CoupletsName?></a></td>
                                            <td><a href="#"><?php echo $CoupletsWebUrl?></a></td>
                                            <td><a target="_blank" href="<?php echo $CoupletsPicUrl?>">[点击打开]</a></td>
											<td><?php echo $CoupletsStateName?></td>
											<td><?php echo $CoupletsRemarks?></td>
                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
<a href="?Php=Home/Ad/CoupletsMod&Id=<?php echo $x?>" class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</a>

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


	<?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>