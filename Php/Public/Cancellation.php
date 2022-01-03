<?php
session_start();
session_destroy();
header("Location: ?");
switch($Php){
	case 'Home/Basic/Basicsetup':$C_T_0 = 'Home/Basic/Basicsetup';break;//基本设置	
	default:$C_T_0 = 'Login';break;//默认登录页面	
	}
?>