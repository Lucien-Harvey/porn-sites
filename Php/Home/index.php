<?php
/***
//终端参数				$WEB_PC_MO
//PC模版				$WebMobanPC
//手机模版				$WebMobanWAP
//网站标题				$WebTitle
//网站关键字			$WebKeywords
//网站描述				$WebDescription
//网站logo链接			$WebLogo
//网站邮箱				$WebEmail
//网站统计				$WebCnzz
//友链数组				$AdminIeUrl
//头部横幅广告数组		$AdminTop
//播放横幅广告数组		$AdminVideo
//对联广告数组			$AdminCouplets
//MO底部浮漂广告数组    $AdminFloat
//联盟JS广告			$AdminAdJs
***/
include_once './Php/Home/Template.php';
$tpl = new Template();
$tpl->assign('WEBUrl', $WEBUrl);
//终端参数				$WEB_PC_MO
$tpl->assign('终端', $WEB_PC_MO);
//PC模版				$WebMobanPC
$tpl->assign('PC模版', $WebMobanPC);
//手机模版				$WebMobanWAP
$tpl->assign('手机模版', $WebMobanWAP);
//网站标题				$WebTitle
$tpl->assign('WebTitle', $WebTitle);
//网站关键字			$WebKeywords
$tpl->assign('WebKeywords', $WebKeywords);
//网站描述				$WebDescription
$tpl->assign('WebDescription', $WebDescription);
//网站logo链接			$WebLogo
$tpl->assign('WebLogo', $WebLogo);
//网站邮箱				$WebEmail
$tpl->assign('WebEmail', $WebEmail);
//友链数组				$AdminIeUrl
$tpl->assign('IeUrl', $AdminIeUrl);
//头部横幅广告数组		$AdminTop
$tpl->assign('TopWebAd', $AdminTop);
//播放横幅广告数组		$AdminVideo
$tpl->assign('VideoWebAd', $AdminVideo);
//对联广告，移动底部悬浮广告，统计代码

define('JCCMS',$_SERVER['DOCUMENT_ROOT']);

$AdS=$AdS.$WebCnzz;
$tpl->assign('WebAdS', $AdS);

//随机数字
$tpl->assign('Rand',rand(5, 10000));
//样式路径
$WEB_Static=NULL; if($WEB_PC_MO =='PC'){$WEB_Static=$WebMobanPC;}if($WEB_PC_MO =='MO'){$WEB_Static=$WebMobanWAP;}
$tpl->assign('StylePath','/Template/'.$WEB_Static);
$tpl->assign('Header',$WEB_Static.'/html/header');
$tpl->assign('Footer',$WEB_Static.'/html/footer');

//分类
$vodtype = json_decode(file_get_contents('./JCSQL/type.php'),true);
$tpl->assign('数据分类',$vodtype);

$this_WebMoban =NULL;
if($WEB_PC_MO =='PC'){$this_WebMoban=$WebMobanPC;}
if($WEB_PC_MO =='MO'){$this_WebMoban=$WebMobanWAP;}	
//首页php


include('./Php/Home/index/'.$GetMb_tmp.'.php');
?>