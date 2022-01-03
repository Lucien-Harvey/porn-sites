<?php
date_default_timezone_set('PRC'); //设置中国时区 
file_put_contents('../JCSQL.JCSQL',date('Ymd', time()));
?>
 

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>数据更新中</title>


        <style>
            *{margin:0;padding:0}
            img{max-width: 100%; height: auto;}
            body{font-family:Droid Sans,Helvetica,Arial;text-align:center;background:#fff}
            h1{height:60px;line-height:60px;font-size:23px;color:#fff;background:#1aad19}
            h2{height:72px;line-height:36px;padding:18px 0;font-size:19px;color:#f10606;background:#fffbbb}
            h2 a{color:#3887f7;text-decoration:none}
            .main{padding:30px 0}
            .x2{font-size:16px;line-height:40px;color:#333}
            .xianlu{font-size:18px;line-height:42px;margin:0 auto;color:#888}
            .xianlu tr{text-align:left}
            .xianlu th{font-weight:normal}
            .xianlu td{font-size:20px}
            .xianlu a{color:#3887f7;text-decoration:none}
            .foot{line-height:24px;font-size:18px;color:#333;}
        </style>
	</head>
	<body>
      <iframe id="mainIframe" name="mainIframe" src="API.php" frameborder="0" scrolling="auto" ></iframe>
 <h1>      <span id="begin">1</span>秒后数据更新完毕自动跳转回首页</h1>
<script>
    var t=1;
    var timer=setInterval(time,1000);
    var spans=document.getElementById("begin");
    function time(){
        t--;
        spans.innerHTML='<span>'+t+'</span>';
        if (t==0){
            clearInterval(timer);
            return window.location.href='/';
        }console.log(t);
    }
</script>

</html>

