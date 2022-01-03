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
		<title><?php echo $this->value['WebTitle']; ?>-<?php  echo $this->value['SearchTypeName']; ?>-搜索结果页</title>
		<meta name="keywords" content="<?php echo $this->value['WebKeywords']; ?>,<?php  echo $this->value['SearchTypeName']; ?>" />
		<meta name="description" content="<?php echo $this->value['WebDescription']; ?>,<?php  echo $this->value['SearchTypeName']; ?>" />
		<link rel='stylesheet' id='main-css' href='<?php echo $this->value['StylePath']; ?>/css/style.css' type='text/css' media='all'>
		<script type='text/javascript' src='<?php echo $this->value['StylePath']; ?>/js/jquery.js'></script>
	</head>
	<body class="home blog">
		<?php $mubantou=$this->value['Header'];$this->show($mubantou); ?>
		<section class="container">
			<div class="excerpts-wrapper">
				<div class="excerpts">
					<h2 class="multi">&nbsp;&nbsp;<i class="fa fa-play-circle"></i> <span class="title">搜索内容：<?php  echo $this->value['SearchTypeName']; ?></span></h2>
					<?php  $MYSQLVODS=(array)$this->value['SearchTypeJCSQL'];$SearchTypeId=$this->value['SearchTypeId'];$GetMb_page=$this->value['SearchTypePage']; $Count=9;$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,$Count);  foreach($MYSQLVODS['source'] as $s){  ?>
					<article class="excerpt excerpt-c3">
						<a title="<font color='FF00DE'><?php 	echo  $s['d_name'] ?></font>" target="_blank" class="thumbnail" href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$s['d_type'].$Host4; ?>">
							<img src="<?php 	echo  $s['d_pic'] ?>" data-src="<?php 	echo  $s['d_pic'] ?>" class="thumb"><i
							 class="fa fa-play-circle-o"></i></a>
						<a class="cat" href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$s['d_type'].$Host4; ?>"><?php  echo $this->value['SearchTypeName']; ?></a>
						<h2><i class="fa fa-camera"></i> <a title="<font color='FF00DE'><?php 	echo  $s['d_name'] ?></font>" target="_blank" href="<?php 	echo  $Host1.'video_detail'.$Host2.$s['d_id'].$Host3.$s['d_type'].$Host4; ?>">
								<font color='FF00DE'><?php 	echo  $s['d_name'] ?>"</font>
							</a></h2>
						<footer>
							<time class="hot"><i class="fa fa-thumbs-o-up"></i> 推荐</time>
							<span class="post-view"><i class="fa fa-eye"></i>
							</span>
							<span class="ribbon" style="top:-146px;">评分：<?php echo rand(5,9) ?>.<?php echo rand(0,9) ?>分</span>
						</footer>
					</article>
					<?php  } ?>
				</div>
			</div>
			<div class="page5">
				<a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['page'].$Host4; ?>">首页</a>&nbsp;
				<a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['prev'].$Host4; ?>">上一页</a>&nbsp;
				<a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['next'].$Host4; ?>">下一页</a>&nbsp;
				<a href="<?php 	echo $Host1.'video_search'.$Host2.$SearchTypeId.$Host3.$MYSQLVODS['total'].$Host4; ?>">尾页</a>
				</div>
		</section>
		<?php $mubantou=$this->value['Footer'];$this->show($mubantou); ?>
	</body>
</html>
