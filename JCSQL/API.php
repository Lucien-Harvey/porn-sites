<?php

ignore_user_abort(true); // 后台运行，不受前端断开连接影响
set_time_limit(3600); // 脚本最多运行1个小时
//后台运行的后面还要，set_time_limit(0); 除非在服务器上关闭这个程序，否则下面的代码将永远执行下去止到完成为止。
//如果程序运行不超时,在没有执行结束前,程序不会自动结束的.
//=========================================
//PHP中，在客户端发出请求触发脚本执行，然后在服务器端执行一段代码，页面关闭了也要继续执行，并且要先返回一些状态给客户端，避免前端等待超时。

ob_end_clean();//清除之前的缓冲内容，这是必需的，如果之前的缓存不为空的话，里面可能有http头或者其它内容，导致后面的内容不能及时的输出
$jurl=file_get_contents('API.KEY');$jurl=base64_decode($jurl);
include_once './JURL.php';
//jurl&&CURL=====$jurljson
//deleteDir('./Home');

//deleteDir('./tmp');
 // $Home = iconv("UTF-8", "GBK", "./Home");
//if (!file_exists($Home)){mkdir ($Home,0777,true); }

//  $tmp = iconv("UTF-8", "GBK", "./tmp");
//if (!file_exists($tmp)){mkdir ($tmp,0777,true); }
echo '尊敬的来宾您好，'.$jurljson['version'].'的数据正在更新中！';echo '<hr/>';
$VODZIP=$jurljson['zip'];
$VODZIPcount=count($jurljson['zip']);
for ($x=0; $x<=$VODZIPcount-1; $x++) {
 GETZIP($jurljson['version'],$VODZIP[$x]);

} 

BUG($jurljson['bug']);




file_put_contents('./Home/API.CEY',file_get_contents($jurl));
//header("Connection: close");//告诉浏览器，连接关闭了，这样浏览器就不用等待服务器的响应
//header("HTTP/1.1 200 OK"); //可以发送200状态码，以这些请求是成功的，要不然可能浏览器会重试，特别是有代理的情况下

