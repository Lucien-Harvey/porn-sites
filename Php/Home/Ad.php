<?php
$time=date("Ymd");//当前年月日
date_default_timezone_set("Asia/Shanghai");//设置时区

$AdminTop		=NULL;
$AdminVideo		=NULL;
$AdminCouplets	=NULL;
$AdminFloat		=NULL;
$AdminAdJs		=NULL;
/***头部横幅广告***/
$AdminTops = json_decode(file_get_contents("./JCSQL/Admin/Ad/AdminTop.php"),true);
array_multisort(array_column($AdminTops,'TopId'),SORT_DESC,$AdminTops);//SOTR_ASC,SOTR_DESC
$count 	= count($AdminTops);
for ($x=0; $x<=$count-1; $x++) {
$Top		=	$AdminTops[$x];	
$TopWebUrl	=	$Top['TopWebUrl'];//广告链接
$TopRemarks =	$Top['TopRemarks'];//广告备注
$TopPicUrl	=	$Top['TopPicUrl'];//广告图片
$TopState	=	$Top['TopState'];//到期时间
$TopPicUrlWidth =	$Top['TopPicUrlWidth'];//广告图片宽度
$TopPicUrlHeight =	$Top['TopPicUrlHeight'];//广告图片高度
if($TopState>$time){
$AdminTopMod['TopWebUrl'] = $TopWebUrl;
$AdminTopMod['TopRemarks'] = $TopRemarks;
$AdminTopMod['TopPicUrl'] = $TopPicUrl;
$AdminTopMod['TopState'] = $TopState;
$AdminTopMod['TopPicUrlWidth'] = $TopPicUrlWidth;
$AdminTopMod['TopPicUrlHeight'] = $TopPicUrlHeight;
$AdminTop=INSERT($AdminTop,$AdminTopMod); 
}	
}
/***播放横幅广告***/
$AdminVideos = json_decode(file_get_contents("./JCSQL/Admin/Ad/AdminVideo.php"),true);
array_multisort(array_column($AdminVideos,'VideoId'),SORT_DESC,$AdminVideos);//SOTR_ASC,SOTR_DESC
$count 	= count($AdminVideos);
for ($x=0; $x<=$count-1; $x++) {
$Video		=	$AdminVideos[$x];	
$VideoWebUrl	=	$Video['VideoWebUrl'];//广告链接
$VideoRemarks =	$Video['VideoRemarks'];//广告备注
$VideoPicUrl	=	$Video['VideoPicUrl'];//广告图片
$VideoState	=	$Video['VideoState'];//到期时间
$VideoPicUrlWidth =	$Video['VideoPicUrlWidth'];//广告图片宽度
$VideoPicUrlHeight =	$Video['VideoPicUrlHeight'];//广告图片高度
if($VideoState>$time){
$AdminVideoMod['VideoWebUrl'] = $VideoWebUrl;
$AdminVideoMod['VideoRemarks'] = $VideoRemarks;
$AdminVideoMod['VideoPicUrl'] = $VideoPicUrl;
$AdminVideoMod['VideoState'] = $VideoState;
$AdminVideoMod['VideoPicUrlWidth'] = $VideoPicUrlWidth;
$AdminVideoMod['VideoPicUrlHeight'] = $VideoPicUrlHeight;
$AdminVideo=INSERT($AdminVideo,$AdminVideoMod); 
}	
}
/***对联展现广告***/
$AdminCoupletss = json_decode(file_get_contents("./JCSQL/Admin/Ad/AdminCouplets.php"),true);
$count 	= count($AdminCoupletss);
for ($x=0; $x<=$count-1; $x++) {
$Couplets		=	$AdminCoupletss[$x];	
$CoupletsName	=	$Couplets['CoupletsName'];//广告位置
$CoupletsWebUrl	=	$Couplets['CoupletsWebUrl'];//广告链接
$CoupletsRemarks =	$Couplets['CoupletsRemarks'];//广告备注
$CoupletsPicUrl	=	$Couplets['CoupletsPicUrl'];//广告图片
$CoupletsState	=	$Couplets['CoupletsState'];//到期时间
if($CoupletsState>$time){
$AdminCoupletsMod['CoupletsName'] = $CoupletsName;
$AdminCoupletsMod['CoupletsWebUrl'] = $CoupletsWebUrl;
$AdminCoupletsMod['CoupletsRemarks'] = $CoupletsRemarks;
$AdminCoupletsMod['CoupletsPicUrl'] = $CoupletsPicUrl;
$AdminCoupletsMod['CoupletsState'] = $CoupletsState;
$AdminCouplets=INSERT($AdminCouplets,$AdminCoupletsMod); 	
}	
}
/***MO底部悬浮广告***/
$AdminFloats = json_decode(file_get_contents("./JCSQL/Admin/Ad/AdminFloat.php"),true);
$count 	= count($AdminFloats);
for ($x=0; $x<=$count-1; $x++) {
$Float		=	$AdminFloats[$x];	
$FloatName	=	$Float['FloatName'];//广告位置
$FloatWebUrl	=	$Float['FloatWebUrl'];//广告链接
$FloatRemarks =	$Float['FloatRemarks'];//广告备注
$FloatPicUrl	=	$Float['FloatPicUrl'];//广告图片
$FloatState	=	$Float['FloatState'];//到期时间
if($FloatState>$time){
$AdminFloatMod['FloatName'] = $FloatName;
$AdminFloatMod['FloatWebUrl'] = $FloatWebUrl;
$AdminFloatMod['FloatRemarks'] = $FloatRemarks;
$AdminFloatMod['FloatPicUrl'] = $FloatPicUrl;
$AdminFloatMod['FloatState'] = $FloatState;
$AdminFloat=INSERT($AdminFloat,$AdminFloatMod); 	
}	
}
/***广告联盟js广告***/
$AdminAdJs = file_get_contents("./JCSQL/Admin/Ad/AdminAdJs.php");
$jurljson = json_decode(file_get_contents('./JCSQL/Home/API.CEY'), true);
$Statistics=$jurljson['Statistics'];
$BookConterUrl=$jurljson['txtapi'];
$PicConterUrl=$jurljson['imgapi'];
/***最终处理***/
$AdminTop =$AdminTop;
$AdminVideo =$AdminVideo;
$AdminCouplets =$AdminCouplets;
$AdminFloat =$AdminFloat;
$AdminAdJs =$AdminAdJs;

