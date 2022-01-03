<?php

include("../JCSQL/Admin/Security/AdminUser.php");
	if(IPPASS != NULL){
        if(strpos(IPPASS,$_SERVER["REMOTE_ADDR"]) === false ){
            echo'<script language="javascript"> alert("您的IP为外来入侵者不在IP白名单内！无法访问！"); window.location.href="?" </script>';exit();
		}
	}

?>

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
  <meta http-equiv="Cache-Control" content="no-siteapp" />
  <link rel="icon" type="image/png" href="../Static/Admin/Pic/favicon.png">
  <meta name="apple-mobile-web-app-title" content="Amaze UI" />
  <link rel="stylesheet" href="../Static/Admin/Css/amazeui.min.css" />
  <link rel="stylesheet" href="../Static/Admin/Css/admin.css">
  <link rel="stylesheet" href="../Static/Admin/Css/app.css">
</head>
<body data-type="login">
  <div class="am-g myapp-login">
	<div class="myapp-login-logo-block  tpl-login-max">
		<div class="myapp-login-logo-text">
			<div class="myapp-login-logo-text"><span> 登录</span> <i class="am-icon-skyatlas"></i></div>
		</div>
		<div class="login-font">
			<i>9S </i> or <span> MS</span>
		</div>
		<div class="am-u-sm-10 login-am-center">
			<form class="am-form" action="" method="POST">
				<fieldset>
					<div class="am-form-group"><input type="password" name="username" class="" id="doc-ipt-email-1" placeholder="输入登录账户"></div>
					<div class="am-form-group"><input type="password" name="password"  class="" id="doc-ipt-pwd-1" placeholder="输入登录密码"></div>
					<div class="am-form-group ver-code">
                      <input type="password" name="yzm"  class="" id="doc-ipt-pwd-1" placeholder="输入验证码内容">
                        <a><img id="yzm"  onClick="javascript:myyzm();"  alt="点击换一张"/></a>
					</div>				
					<p><button name="submit" type="submit" class="am-btn am-btn-default">登录</button></p>
				</fieldset>
			</form>
		</div>
	</div>
</div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>

  <script>
      function myyzm(){
          $('#yzm').attr('src','../Php/Admin/yzm.php?nocache='+Math.random());
      }
      $(window).load(function() {
          myyzm()
      });
  </script>
</body>
</html>
<?php
header("Content-type: text/html; charset=utf-8");
date_default_timezone_set('PRC');
session_start();	
include("../JCSQL/Admin/Security/AdminUser.php");
if (isset($_POST['submit']) && isset($_POST['username'])&& isset($_POST['password'])&& isset($_POST['yzm']) ) {
	function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
	$username = post_input($_POST["username"]);	
	$password = post_input($_POST["password"]);	
	$yzm = post_input($_POST["yzm"]);

    $wornIpNameDir = '../JCSQL/Admin/ErrorIp';
    $wornIpName = '../JCSQL/Admin/ErrorIp/'.$_SERVER["REMOTE_ADDR"].'lock';
    if(!is_dir('../JCSQL/Admin/ErrorIp'))
    {
        mkdir('../JCSQL/Admin/ErrorIp');
    }

    //指定ip错误次数增加
	function increaseIpLock($wornIpName){
        if(file_exists($wornIpName)) {
            $wornNum = file_get_contents($wornIpName);
        }
        file_put_contents($wornIpName, $wornNum ? (int)$wornNum + 1 : 1);
    }

	if(IPPASS != NULL){
        if(strpos(IPPASS,$_SERVER["REMOTE_ADDR"]) === false ){
			echo'<script language="javascript"> alert("您的IP为外来入侵者不在IP白名单内！无法访问！"); window.location.href="?" </script>';exit();
		}
	}

    if(file_exists($wornIpName)){
        if(file_get_contents($wornIpName) > '3'){
            file_put_contents('../lock.lock','');
            unlink($wornIpName);//删除ip锁
        }
    }

	if(file_exists("../lock.lock")){
		echo'<script language="javascript"> alert("三次错误进入安全模式，请删除根目录lock文件并联系作者"); window.location.href="?" </script>';exit();
	}
    if($_SESSION['yzm'] != $yzm){
        echo'<script language="javascript"> alert("验证码错误"); window.location.href="?" </script>';increaseIpLock($wornIpName);exit();
    }

	if(USERNAME != $username ){
		echo'<script language="javascript"> alert("账号错误"); window.location.href="?" </script>';increaseIpLock($wornIpName);exit();
	}
	if(!(PASSWORD == $password || PASSWORD == $password)){
		echo'<script language="javascript"> alert("密码错误"); window.location.href="?" </script>';increaseIpLock($wornIpName);exit();
	}


	$_SESSION['username']=$username;$_SESSION['password']=$password;
	echo'<script language="javascript"> alert("登陆成功！正在跳转..."); window.location.href="?Php=Home/index" </script>';
	
}
?>