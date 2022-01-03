<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="http://www.91king.xyz/Template/020hua/images/logo.ico" type="image/x-icon" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black">
		<meta http-equiv="Cache-Control" content="no-transform">
		<meta http-equiv="Cache-Control" content="no-siteapp">
		<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>套图介绍</title>
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
		<link rel='stylesheet' id='main-css' href='<?php echo $this->value['StylePath']; ?>/css/style.css' type='text/css' media='all'>
		<script type='text/javascript' src='<?php echo $this->value['StylePath']; ?>/js/jquery.js'></script>
		<link href="<?php echo $this->value['StylePath']; ?>/css/font-awesome.css" rel="stylesheet">
		<style>
			.shangxia {
				color: #fff !important;
				background-color: #cb0ced;
				height: 20px;
				line-height: 20px;
				padding-left: 5px;
				padding-right: 5px;
				margin: 0 5px 5px 0;
				text-align: center;
				font-size: 14px;
				font-weight: bold;
				border-radius: 3px;
				display: inline-block;
			}

			.shangxia:hover {
				color: #fff !important;
				background-color: #00aeff;
				height: 30px;
				line-height: 30px;
				padding-left: 5px;
				padding-right: 5px;
				margin: 0 5px 5px 0;
				text-align: center;
				font-size: 14px;
				font-weight: bold;
				border-radius: 3px;
			}
		</style>
	</head>
	<body class="single single-post postid-33 single-format-standard comment-open">
		<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
		<section class="container">
			<div class="content-wrap">
				<div class="content">
					<header class="article-header">
						<h1 class="header-title">
							<a><?php echo $this->value['Name']; ?></a>
						</h1>
						<div id="video-entry">
							<div id="javhd" class="jwplayer jw-reset jw-state-idle jw-stretch-uniform jw-flag-aspect-mode jw-skin-javhd jw-breakpoint-4 jw-flag-user-inactive"
							 tabindex="0" aria-label="Video Player" role="application" style="width: 100%;">
								<style type="text/css">
									@media screen and (min-width:1000px) {
										.playBox {
											height: 400px;
										}
									}

									@media screen and (max-width:1000px) {
										.playBox {
											height: 250px;
										}
									}
								</style>
								<div class="jw-aspect jw-reset playBox" align="center">
									<img src="<?php echo $this->value['Pic']; ?>" alt="<?php echo $this->value['Name']; ?>" style="height: 100%;width: auto;">
								</div>
							</div>
						</div>
					</header>
					<article class="article-content">
						<div class="bfdz">
							<a id="server1" rel="nofollow">选择线路:</a>
							<a href="<?php echo $this->value['CUrl']; ?>" target="iFrame1" class="lBtn">
								<i class="fa fa-play-circle-o fa-spin fa-lg"></i> 在线浏览 </a>
							<a href="<?php echo $this->value['CUrl']; ?>" target="iFrame1" class="lBtn">
								<i class="fa fa-play-circle-o fa-spin fa-lg"></i> 快速浏览 </a>
						</div>
					</article>
					<div class="asst asst-single-footer">
						<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
																	<li style="list-style-type:none">
																		<a target="_blank"  href="<?php echo $VideoWebUrl?>">
																			<img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>">
																		</a>
																	</li> 
																<?php } ?>
					</div>
					<div class="postitems">
						<h3>&nbsp;<i class="fa fa-star"></i> 同类推荐</h3>
						<hr>
						<ul>
							<?php  $PicType=$this->value['PicType']; $MYSQLVOD=(array)$this->value['PicTypeJCSQL'];shuffle($MYSQLVOD);  $Count=8;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
							<li>
								<a class="thumbnail" href="<?php 	echo  $Host1.'pic_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$PicType.$Host4; ?>" style="height: auto;">
									<img src="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" style="width: 100%;height: auto;max-height: 133px;" data-src="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" class="thumb">
									<i class="fa fa-camera"></i>
									<?php 	echo  $MYSQLVODs['a_name'] ?>
								</a>
							</li>
							<?php  } ?>
						</ul>
					</div>
					</script>
					<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
						<tr>
							<td bgcolor="#FFFFFF" id="infocommentarea"></td>
						</tr>
					</table>
					
				</div>
			</div>
			</div>
			<div class="sidebar">
				<div class="widget widget-postlist">
					<h3><i class="fa fa-fire"></i> 热门内容</h3>
					<ul>
						<?php  $PicType=$this->value['PicType']; $MYSQLVOD=(array)$this->value['PicTypeJCSQL'];shuffle($MYSQLVOD);  $Count=12;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
						<li>
							<a class="thumbnail" href="<?php 	echo  $Host1.'pic_detail'.$Host2.$MYSQLVODs['a_id'].$Host3.$PicType.$Host4; ?>" style="height: auto;">
								<img src="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" style="width: 100%;height: auto;max-height: 133px;" data-src="<?php 	echo  $MYSQLVODs['a_remarks'] ?>" class="thumb" style="display: inline;">
								<i class="fa fa-camera"></i>
								<font color="FF00DE"><?php 	echo  $MYSQLVODs['a_name'] ?></font>
							</a>
						</li>
						<?php  } ?>
					</ul>
				</div>
			</div>
		</section>
		<div class="0258b019881f371c"></div>
		<div class="rewards-popover-mask" etap="rewards-close"></div>
		<script type='text/javascript' src='<?php echo $this->value['StylePath']; ?>/js/libs.js'></script>
		<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
	</body>
</html>
