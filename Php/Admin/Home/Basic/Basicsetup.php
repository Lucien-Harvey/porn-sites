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
                <li class="am-active">基本设置</li>
            </ol>
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 基本设置
                    </div>
                </div>
                <div class="tpl-block ">

                    <div class="am-g tpl-amazeui-form">
<?php
/***读取数据库中的数据并且给予变量中***/
$AdminBasic = json_decode(file_get_contents("../JCSQL/Admin/Basic/AdminBasic.php"),true);

$WebMobanPC		=	$AdminBasic['WebMobanPC'];
$WebMobanWAP	=	$AdminBasic['WebMobanWAP'];
$WebTitle		=	$AdminBasic['WebTitle'];
$WebKeywords	=	$AdminBasic['WebKeywords'];
$WebDescription	=	$AdminBasic['WebDescription'];
$WebGongao	=	$AdminBasic['WebGongao'];
$WebGongaoOpen	=	$AdminBasic['WebGongaoOpen'];
$WebLogo		=	$AdminBasic['WebLogo'];
$WebEmail		=	$AdminBasic['WebEmail'];
?>
<?php 
/***检测模板文件夹里的模板名称并且给予输出***/
$Template=NULL;
$Templates = scandir("../Template/");
foreach ($Templates as $name) {
	 if(strpos($name,'.') !==false || strpos($name,'-') !==false ){
	}else{
		$Template .='<option value="'.$name.'">'.$name.'</option>';
	}
}
?>
<?php
/***修改系统设置数据库***/
if (isset($_POST['submit']) && isset($_POST['WebGongao']) && isset($_POST['WebGongaoOpen']) && isset($_POST['WebMobanPC']) && isset($_POST['WebMobanWAP'])  && isset($_POST['WebTitle'])  && isset($_POST['WebKeywords']) && isset($_POST['WebDescription']) && isset($_POST['WebLogo'])&& isset($_POST['WebEmail'])) {
function post_input($data){$data = stripslashes($data);$data = htmlspecialchars($data);return $data;}
$Basic						=NULL;

$Basic['WebMobanPC']		=	post_input($_POST['WebMobanPC']);
$Basic['WebMobanWAP']		=	post_input($_POST['WebMobanWAP']);
$Basic['WebTitle']			=	post_input($_POST['WebTitle']);
$Basic['WebKeywords']		=	post_input($_POST['WebKeywords']);
$Basic['WebGongao']		=	post_input($_POST['WebGongao']);
$Basic['WebGongaoOpen']		=	post_input($_POST['WebGongaoOpen']);
$Basic['WebDescription']	=	post_input($_POST['WebDescription']);
$Basic['WebLogo']			=	post_input($_POST['WebLogo']);
$Basic['WebEmail']			=	post_input($_POST['WebEmail']);
$file = fopen("../JCSQL/Admin/Basic/AdminBasic.php","w");
fwrite($file,json_encode($Basic));
fclose($file);    
?>
<script language="javascript"> 
<!-- 

alert("恭喜修改成功！"); 
window.location.href="?Php=Home/Basic/Basicsetup" 

--> 
</script> 
<?php	}	?>	
                        <div class="am-u-sm-12 am-u-md-9">
                            <form method="post"  class="am-form am-form-horizontal">
								<div class="am-form-group">
                                    <label for="user-phone"  class="am-u-sm-3 am-form-label">PC模板选择 </label>
                                    <div class="am-u-sm-9">
                                        <select name="WebMobanPC" data-am-selected="{searchBox: 1}" >
										  <option value="<?php echo $WebMobanPC;?>">目前模板：<?php echo $WebMobanPC;?></option>
											<?php echo $Template;?>

										</select> 
										<a href="https://bbs.9ccms.net/?thread-5.htm" target="_blank">
											<bas class="am-btn am-btn-primary">模板预览图</bas>
										</a>
                                    </div>
								</div>
								<div class="am-form-group">
                                    <label for="user-phone"  class="am-u-sm-3 am-form-label">WAP模板选择 </label>
                                    <div class="am-u-sm-9">
                                        <select name="WebMobanWAP" data-am-selected="{searchBox: 1}" >
										  <option value="<?php echo $WebMobanWAP;?>">目前模板：<?php echo $WebMobanWAP;?></option>
											<?php echo $Template;?>
										</select> 
										<a href="https://bbs.9ccms.net/?thread-5.htm" target="_blank">
											<bas class="am-btn am-btn-primary">模板预览图</bas>
										</a>
                                    </div>
								</div>								
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站名称</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo $WebTitle;?>" name="WebTitle" placeholder="网站名称">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">关键字</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo $WebKeywords;?>" name="WebKeywords" placeholder="关键字">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">关键描述</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo $WebDescription;?>" name="WebDescription" placeholder="关键描述">
                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">公告说明文字</label>
                                    <div class="am-u-sm-9">
                                        <input style="width: 65%;display: inline-block;float: left;margin-right: 2%;" type="text" value="<?php echo $WebGongao;?>" name="WebGongao" placeholder="公告说明文字">
<!--                                        <button style="width: 20%;display: inline-block;" type="button" class="am-btn am-btn-default am-active">激活状态</button>-->
                                        <a href="javasript:;"  id="gongGaoWord" style="width: 33%;" openstat=""  class="am-btn am-btn-primary am-active" role="button">公告状态:关闭(点击开关)</a>
                                        <input type="hidden"  value="<?php echo $WebGongaoOpen;?>" id="WebGongaoOpen" name="WebGongaoOpen" placeholder="关键描述">

                                    </div>
                                </div>
                                <div class="am-form-group">
                                    <label for="user-name" class="am-u-sm-3 am-form-label">网站logoURL</label>
                                    <div class="am-u-sm-9">
                                        <input type="text" value="<?php echo $WebLogo;?>" name="WebLogo" placeholder="网站logoURL">
                                    </div>
                                </div>				
                                <div class="am-form-group">
                                    <label for="user-email" class="am-u-sm-3 am-form-label">广告邮箱</label>
                                    <div class="am-u-sm-9">
                                        <input type="email" value="<?php echo $WebEmail;?>" name="WebEmail" placeholder="广告邮箱">
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
	<?php include('../Php/Admin/footer.php');?>
    </div>
  <script src="../Static/Admin/Js/jquery.min.js"></script>
  <script src="../Static/Admin/Js/amazeui.min.js"></script>
  <script src="../Static/Admin/Js/app.js"></script>
  </body>

</html>