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
                <li>安全管理</li>
				 <li class="am-active">登录重置</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 登录重置
                    </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
						<?php	error_reporting(E_ALL^E_NOTICE^E_WARNING);include("../JCSQL/Admin/Security/AdminUser.php");	?>	
                        <div class="am-u-sm-12 am-u-md-9">
                            <form method="post"  class="am-form am-form-horizontal">
						
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">管理账号</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo USERNAME;?>" name="username" placeholder="管理账号">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">管理密码</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo PASSWORD;?>" name="password" placeholder="管理密码">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">白名单IP</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo IPPASS;?>" name="ippass" placeholder="默认为空，否则只有填写的IP才能登录后台">(多个以竖线"|"隔开)
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button type="name" name="submit" class="am-btn am-btn-primary">保存修改</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>	
<?php


if (isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])  && isset($_POST['ippass']) ) {
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}		
$username = post_input($_POST["username"]);
$password = post_input($_POST["password"]);	
$ippass = post_input($_POST["ippass"]);
	$str = '';
	$str .= '<?php';
	$str .= "\n";
	$str .= '//后台密码';
	$str .= "\n";
	$str .= 'define(\'USERNAME\', \''.$username.'\');';
	$str .= "\n";
	$str .= 'define(\'PASSWORD\', \''.$password.'\');';
	$str .= "\n";
	$str .= 'define(\'IPPASS\', \''.$ippass.'\');';
	$str .= "\n";	
	$str .= '?>';
	$ff = fopen("../JCSQL/Admin/Security/AdminUser.php",'w+');
	fwrite($ff,$str);
?>
<script language="javascript"> 
<!-- 

alert("恭喜修改成功！"); 
window.location.href="?Php=Home/Security/UserPass" 

--> 
</script> 
<?php	}	?>	

	<?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>