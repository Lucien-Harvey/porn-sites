<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="http://www.91king.xyz/Template/xiaofan_001/images/logo.ico" type="image/x-icon" />
<meta property="og:type" content="image"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Cache-Control" content="no-transform " />
<title><?php echo $this->value['WebTitle']; ?></title>
<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>">
<meta name="description" content="<?php echo $this->value['WebKeywords']; ?>">
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/layui.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<link href="<?php echo $this->value['StylePath']; ?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/headr.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/index.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/list.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css">
<link href="<?php echo $this->value['StylePath']; ?>/css/owl.theme.default.min.css" rel="stylesheet" type="text/css">
<!--[if IE]>
<script src="<?php echo $this->value['StylePath']; ?>/js/html5shiv.min.js"></script>
<![endif]-->
</head>
<div class="head"><div class="deanmaintops" id="deandingbu">
<div class="deanheader">
<div class="w1180">
<div class="deanhdtopl">
<div class="deangz">
<div class="deangztop">
<a class="deanzhuzhan" style="color:#fff;" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">手机APP</a>
<!--<div class="deangzpic"></div>--></div></div><ul>
<li><a class="deanyxzx" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">永久地址发布页</a></li>
<div class="clear"></div></ul></div>
<div class="deanhdtopr">
<div class="deandl"><style type="text/css">
.deanlogin .pipe{ display:none;} 
.deanlogin dl a{ padding:0;}
</style>
<div class="deanlogin">                 
<style tpye="text/css">
</style>
<div class="deandenglu" style=" margin-right:15px;">
<div class="ceanundl">
<ul>
<li class="deandlfde"><a class="deandldl" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">登陆</a></li>
<li><a class="deandlzc" href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">注册</a></li>
<div class="clear"></div>
</ul>
</div>
</div>     
</div></div>
</div>
<div class="clear"></div>
</div>
</div>        
<div class="deanheaderbg">
<div class="w1180">
<div class="deanlogo"><h2><a href="./"><img src="<?php echo $this->value['WebLogo']; ?>" width="230px" height="70px" border="0"></a></h2></div>
<div class="deansearch">
<div id="scbar" class="cl">

<form class="topnav_menu_search" action="/index.php?m=search&c=index&a=init&typeid=53&siteid=1&q="  name="search" type="get">
<input type="hidden" name="m" value="search">
<input type="hidden" name="c" value="index">
<input type="hidden" name="a" value="init">
<input type="hidden" name="typeid" value="53" id="typeid">
<input type="hidden" name="siteid" value="1" id="siteid">
<table cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td>
<input  name="search"  type="text" id="scbar_txt" class=" xg1" placeholder="基地搜索." value=""></td>
<td><button type="submit" name="searchsubmit" id="scbar_btn" sc="1" class="pn pnc" value="true">搜&nbsp;索&nbsp;</button></td>
</tr>
</tbody>
</table>
</form>
</div>

</div>
<div class="clear"></div>
</div>
</div>
</div>
<div class="nav-pinupbox">
<div class="nav-pinup">
<div class="menu">
<ul class="f16 menu-list">
<li id="menu-item-0"><a href="/">网站首页</a></li>
  <li class="testactive"><a href="#">视频一区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='1,2,3,4,5,6';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
    <li class="testactive"><a href="#">视频二区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='7,8,9,10,11,12';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
  <li class="testactive"><a href="#">视频三区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='13,14,15,16,17,18';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
  <li class="testactive"><a href="#">小说资源</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='19,20,21,22,23,24';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
   <li class="testactive"><a href="#">美图专区</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='25,26,27,28,29,30';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>
   <li class="testactive"><a href="#">电台种子</a>
        <div class="dropdownlist">
         <ul>
          <?php $vodtypes=(array)$this->value['数据分类'];$shuzu='31,32,33,34,35,36';$explode=explode(',',$shuzu);$count=count($explode);$data=array();for ($x=0; $x<=$count-1; $x++) {$aass=$explode[$x];$data[$x]=$explode[$x];}$countt=count($data);for ($x=0; $x<=$countt-1; $x++) {$fenleivod=$vodtypes[$data[$x]];$name=$fenleivod['name'];$id=$fenleivod['id'];$type=$fenleivod['type'];?> <li><a href="<?php     echo $Host1.$type.'_list'.$Host2.$id.$Host3.'1'.$Host4;?>"><?php echo $name?></a></li><?php } ?>
          
         </ul>
	    </div>
  </li>



</ul>
</div>
<div class="gonggao">
<div class="main">
  <span>公告：</span>永久网址 www.91king.xyz 我们致力于提供最全面的AV视频免费服务。为你的所爱而来，为你的发现停留！
</div>
</div>
</div>
</div>
</div>
<div class="topad">
<ul class="topad-list ad-col1">

<?php $AdminTop=(array)$this->value['TopWebAd'];$AdminTop_count=count($AdminTop);for ($x=0; $x<=$AdminTop_count-1; $x++) {$TopWeb=$AdminTop[$x];$TopWebUrl=$TopWeb['TopWebUrl'];$TopRemarks=$TopWeb['TopRemarks'];$TopPicUrl=$TopWeb['TopPicUrl'];$TopState=$TopWeb['TopState'];$TopPicUrlWidth=$TopWeb['TopPicUrlWidth'];$TopPicUrlHeight=$TopWeb['TopPicUrlHeight'];;?> <li><a href="<?php echo $TopWebUrl?>" target="_blank"><img src="<?php echo $TopPicUrl?>" width="<?php echo $TopPicUrlWidth?>" height="<?php echo $TopPicUrlHeight?>"></a></li><?php } ?>

