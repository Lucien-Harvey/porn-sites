<?php
/***读取数据库中的数据并且给予变量中***/
$AdminBasic = json_decode(file_get_contents("./JCSQL/Admin/Basic/AdminBasic.php"),true);
//PC模版
$WebMobanPC		=	$AdminBasic['WebMobanPC'];
//手机模版
$WebMobanWAP	=	$AdminBasic['WebMobanWAP'];
//网站标题
$WebTitle		=	$AdminBasic['WebTitle'];
//网站关键字
$WebKeywords	=	$AdminBasic['WebKeywords'];
//网站描述
$WebDescription	=	$AdminBasic['WebDescription'];
//网站公共
$WebGongao	=	$AdminBasic['WebGongao'];
//网站公共开关
$WebGongaoOpen	=	$AdminBasic['WebGongaoOpen'];
//网站logo链接
$WebLogo		=	$AdminBasic['WebLogo'];
//网站邮箱
$WebEmail		=	$AdminBasic['WebEmail'];
//网站统计
$WebCnzz = file_get_contents("./JCSQL/Admin/Basic/AdminStatistics.php");






?>