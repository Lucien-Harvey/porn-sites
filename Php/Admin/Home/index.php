<?php  include('../Php/Admin/cookie.php');?>
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
        <div class="tpl-content-page-title">使用说明</div>
        <ol class="am-breadcrumb">
          <li>
            <a href="#" class="am-icon-home">首页</a></li>
          <li></ol>
        <div class="tpl-content-scope">
          <div class="note note-info">
            <h3>PDA 专注网站程序
              <span class="close" data-close="note"></span></h3>
			  <script src="../Static/Admin/Js/Notice.js" charset='utf-8'></script>
			  <!--<script src="https://api.9ccmsapi.com/9CCMS18/Js/AdminHome.js" charset='utf-8'></script>-->
			</div>
        </div>
        <div class="am-u-md-6 am-u-sm-12 row-mb"></div>
      </div>
	<?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>