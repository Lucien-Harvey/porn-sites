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
				<li>手机底部浮漂广告</li>
				 <li class="am-active">修改</li>
				 
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 修改
                    </div>
                </div>
<?php
$AdminFloat = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminFloat.php"),true);
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
$Id = post_input($_GET["Id"]);
$Float		=	$AdminFloat[$Id];
$FloatName	=	$Float['FloatName'];//广告位置	
$FloatWebUrl	=	$Float['FloatWebUrl'];//广告链接
$FloatRemarks =	$Float['FloatRemarks'];//广告备注
$FloatPicUrl	=	$Float['FloatPicUrl'];//广告图片
$FloatState	=	$Float['FloatState'];//到期时间


?>


				
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form method="post"  class="am-form am-form-horizontal">
								<input type="hidden" name="Id"  value="<?php echo  $Id;?>" />
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告位置</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="FloatName" readonly  unselectable="on" value="<?php echo  $FloatName;?>"placeholder="广告链接URL">
                                    </div>
                                </div>								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告链接URL</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="FloatWebUrl"  value="<?php echo  $FloatWebUrl;?>" placeholder="广告链接URL">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	广告图片URL</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="FloatPicUrl"  value="<?php echo  $FloatPicUrl;?>" placeholder="广告图片">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	广告到期时间</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="FloatState"  value="<?php echo  $FloatState;?>" placeholder="广告图片高度">
                                    </div>
									<div class="am-u-sm-9"><a style="color: #E91E63;">说明：20190627代表的就是2019年6月27日，请按照格式填写</a>
									 </div>
                                </div>
								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">广告费/联系方式</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="FloatRemarks"  value="<?php echo  $FloatRemarks;?>" placeholder="如12/8~1/8广告费100元">
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


if (isset($_POST['submit']) && isset($_POST['Id']) && isset($_POST['FloatName']) && isset($_POST['FloatWebUrl']) && isset($_POST['FloatRemarks'])  && isset($_POST['FloatPicUrl'])  && isset($_POST['FloatState'])) {

$Id = post_input($_POST["Id"]);
 $FloatName			=	post_input($_POST["FloatName"]);//广告位置
$FloatWebUrl			=	post_input($_POST["FloatWebUrl"]);//广告链接
$FloatRemarks		=	post_input($_POST["FloatRemarks"]);//广告备注
$FloatPicUrl			=	post_input($_POST["FloatPicUrl"]);//广告图片
$FloatState			=	post_input($_POST["FloatState"]);//到期时间

if ($Id ==null) { echo'<script language="javascript">alert("广告Id不可为空"); </script>';exit();}
if ($FloatWebUrl ==null) { echo'<script language="javascript">alert("广告链接URL不可为空"); </script>';exit();}
if ($FloatPicUrl ==null) { echo'<script language="javascript">alert("广告图片不可为空"); </script>';exit();}
if ($FloatName ==null) { echo'<script language="javascript">alert("非法操作"); </script>';exit();}
if ($FloatRemarks ==null) { echo'<script language="javascript">alert("广告费/联系方式不可为空"); </script>';exit();}	
if ($FloatState ==null) { echo'<script language="javascript">alert("广告到期时间不可为空"); </script>';exit();}	
include('../Php/Public/Mysql.php');	
$AdminFloatMod['FloatWebUrl'] = $FloatWebUrl;
$AdminFloatMod['FloatRemarks'] = $FloatRemarks;
$AdminFloatMod['FloatPicUrl'] = $FloatPicUrl;
$AdminFloatMod['FloatState'] = $FloatState;
$AdminFloatMod['FloatName'] = $FloatName;

$UPDATE=UPDATE($AdminFloat,$Id,$AdminFloatMod); 
$file = fopen("../JCSQL/Admin/Ad/AdminFloat.php","w");
fwrite($file,json_encode($UPDATE));
fclose($file);  

?>
<script language="javascript"> 
<!-- 

alert("恭喜修改成功！"); 
window.location.href="?Php=Home/Ad/FloatMod&Id=<?php echo $Id;?>" 

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