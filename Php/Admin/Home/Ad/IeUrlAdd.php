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
                <li>友情链接</li>
				<li>友情链接设置</li>
				 <li class="am-active">添加</li>
				 
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 添加
                    </div>
                </div>



				
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">


                        <div class="am-u-sm-12 am-u-md-9">
                            <form method="post"  class="am-form am-form-horizontal">
								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">友链排序</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="IeUrlId"  value="" placeholder="友链排序">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	友链标题</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="IeUrlName"  value="" placeholder="友链标题">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">	友链链接</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" name="IeUrlWebUrl"  value="" placeholder="友链链接">
                                    </div>
                                </div>							
                                <div class="am-form-group">
                                    <div class="am-u-sm-9 am-u-sm-push-3">
                                        <button name="submit" type="submit" class="am-btn am-btn-primary">添加</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php


if (isset($_POST['submit']) && isset($_POST['IeUrlId']) && isset($_POST['IeUrlName'])  && isset($_POST['IeUrlWebUrl'])) {
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
$AdminIeUrl = json_decode(file_get_contents("../JCSQL/Admin/Ad/AdminIeUrl.php"),true);
$IeUrlId				=	post_input($_POST["IeUrlId"]);//友链排序
$IeUrlName				=	post_input($_POST["IeUrlName"]);//友链标题
$IeUrlWebUrl			=	post_input($_POST["IeUrlWebUrl"]);//友链链接
$IeUrlState				=	'ok';//友链状态
	
if ($IeUrlName ==null) { echo'<script language="javascript">alert("友链标题不可为空"); </script>';exit();}
if ($IeUrlWebUrl ==null) { echo'<script language="javascript">alert("友链链接不可为空"); </script>';exit();}
include('../Php/Public/Mysql.php');	
$AdminIeUrlMod['IeUrlId'] = $IeUrlId;
$AdminIeUrlMod['IeUrlName'] = $IeUrlName;
$AdminIeUrlMod['IeUrlWebUrl'] = $IeUrlWebUrl;
$AdminIeUrlMod['IeUrlState'] = $IeUrlState;
$UPDATE=INSERT($AdminIeUrl,$AdminIeUrlMod); 
$file = fopen("../JCSQL/Admin/Ad/AdminIeUrl.php","w");
fwrite($file,json_encode($UPDATE));
fclose($file);  

?>
<script language="javascript"> 
<!-- 

alert("恭喜添加成功！"); 
window.location.href="?Php=Home/Ad/IeUrl" 

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