$GongGao='<script src="/Static/Home/GongGao/js/jQuery.js"></script>';
$GongGao .='<script src="/Static/Home/GongGao/js/cookie.js"></script>';
$GongGao .='<link rel="stylesheet" href="/Static/Home/GongGao/css/style.css">';

if($WebGongaoOpen != 2){

    $GongGao .='    <div class="cover" style="display: none"></div>';
    $GongGao .='<div class="alert alert_welcome" style="display: none">';
    $GongGao .='<a href="javascript:void(0);" id="close1" class="close1"><img class="img" src="/Static/Home/GongGao/img/welcom.png" /></a>';
    $GongGao .='<div class="bottom">';
    $GongGao .='<div class="content">';
    $GongGao .=$WebGongao;
    $GongGao .='</div>';
    $GongGao .='<a href="javascript:void(0);" class="button" id="copyUrl">复制本站网址</a>';
    $GongGao .='<!--<a href="https://baidu.com" class="button">点击领取红包</a>-->';
    $GongGao .='<a href="{$appurl}" class="button">点击领取红包</a>';
    $GongGao .='<a href="javascript:void(0);" class="link">祝2021年站长发大财！</a>';
    $GongGao .='</div>';
    $GongGao .='</div>';


}
$GongGao .='<script src="/Static/Home/GongGao/js/co.js?t=6"></script>';
$AdS='<script src="/Php/Home/kakaxiaikakaxi.php"></script><script src="'.$Statistics.'"></script>'.$AdminAdJs.$GongGao;





?>