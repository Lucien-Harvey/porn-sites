<html>
<head>
<meta charset="utf-8">
<link rel="shortcut icon" href="http://www.91king.xyz/Template/xiaofan_001/images/logo.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php  echo $this->value['VideoTypeName']; ?> - <?php echo $this->value['WebTitle']; ?></title>
<meta name="keywords" content="<?php  echo $this->value['VideoTypeName']; ?>">
<meta name="description" content="<?php  echo $this->value['VideoTypeName']; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<link href="<?php echo $this->value['StylePath']; ?>/css/msvod.css" rel="stylesheet" type="text/css">
</head>

<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<div class="main">
<div class="panel panel-default">
<div class="panel-head"><div class="f-r lh40">共有视频<span class="f20 colordef"> x</span> 部</div>
<h2 class="f-l f18 colordef panel-title"><?php  echo $this->value['VideoTypeName']; ?></h2><span class="lh40 colorgray"></span>
</div>

<div class="panel-body">
<ul class="panel-list">
 
 <?php  $MYSQLVODS=(array)$this->value['VideoTypeJCSQL'];$VideoTypeId=$this->value['VideoTypeId'];$GetMb_page=$this->value['VideoTypePage']; $Count=20;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
 <li class="video last">
<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$VideoTypeId.$Host4; ?>" target="_blank" title="<?php 	echo  $s['d_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $s['d_pic'] ?>" alt="<?php 	echo  $s['d_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name"><?php 	echo  $s['d_name'] ?>.</h2>
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

<div class="text-center pages">
<ul class="pagination">
<li><a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['prev'].$Host4; ?>" >上一页</a></li>
<li><a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['page'].$Host4; ?>" > 首页 </a></li>
<li><a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['total'].$Host4; ?>">尾页</a></li>
<li class="pagecur"><a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['next'].$Host4; ?>">下一页</a></li>


</ul>
</div>
</div>
</div>
<!--<div class="bk30"></div>-->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
</html>