<html>
<head>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>	<?php echo $this->value['Name']; ?> - <?php echo $this->value['ListName']; ?> - <?php echo $this->value['WebTitle']; ?></title>
<meta name="keywords" content="<?php echo $this->value['ListName']; ?>">
<meta name="description" content="<?php echo $this->value['ListName']; ?>">
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8"/>
<script src="<?php echo $this->value['StylePath']; ?>/js/jquery.min.js"></script>
<script src="<?php echo $this->value['StylePath']; ?>/js/owl.carousel.min.js"></script>
<link href="<?php echo $this->value['StylePath']; ?>/css/msvod.css" rel="stylesheet" type="text/css">
</head>

<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
<div class="main">
<div class="panel panel-default">
<div class="panel-head">
<h2 class="f-l f18 colordef panel-title"><?php echo $this->value['Name']; ?></h2><span class="lh40 colorgray"></span>
</div>

<div class="panel-body">

 
<?php echo $this->value['Play']; ?>

</div>
<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
							<li><a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a></li> 
						 <?php } ?>
						 
<div class="panel-head">
<h2 class="f-l f18 colordef panel-title"><?php echo $this->value['ListName']; ?>推荐图片</h2><span class="lh40 colorgray"></span>
</div>

<div class="panel-body">
<ul class="panel-list">
 
<?php  $PicType=$this->value['PicType']; $MYSQLVOD=(array)$this->value['PicTypeJCSQL'];shuffle($MYSQLVOD);  $Count=12;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
 <li class="video last">
<a href="<?php 	echo  $Host1.'pic_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$PicType.$Host4; ?>" target="_blank" title="<?php 	echo  $MYSQLVODs['a_name'] ?>">
<div class="thumb"><img src="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" alt="<?php 	echo  $MYSQLVODs['a_name'] ?>" /></div>
<h2 class="f16 video-title product-buyer-name">{<?php 	echo  $MYSQLVODs['a_name'] ?></h2>
<div class="f12 video-details">

<div class="video-details-2">
<span class="f-l fa fa-clock-o"><?php echo $this->value['Time']; ?></span>
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
<!--<div class="bk30"></div>-->
<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
</html>