</ul>
</div>

 <!--主体内容-->
<div class="main">
 <!--视频一区-->
<div class="panel panel-default">
<div class="panel-head"><a href="#" class="f-r morelink">更多视频</a>

<h2 class="f-l fa colordef fa-upload hot-title panel-title">视频一区推荐</h2></div>
<div class="panel-body">
<ul class="panel-list">
<?php  $VideoType=1;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=2;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=4;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=3;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=5;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=6;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
</ul>
</div>
</div>

 <!--视频二区-->

<div class="panel panel-default">
<div class="panel-head"><a href="#" class="f-r morelink">更多视频</a>

<h2 class="f-l fa colordef fa-upload hot-title panel-title">视频二区推荐</h2></div>
<div class="panel-body">
<ul class="panel-list">
<?php  $VideoType=7;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=8;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=9;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=10;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=11;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=12;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
</ul>
</div>
</div>
 <!--视频三区-->
<div class="panel panel-default">
<div class="panel-head"><a href="#" class="f-r morelink">更多视频</a>

<h2 class="f-l fa colordef fa-upload hot-title panel-title">视频二区推荐</h2></div>
<div class="panel-body">
<ul class="panel-list">
<?php  $VideoType=13;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=14;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=15;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=16;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=17;  $Count=3;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
<?php  $VideoType=18;  $Count=1;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
<li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVOD['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $MYSQLVOD['d_name'] ?></h2>
<div class="f12 video-details">
<div class="video-details-2">
<span class="f-l fa fa-clock-o"> 时长：</span>
<span class="f-r fa fa-eye"> 已被观看：<?php 	echo   rand(5, 10000); ?> 次</span>
</div>
</div>
</a>
</li>
<?php  } ?>
</ul>
</div>
</div>
</div>

 <!--主体内容结束-->
<div class="f12 footer">
<div class="footbox">
<div class="main">
<div class="f-clo5 f-col5-1">
<dl>
<dt>关于撸片吧</dt>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">备用网址</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">广告投放</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">网址导航</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">网址发布器</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">视频资源</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">网站论坛</a></dd>
</dl>
</div>
<div class="f-clo5 f-col5-2">
<dl>
<dt>会员中心</dt>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">注册会员</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">会员登录</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">加入VIP</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">会员中心</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">宣传奖励</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">每天签到</a></dd>
</dl>
</div>
<div class="f-clo5 f-col5-3">
<dl>
<dt>网站导航</dt>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">国产自拍</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">亚洲高清</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">主播专区</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">欧美激情</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">三级写真</a></dd>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>">二次元动漫</a></dd>
</dl>
</div>
<div class="f-clo5 f-col5-4">
<dl>
<dt>联系我们</dt>
<dd><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank">QQ群：**********</a></dd>
<dd style="font-size:13px;">Email：<?php echo $this->value['WebEmail']; ?></dd>
</dl>
</div>
<div class="f-clo5 f-col5-5">
<dl>
<dt>手机版APP下载</dt>
<dd><img src="images/appewm.png" alt="APP二维码"/></dd>
</dl>
</div>
</div>
</div>
<div class="copyright">
<div class="main">
<p style="font-size:14px;margin-bottom:5px;">
  友情链接：
 <?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?> <a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" target="_blank"><?php 	echo  $IeUrls['IeUrlName'] ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php  } ?>

</p>
<p style="font-size:14px;">警告：本网站明确不能包含非法信息。<br>
本网站严禁发表任何类型的不合法的内容,本站所有视频、图片、小说均由网友上传，如有侵犯权限请联系本站客服删除，本站不承担任何版权相关的法律责任， 请遵守本站协议勿上传不合法内容，若发现将永久封号封IP处理，如果您不自觉遵守本站相关规定否则请单击离开，谢谢合作！</p>
</div>
</div>
</div>

<div class="f-menu">
<ul class="f-menu-list">
<li class="mobileweb"><a href="<?php echo $this->value['WEBUrl']; ?>" target="_blank"><i class="fa fa-mobile" style="color:#1E9FFF;"></i>APP</a></li>
<li class="publish"><a href="<?php echo $this->value['WEBUrl']; ?>"><i class="fa fa-diamond"></i>开通VIP</a></li>
<li class="rechargevip"><a href="<?php echo $this->value['WEBUrl']; ?>"><i class="fa fa-calendar" style="color:#FF5722;"></i>签到奖励</a></li>
<li class="rechargevip"><a href="<?php echo $this->value['WEBUrl']; ?>"><i class="fa fa-share-alt" style="color:#FFB800;"></i>分享奖励</a></li>
<li class="gotop"><a href="#"><i class="fa fa-angle-up" style="color:#009688;"></i>返回顶部</a></li>
</ul>
</div>
<?php echo $this->value['WebAdS']; ?>
</html>