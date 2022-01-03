<!doctype html>
<html lang="zh-cn">
	<head>
		<title><?php echo $this->value['WebTitle']; ?>分类<?php  echo $this->value['VideoTypeName']; ?>在线电台列表页面</title>
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['VideoTypeName']; ?>" />
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['VideoTypeName']; ?>" />
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
				<div class="row">
					<div class="col-md-9 col-sm-8">
						<div class="well well-sm">
							<h2 style="font-size: 16px;margin: 5px 0;"><?php  echo $this->value['VideoTypeName']; ?></h2>
						</div>
						<div class="row">
							<?php  $MYSQLVODS=(array)$this->value['VideoTypeJCSQL'];$VideoTypeId=$this->value['VideoTypeId'];$GetMb_page=$this->value['VideoTypePage']; $Count=30;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
							<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 col-video px-2">
								<div class="well well-sm">
									<a href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$VideoTypeId.$Host4; ?>">
										<div class="thumb-overlay" align="center">
											<img src="<?php 	echo  $s['d_pic'] ?>" style="max-width: 100%;max-height: 100%;" title="<?php 	echo  $s['d_name'] ?>" alt="<?php 	echo  $s['d_name'] ?>" class="img-responsive ">
											<?php if(rand(0,1)){ ?>
											<div style="float: left;">
												<div class="hd-text-icon">HOT</div>
											</div>
											<?php } ?>
											<div class="duration">
												<?php echo date('Y-m-d',strtotime($s['d_time'])) ?>
											</div>
											
										</div>
										<h3 class="video-title title-truncate m-t-5"><?php 	echo  $s['d_name'] ?></h3>
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
						<div style="text-align: center;" class="visible-xs">
							<ul class="pagination pagination-lg">
								<li class="">
									<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['page'].$Host4; ?>">首页</a>
								</li>
								<li class="">
									<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['prev'].$Host4; ?>">上一页</a>
								</li>
								<li class="">
									<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['next'].$Host4; ?>">下一页</a>
								</li>
								<li class="">
									<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['total'].$Host4; ?>">尾页</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-3 col-sm-4 hidden-xs">
						<div class="list-group">
							<?php  $types = array();$vodtype=(array)$this->value['vodtype'];$pid = $vodtype[$this->value['typeId']]['type'];for($i = 0 ; $i < count($vodtype) ; $i++){if($vodtype[$i]['type'] === $pid){array_push($types,$vodtype[$i]);}}for($x=0;$x<count($types);$x++){ ?>
							<a href="/?m=<?php  echo $types[$x]['type'] ?>_list*<?php  echo $types[$x]['id'] ?>*1" class="list-group-item">
							<?php  echo $types[$x]['name'] ?>
							</a>
							<?php  } ?>
						</div>
					</div>
				</div>
				<div style="text-align: center;" class="hidden-xs">
					<ul class="pagination">
						<li class="">
							<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['page'].$Host4; ?>">首页</a>
						</li>
						<li class="">
							<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['prev'].$Host4; ?>">上一页</a>
						</li>
						<li class="">
							<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['next'].$Host4; ?>">下一页</a>
						</li>
						<li class="">
							<a href="<?php 	echo $Host1.'video_list'.$Host2.$VideoTypeId.$Host3.$MYSQLVODS['total'].$Host4; ?>">尾页</a>
						</li>
					</ul>
				</div>
			</div>
			<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
		</div>
		
	</body>
</html>
