<!DOCTYPE html> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="title" content="播放器">
<meta name="apple-touch-fullscreen" content="YES">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="format-detection" content="telephone=no">

<title>播放器</title>
<style>
body{
	margin: 0;
}
	.prism-player{
		width: 100% !important;
    height: 100vh !important;
    margin-top: 10px !important;
        position: absolute !important;
    top: 0 !important;
    background: none !important;
	}
	#myVideo{
		dispaly:none !important;
	}
	@media (max-width: 440px){
			.prism-player{
			height:100% !important;
		margin-top: 0 !important;
			}
	}
</style>
</head>
<body>
<div style="width:100%;height:100%">
<video id='myVideo'  class="video-js" ></video>

<div class="prism-player" id="player-con" ></div>

<link rel="stylesheet" href="aliplayer-min.css" />

<script type="text/javascript" charset="utf-8" src="aliplayer-min.js"></script>

<?php  include('../../../Php/Public/Helper.php');?>
<script type="text/javascript" charset="utf-8" src="<?php echo safeRequest($_GET['Play']);?>"></script>
<script src="https://player.alicdn.com/aliplayer/presentation/js/aliplayercomponents.min.js"></script>

</div>
</body>
</html>
