<?php
session_start();
header('Content-Type:text/html;charset=utf-8');
include("../JCSQL/Admin/Security/AdminUser.php");

if ($_SESSION['username'] == NULL && $_SESSION['username'] != USERNAME) {
	
header("Location: ?Php=Login");exit();	
}
if ($_SESSION['password'] == NULL && $_SESSION['password'] != PASSWORD ) {
header("Location: ?Php=Login");exit();	
}


?>