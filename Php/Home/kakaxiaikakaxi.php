<?php
date_default_timezone_set("Asia/Shanghai");//设置时区
$time=date("Ymd");//当前年月日
$LEFTAD1Pic =Null;
$LEFTAD1Web =Null;
$LEFTAD2Pic =Null;
$LEFTAD2Web =Null;
$LEFTAD3Pic =Null;
$LEFTAD3Web =Null;
$FloatWebUrl =Null;
$FloatPicUrl =Null;
$AdminCoupletss = json_decode(file_get_contents("../../JCSQL/Admin/Ad/AdminCouplets.php"),true);
$count 	= count($AdminCoupletss);
for ($x=0; $x<=$count-1; $x++) {
$Couplets		=	$AdminCoupletss[$x];	
$CoupletsName	=	$Couplets['CoupletsName'];//广告位置
$CoupletsWebUrl	=	$Couplets['CoupletsWebUrl'];//广告链接
$CoupletsRemarks =	$Couplets['CoupletsRemarks'];//广告备注
$CoupletsPicUrl	=	$Couplets['CoupletsPicUrl'];//广告图片
$CoupletsState	=	$Couplets['CoupletsState'];//到期时间
$LEFTAD =NULL;

if($CoupletsState>$time){
	if($CoupletsName=='上对联'){
		$LEFTAD1Pic =$CoupletsPicUrl;
		$LEFTAD1Web =$CoupletsWebUrl;
	}
	if($CoupletsName=='中对联'){
		$LEFTAD2Pic =$CoupletsPicUrl;
		$LEFTAD2Web =$CoupletsWebUrl;
	}	
	if($CoupletsName=='下对联'){
		$LEFTAD3Pic =$CoupletsPicUrl;
		$LEFTAD3Web =$CoupletsWebUrl;
	}

}	
}
/***MO底部悬浮广告***/
$AdminFloats = json_decode(file_get_contents("../../JCSQL/Admin/Ad/AdminFloat.php"),true);
$count 	= count($AdminFloats);
for ($x=0; $x<=$count-1; $x++) {
$Float		=	$AdminFloats[$x];	
$FloatName	=	$Float['FloatName'];//广告位置
$FloatWebUrl	=	$Float['FloatWebUrl'];//广告链接
$FloatRemarks =	$Float['FloatRemarks'];//广告备注
$FloatPicUrl	=	$Float['FloatPicUrl'];//广告图片
$FloatState	=	$Float['FloatState'];//到期时间


if($FloatState>$time){
$FloatWebUrl = $FloatWebUrl;
$FloatPicUrl = $FloatPicUrl;
	
}else{
$FloatWebUrl = '';
$FloatPicUrl = '';
}	
}
?>

