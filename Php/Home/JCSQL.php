<?php
header('Content-Type:text/html;charset=utf-8');
date_default_timezone_set('PRC'); //设置中国时区
$files=file('JCSQL.JCSQL');
 $files=$files['0'];
 $filess=date('Ymd', time());
if($files ==$filess){
	
}else{
?>
<script type="text/javascript">
　　window.location.href="/JCSQL/index.php";
　　</script>
<?php
exit();	
}


?>