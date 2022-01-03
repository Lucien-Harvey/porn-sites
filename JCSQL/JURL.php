<?php
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);
$jurl=base64_decode($jurl);

date_default_timezone_set('PRC'); //设置中国时区 
ini_set("max_execution_time", "12000");
ob_implicit_flush(true);

	function get_http_code($url) {  
			$curl = curl_init();  
			curl_setopt($curl, CURLOPT_URL, $url); //设置URL  
			curl_setopt($curl, CURLOPT_HEADER, 1); //获取Header  
			curl_setopt($curl, CURLOPT_TIMEOUT_MS, 4000);
			curl_setopt($curl, CURLOPT_NOBODY, true); //Body就不要了吧，我们只是需要Head  
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1); //数据存到成字符串吧，别给我直接输出到屏幕了  
			$data = curl_exec($curl); //开始执行啦～  
			$return = curl_getinfo($curl, CURLINFO_HTTP_CODE); //我知道HTTPSTAT码哦～    
			curl_close($curl); //用完记得关掉他  
			  
			return $return;  
		}
		
		function GETZIP($ERR1,$ERR2) { 

			$VODZIP_URL=explode($ERR1."/",$ERR2);
			$VODZIP_URL=$VODZIP_URL['1'];
			$VODZIPCONTER=fopen($ERR2, 'rb');
			if(!is_dir(__DIR__.'/tmp')) mkdir(__DIR__.'/tmp');
			$tmp = __DIR__ . '/tmp/' .$VODZIP_URL;//缓存目录
			$VODZIPCONTERURL = fopen($tmp, 'wb');	
			
			while (!feof($VODZIPCONTER)) {
				fwrite($VODZIPCONTERURL, fread($VODZIPCONTER, 6280));
			}
				fclose($VODZIPCONTER);
				fclose($VODZIPCONTERURL);
				//压缩包1.zip下载完毕
				
				include_once(__DIR__ . '/Zip.php');
				$zip = new Zip();
				$zip->extra($tmp, __DIR__. '/Home/');
				//压缩包1.zip解压完毕
				

		
		}	
			
		function BUG($ERR1) {
				if($ERR1==null){}else{
					$bugzip=$ERR1;
					//开始下载
					$remote_fp = fopen($bugzip, 'rb');
					if(!is_dir(__DIR__.'/tmp')) mkdir(__DIR__.'/tmp');
					$tmp = __DIR__ . '/tmp/' . date('YmdHis') . '.zip';
					$local_fp = fopen($tmp, 'wb');
					echo '更新...<br/>';
					
					while (!feof($remote_fp)) {
						fwrite($local_fp, fread($remote_fp, 128));
					}
					fclose($remote_fp);
					fclose($local_fp);
					echo '下载完成,准备解压<br/>';
					
					include_once(__DIR__ . '/Zip.php');
					$zip = new Zip();
					$zip->extra($tmp,'../');
					echo '解压完成,准备删除临时文件<br/>';
					
					//删除补丁包
					unlink($tmp);
					echo '临时文件删除完毕<br/>';
					
					
				}			
			
		}		

		
		
		
		
		$httpCode = get_http_code($jurl); 
		if($httpCode =='200'){
			$jurljson = json_decode(file_get_contents($jurl), true);
		}else{
			echo '更新服务器通讯失败，极有可能正在维护中或者其他原因，请站长联系制作者，本日跳过数据更新进入站点';
			file_put_contents('../JCSQL.JCSQL',date('Ymd', time()));
			echo'<script type="text/javascript">window.location.href="/";</script>';
			exit();
		}



function deleteDir($path) {

    if (is_dir($path)) {
        //扫描一个目录内的所有目录和文件并返回数组
        $dirs = scandir($path);

        foreach ($dirs as $dir) {
            //排除目录中的当前目录(.)和上一级目录(..)
            if ($dir != '.' && $dir != '..') {
                //如果是目录则递归子目录，继续操作
                $sonDir = $path.'/'.$dir;
                if (is_dir($sonDir)) {
                    //递归删除
                    deleteDir($sonDir);

                    //目录内的子目录和文件删除后删除空目录
                    @rmdir($sonDir);
                } else {

                    //如果是文件直接删除
                    @unlink($sonDir);
                }
            }
        }
        @rmdir($path);
    }
}	






		
?>