(function(){
    var imgs=[
        {src:"<?php echo $FloatPicUrl?>",link:'<?php echo $FloatWebUrl?>'}
    ];
    var side={
        left1:{src:"<?php echo $LEFTAD1Pic?>",link:'<?php echo $LEFTAD1Web?>'},
        left2:{src:"<?php echo $LEFTAD2Pic?>",link:'<?php echo $LEFTAD2Web?>'},
        left3:{src:"<?php echo $LEFTAD3Pic?>",link:'<?php echo $LEFTAD3Web?>'},
        right1:{src:"<?php echo $LEFTAD1Pic?>",link:'<?php echo $LEFTAD1Web?>'},
        right2:{src:"<?php echo $LEFTAD2Pic?>",link:'<?php echo $LEFTAD2Web?>'},
        right3:{src:"<?php echo $LEFTAD3Pic?>",link:'<?php echo $LEFTAD3Web?>'},
    }
    var ua = navigator.userAgent.toLocaleLowerCase(),
        mobileOn=ua.match(/(phone|pad|pod|iPhone|iPod|ios|iPad|Android|Mobile|BlackBerry|IEMobile|MQQBrowser|JUC|Fennec|wOSBrowser|BrowserNG|WebOS|Symbian|Windows Phone)/i);
        dom=document.createElement('div'),
        style=document.createElement('style'),
        propaHTML='';
        num=parseInt(Math.random()*imgs.length);
    style.innerHTML='.propa_bottom{position:fixed;width:100%;height:60px;left:0;bottom:0;background:rgba(0,0,0,0.5)}'+
                    '.propa_bottom img{display:block;width:auto;height:100%;margin:0 auto;}'+
                    '.propa_left1,.propa_left2,.propa_left3{position:fixed;left:0;}'+
                    '.propa_right1,.propa_right2,.propa_right3{position:fixed;right:0;text-align: right;}'+
                    '.propa_left1 img,.propa_left2 img,.propa_left3 img,.propa_right1 img,.propa_right2 img,.propa_right3 img{opacity: 1;max-height:100%;max-width:100%;}'+
                    '.propa_left1,.propa_right1{top:0}'+
                    '.propa_left2,.propa_right2{top:50%;margin-top:-7.25%}'+
                    '.close{position:absolute;right:0;top:0;font-size: 14px;padding: 5px 10px;background: rgba(0, 0, 0, 0.8);color: #fff;display: inline-block;}'+
                    '.propa_right1 .close,.propa_right2 .close,.propa_right3 .close{right:0; left:unset}';
	if(imgs[num].src){
        var dom1=document.createElement('div');
        dom1.innerHTML='<a class="propa_bottom"  target="_blank"  href="'+imgs[num].link+'" >'+'<img id="propa_bottom" src='+imgs[num].src+' /><span class="close">关闭</span></a>';
        if(document.cookie.search('propa=true')==-1){
            document.body.appendChild(dom1);
            document.getElementById('propa_bottom').onload = function(e){
                style.innerHTML+='.propa_left3,.propa_right3{bottom:'+document.getElementById('propa_bottom').offsetHeight+'px}';
                style.innerHTML+='body{padding-bottom: 60px !important;}';
            }
        }else{
            style.innerHTML+='.propa_left3,.propa_right3{bottom:0}';
        }
    }
    if(mobileOn){
        style.innerHTML+='.propa_right1,.propa_right2,.propa_right3,.propa_left1,.propa_left2,.propa_left3{width:20%;max-height: 25%;overflow:hidden}';
    }else{
        style.innerHTML+='.propa_right1,.propa_right2,.propa_right3,.propa_left1,.propa_left2,.propa_left3{width:200px;max-height: 25%;overflow:hidden}';
    }
    if(!mobileOn||!imgs[num].src){
        style.innerHTML+='.propa_left3,.propa_right3{bottom:0}';
    }
    if(side.left1.src&&document.cookie.search('propa_left1=true')==-1){
        propaHTML+='<a class="propa_left1" target="_blank" href="'+side.left1.link+'" >'+'<img src='+side.left1.src+' /><span class="close">关闭</span></a>'
    }
    if(side.left2.src&&document.cookie.search('propa_left2=true')==-1){
        propaHTML+='<a class="propa_left2" target="_blank" href="'+side.left2.link+'" >'+'<img src='+side.left2.src+' /><span class="close">关闭</span></a>'
    }
    if(side.left3.src&&document.cookie.search('propa_left3=true')==-1){
        propaHTML+='<a class="propa_left3" target="_blank" href="'+side.left3.link+'" >'+'<img src='+side.left3.src+' /><span class="close">关闭</span></a>'
    }
    if(side.right1.src&&document.cookie.search('propa_right1=true')==-1){
        propaHTML+='<a class="propa_right1" target="_blank" href="'+side.right1.link+'" >'+'<img src='+side.right1.src+' /><span class="close">关闭</span></a>'
    }
    if(side.right2.src&&document.cookie.search('propa_right2=true')==-1){
        propaHTML+='<a class="propa_right2" target="_blank" href="'+side.right2.link+'" >'+'<img src='+side.right2.src+' /><span class="close">关闭</span></a>'
    }
    if(side.right3.src&&document.cookie.search('propa_right3=true')==-1){
        propaHTML+='<a class="propa_right3" target="_blank" href="'+side.right3.link+'" >'+'<img src='+side.right3.src+' /><span class="close">关闭</span></a>'
    }
    document.getElementsByTagName('head')[0].appendChild(style);
    dom.innerHTML=propaHTML;
    document.body.appendChild(dom);
    for(var i=0,max=document.getElementsByClassName('close').length;i<max;i++){
        document.getElementsByClassName('close')[i].onclick=function(event){  
            event.preventDefault();
            this.parentNode.style.display='none';
            var expires = 24 * 60 * 60 * 1000;
            var date = new Date(+new Date()+expires);
            document.cookie=this.parentNode.className+"=true;expires="+date.toUTCString(); 
            console.log(document.cookie);
        }
    }
})(); 