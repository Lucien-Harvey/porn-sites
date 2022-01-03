<!doctype html>
<html lang="zh-cn">
	<head>
		<title><?php echo $this->value['WebTitle']; ?>-<?php echo $this->value['ListName']; ?>-<?php echo $this->value['Name']; ?>视频介绍</title>
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php echo $this->value['ListName']; ?>,<?php echo $this->value['Name']; ?>" />
		<meta name="theme-color" content="#778899">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<meta name="robots" content="index, follow">
		<meta name="google" content="notranslate">
		<link href="<?php echo $this->value['StylePath']; ?>/css/all-201909012.css" rel="stylesheet" type="text/css">
		<link href="<?php echo $this->value['StylePath']; ?>/css/20190328new-201909012.css" rel="stylesheet">
		<link href="<?php echo $this->value['StylePath']; ?>/css/20190430-1201909012.css" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/all.css" crossorigin="anonymous">
		<script type="text/javascript" src="<?php echo $this->value['StylePath']; ?>/js/jquery.coin-0.1.js"></script>
	</head>
	<body>
		<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
		<div id="wrapper">
			<div class="container">
				<nav class="breadcrumbs m-b-10 hidden-xs" typeof="BreadcrumbList">
					<div class="container-fluid p-0">
						<span property="itemListElement" typeof="ListItem">
							<a property="item" typeof="WebPage" href="#" class="home">
								<span property="name"><?php echo $this->value['ListName']; ?></span>
							</a>
						</span>
						<span>&nbsp;›&nbsp;</span>
						<span property="itemListElement" typeof="ListItem">
							<a property="item" typeof="WebPage" href="#" class="taxonomy category">
								<span property="name"><?php echo $this->value['Name']; ?></span>
							</a>
						</span>
						<span>&nbsp;›&nbsp;</span>
					</div>
				</nav>
				<div class="row">
					<div class="col-md-8" id="main_video_block" data-thumb="0" data-thumbs="20">
						<div id="player-bottom-adv-panel" >
							<img src="<?php echo $this->value['Pic']; ?>" style="max-width: 100%; max-height: 100%;" >
						</div>
						<div class="video-info-wrap">
							<h4><?php echo $this->value['Name']; ?></h4>
							<div class="video-info-section hidden-xs">
								<p>观看次数：<span><?php echo $this->value['Rand']; ?></span></p>
								<p>更新日期：<span><?php echo $this->value['Time']; ?></span></p>
							</div>
							<button class="btn-s bg-red m-r-10">
								<a class="recommend-link" style="margin-left: 0px !important;color: #FFF;" href="<?php echo $this->value['CUrl']; ?>">在线播放</a>
							</button>
							<button class="btn-s bg-red m-r-10">
								<a class="recommend-link" style="margin-left: 0px !important;color: #FFF;" href="<?php echo $this->value['CUrl']; ?>">备用线路</a>
							</button>
						</div>
						<div class="clearfix"></div>
						<?php $Video=(array)$this->value['VideoWebAd'];$Video_count=count($Video);for ($x=0; $x<=$Video_count-1; $x++) {$VideoWeb=$Video[$x];$VideoWebUrl=$VideoWeb['VideoWebUrl'];$VideoRemarks=$VideoWeb['VideoRemarks'];$VideoPicUrl=$VideoWeb['VideoPicUrl'];$VideoState=$VideoWeb['VideoState'];$VideoPicUrlWidth=$VideoWeb['VideoPicUrlWidth'];$VideoPicUrlHeight=$VideoWeb['VideoPicUrlHeight'];;?> 
							<li style="list-style: none;"><a target="_blank"  href="<?php echo $VideoWebUrl?>"><img style="width:<?php echo $VideoPicUrlWidth?>;height:<?php echo $VideoPicUrlHeight?>;margin-bottom:2px;" src="<?php echo $VideoPicUrl?>"></a></li> 
						<?php } ?>
						<div class="well well-sm">
							<h2 style="font-size: 16px;margin: 5px 0;">同类推荐</h2>
						</div>
						<div class="row">
							<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeJCSQL'];shuffle($MYSQLVOD);  $Count=6;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-video px-2">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>">
										<div class="thumb-overlay" align="center">
											<img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" style="max-width: 100%;max-height: 100%;" title="<?php 	echo  $MYSQLVODs['d_name'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($MYSQLVODs['d_time'])) ?>
											</div>
											
										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $MYSQLVODs['d_name'] ?></h3>
										<div class="videoBox-action">
											<span>观看次数：<?php 	echo   rand(5, 10000); ?></span>
											<span style="float: right;"><i class="fas fa-thumbs-up px-2"></i><span class="number"><?php 	echo   rand(5, 10000); ?></span></span>
										</div>
									</a>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php  } ?>
						</div>
					</div>
					<div class="col-md-4 m-b-20  m-recommed-block m-video-contain">
						<p class="hidden-xs" style="font-size:16px;margin-left: -10px;">推荐播放</p>
						<input name="current_page_related_videos" type="hidden" value="1" id="current_page_related_videos">
						<div class="row">
							<?php  $VideoType=$this->value['VideoType']; $MYSQLVOD=(array)$this->value['VideoTypeJCSQL'];shuffle($MYSQLVOD);  $Count=12;for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVODs=$MYSQLVOD[$x];  ?>
							<div class="col-xs-6 col-sm-4 col-md-6 col-lg-6 col-video px-2">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVODs['d_id'].$Host3.$VideoType.$Host4; ?>">
										<div class="thumb-overlay" align="center">
											<img src="<?php 	echo  $MYSQLVODs['d_pic'] ?>" style="max-width: 100%;max-height: 100%;" title="<?php 	echo  $MYSQLVODs['d_name'] ?>" alt="<?php 	echo  $MYSQLVODs['d_name'] ?>" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($MYSQLVODs['d_time'])) ?>
											</div>
											
										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $MYSQLVODs['d_name'] ?></h3>
										<div class="videoBox-action">
											<span>观看次数：<?php 	echo   rand(5, 10000); ?></span>
											<span style="float: right;"><i class="fas fa-thumbs-up px-2"></i><span class="number"><?php 	echo   rand(5, 10000); ?></span></span>
										</div>
									</a>
									<div class="clearfix"></div>
								</div>
							</div>
							<?php  } ?>		
						</div>
					</div>
				</div>
			</div>
			
			<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
		</div>
		
	</body>
</html>
