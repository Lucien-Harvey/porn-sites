<!doctype html>
<html lang="zh-cn">
	<head>
		<title><?php echo $this->value['WebTitle']; ?></title>
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>" />
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>" />
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
				<div class="well well-filters">
					<div class="pull-left">
						<h2><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['1'];echo $shuzua['name']; ?></h2>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="row overflow-y">
					<div class="col-sm-12 mb-2  mobile-video-block">
						<div class="row">
							<?php  $VideoType=1;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
							<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3 col-video px-3">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
										<div class="thumb-overlay">
											<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" data-thumb-mp4="1" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($MYSQLVOD['d_time'])) ?>
											</div>

										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
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
				<div class="well well-filters">
					<div class="pull-left">
						<h2><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['4'];echo $shuzua['name']; ?></h2>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="row overflow-y">
					<div class="col-sm-12 mb-2  mobile-video-block">
						<div class="row">
							<?php  $VideoType=4;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
							<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3 col-video px-3">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
										<div class="thumb-overlay" align="center">
											<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" style="max-width: 100%;max-height: 100%;" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" data-thumb-mp4="1" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($MYSQLVOD['d_time'])) ?>
											</div>
				
										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
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
				<div class="well well-filters">
					<div class="pull-left">
						<h2><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['8'];echo $shuzua['name']; ?></h2>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="row overflow-y">
					<div class="col-sm-12 mb-2  mobile-video-block">
						<div class="row">
							<?php  $VideoType=8;  $Count=12;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>
							<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3 col-video px-3">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>">
										<div class="thumb-overlay">
											<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" title="<?php 	echo  $MYSQLVOD['d_name'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>" data-thumb-mp4="1" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($MYSQLVOD['d_time'])) ?>
											</div>
				
										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $MYSQLVOD['d_name'] ?></h3>
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
