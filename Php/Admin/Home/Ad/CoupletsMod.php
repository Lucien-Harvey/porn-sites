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
				<li>头部横幅广告</li>
				 <li class="am-active">修改</li>
				 
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 修改
                    </div>
                </div>
<?php
$AdminCouplets = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminCouplets.php"),true);
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
$Id = post_input($_GET["Id"]);
$Couplets		=	$AdminCouplets[$Id];
$CoupletsName	=	$Couplets['CoupletsName'];//广告位置	
$CoupletsWebUrl	=	$Couplets['CoupletsWebUrl'];//广告链接
$CoupletsRemarks =	$Couplets['CoupletsRemarks'];//广告备注
$CoupletsPicUrl	=	$Couplets['CoupletsPicUrl'];//广告图片
$CoupletsState	=	$Couplets['CoupletsState'];//到期时间


?>


				
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form method="post"  class="am-form am-form-horizontal">
								<input type="hidden" name="Id"  value="<?php echo  $Id;?>" />
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告位置</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="CoupletsName" readonly  unselectable="on" value="<?php echo  $CoupletsName;?>"placeholder="广告链接URL">
                                    </div>
                                </div>								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告链接URL</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="CoupletsWebUrl"  value="<?php echo  $CoupletsWebUrl;?>" placeholder="广告链接URL">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	广告图片URL</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="CoupletsPicUrl"  value="<?php echo  $CoupletsPicUrl;?>" placeholder="广告图片">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	广告到期时间</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="CoupletsState"  value="<?php echo  $CoupletsState;?>" placeholder="广告图片高度">
                                    </div>
									<div class="am-u-sm-9"><a style="color: #E91E63;">说明：20190627代表的就是2019年6月27日，请按照格式填写</a>
									 </div>
                                </div>
								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告费/联系方式</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="CoupletsRemarks"  value="<?php echo  $CoupletsRemarks;?>" placeholder="如12/8~1/8广告费100元">
                                    </div>
									<div class="am-u-sm-9"><a style="color: #E91E63;">说明：最好按照官方格式来写，格式：【1000元，邮箱：123@qq.com】【1000元，QQ：123456】 </a></div>	
                                </div>								
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button name="submit" type="submit" class="am-btn am-btn-primary">修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php


if (isset($_POST['submit']) && isset($_POST['Id']) && isset($_POST['CoupletsName']) && isset($_POST['CoupletsWebUrl']) && isset($_POST['CoupletsRemarks'])  && isset($_POST['CoupletsPicUrl'])  && isset($_POST['CoupletsState'])) {

$Id = post_input($_POST["Id"]);
 $CoupletsName			=	post_input($_POST["CoupletsName"]);//广告位置
$CoupletsWebUrl			=	post_input($_POST["CoupletsWebUrl"]);//广告链接
$CoupletsRemarks		=	post_input($_POST["CoupletsRemarks"]);//广告备注
$CoupletsPicUrl			=	post_input($_POST["CoupletsPicUrl"]);//广告图片
$CoupletsState			=	post_input($_POST["CoupletsState"]);//到期时间

if ($Id ==null) { echo'<script language="javascript">alert("广告Id不可为空"); </script>';exit();}
if ($CoupletsWebUrl ==null) { echo'<script language="javascript">alert("广告链接URL不可为空"); </script>';exit();}
if ($CoupletsPicUrl ==null) { echo'<script language="javascript">alert("广告图片不可为空"); </script>';exit();}
if ($CoupletsName ==null) { echo'<script language="javascript">alert("非法操作"); </script>';exit();}
if ($CoupletsRemarks ==null) { echo'<script language="javascript">alert("广告费/联系方式不可为空"); </script>';exit();}	
if ($CoupletsState ==null) { echo'<script language="javascript">alert("广告到期时间不可为空"); </script>';exit();}	
include('../Php/Public/Mysql.php');	
$AdminCoupletsMod['CoupletsWebUrl'] = $CoupletsWebUrl;
$AdminCoupletsMod['CoupletsRemarks'] = $CoupletsRemarks;
$AdminCoupletsMod['CoupletsPicUrl'] = $CoupletsPicUrl;
$AdminCoupletsMod['CoupletsState'] = $CoupletsState;
$AdminCoupletsMod['CoupletsName'] = $CoupletsName;

$UPDATE=UPDATE($AdminCouplets,$Id,$AdminCoupletsMod); 
$file = fopen("../JCSQL/Admin/Ad/AdminCouplets.php","w");
fwrite($file,json_encode($UPDATE));
fclose($file);  

?>
<script language="javascript"> 
<!-- 

alert("恭喜修改成功！"); 
window.location.href="?Php=Home/Ad/CoupletsMod&Id=<?php echo $Id;?>" 

--> 
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