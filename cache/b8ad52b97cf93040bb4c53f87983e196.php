<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php echo $this->value['WebTitle']; ?></title>
	<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>" />
	<meta name="description" content="<?php echo $this->value['WebDescription']; ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/uikit.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/css/common.min.css" />
    <link rel="stylesheet" href="<?php echo $this->value['StylePath']; ?>/font/iconfont.css" />
    <script src="<?php echo $this->value['StylePath']; ?>/js/jquery.js"></script>
    <script src="<?php echo $this->value['StylePath']; ?>/js/uikit.min.js"></script>
	<script src="<?php echo $this->value['StylePath']; ?>/js/accordion.min.js"></script>
	<link rel="icon" type="image/png" href="<?php echo $this->value['StylePath']; ?>/images/logo.ico">

</head>
<body>
    <div class="w1200 uk-clearfix">
			<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
				<div class="right-container">
					<!-- 视频分类 -->
					<div class="list-videos uk-margin-top uk-margin-bottom">
						<div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['1'];echo $shuzua['name']; ?></h3></div>
						<div class="video-content uk-grid uk-grid-small">					
							<?php  $VideoType=1;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
								<div class="uk-width-1-3 uk-margin-bottom">
								<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="video-pic uk-display-block">
									<span class="live-tag"></span>
									<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>">
								</a>
								<div class="video-title">
									<a href="#" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left">
											<i class="icon iconfont icon-play"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
										<p class="video-like uk-float-left uk-margin-left">
											<i class="icon iconfont icon-like"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
									</div>
								</div>
							</div>
							<?php  } ?>
						</div>
						<div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['4'];echo $shuzua['name']; ?></h3></div>
						<div class="video-content uk-grid uk-grid-small">					
							<?php  $VideoType=4;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
								<div class="uk-width-1-3 uk-margin-bottom">
								<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="video-pic uk-display-block">
									<span class="live-tag"></span>
									<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>">
								</a>
								<div class="video-title">
									<a href="#" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left">
											<i class="icon iconfont icon-play"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
										<p class="video-like uk-float-left uk-margin-left">
											<i class="icon iconfont icon-like"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
									</div>
								</div>
							</div>
							<?php  } ?>
						</div>
						<div class="video-head uk-clearfix"><h3 class="h3-color uk-float-left"><?php  $vodtypes=(array)$this->value['数据分类'];  $shuzua=$vodtypes['6'];echo $shuzua['name']; ?></h3></div>
						<div class="video-content uk-grid uk-grid-small">					
							<?php  $VideoType=6;  $Count=6;$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$VideoType.'.txt'),true); for ($x=0; $x<=$Count-1; $x++) {  $MYSQLVOD=$MYSQLVODS[$x];  ?>	
								<div class="uk-width-1-3 uk-margin-bottom">
								<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$MYSQLVOD['d_id'].$Host3.$VideoType.$Host4; ?>" class="video-pic uk-display-block">
									<span class="live-tag"></span>
									<img src="<?php 	echo  $MYSQLVOD['d_pic'] ?>" alt="<?php 	echo  $MYSQLVOD['d_name'] ?>">
								</a>
								<div class="video-title">
									<a href="#" class="uk-margin-small-bottom uk-margin-small-top uk-display-block"><?php 	echo  $MYSQLVOD['d_name'] ?></a>
									<div class="uk-clearfix uk-margin-small-top">
										<p class="video-play uk-float-left">
											<i class="icon iconfont icon-play"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
										<p class="video-like uk-float-left uk-margin-left">
											<i class="icon iconfont icon-like"></i>
											<span><?php 	echo   rand(5, 10000); ?></span>
										</p>
									</div>
								</div>
							</div>
							<?php  } ?>
						</div>						
					</div>
				 <!-- 视频结束 -->
					<div class="line"><hr></div>				 
				 
				 
					<div class="list-videos uk-margin-top uk-margin-bottom">
						<div class="video-head uk-clearfix">
							<h3 class="h3-color uk-float-left">友情链接</h3>
						</div>
						<ul class="links-list uk-display-block uk-clearfix">
						<?php  $IeUrl=(array)$this->value['IeUrl']; $Count=Count($IeUrl); for ($x=0; $x<=$Count-1; $x++) {  $IeUrls=$IeUrl[$x];  ?>
						<li class="uk-float-left uk-margin-right"><a href="<?php 	echo  $IeUrls['IeUrlWebUrl'] ?>" target="_blank" class="uk-float-left"><?php 	echo  $IeUrls['IeUrlName'] ?></a></li>
						<?php  } ?>
						</ul>
					</div>
				</div> <!-- header.html闭合DIV -->
			<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
		</div>
	</div>
 </body>
</html>

