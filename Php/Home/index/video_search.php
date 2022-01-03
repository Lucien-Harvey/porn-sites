<?php


error_reporting(0);

//$GetMb_id
//$GetMb_page
$uubb=array();
//include('./Php/Public/Mysql.php');
for ($x=1; $x<=18; $x++) {
 $search = json_decode(file_get_contents('./JCSQL/Home/'.$x.'.txt'),true);
$uubb=array_merge($uubb,$search);

}
$GetMb_id = clean_xss($GetMb_id,true);

function search($uubb,$GetMb_id) {
$a=$uubb;
$arr=$result=array();
foreach ($a as $key => $value) {

foreach ($value as $valu) {
if(strstr($valu, $GetMb_id) !== false)
{


    array_push($arr, $key);
} 
} 
}



foreach ($arr as $key => $value) {

if(array_key_exists($value,$a)){

array_push($result, $a[$value]);
}
}

return $result; 
}

$MYSQLVODS=search($uubb,$GetMb_id);
if($MYSQLVODS ==NULL){
    echo '<script>alert("抱歉！无'.$GetMb_id.'搜索结果！点击确定返回首页！");window.location.href="?"</script>';    exit();
}


//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('SearchTypeJCSQL', $MYSQLVODS);
$tpl->assign('SearchTypePage', $GetMb_page);

$tpl->assign('SearchTypeId', $GetMb_id);
$tpl->assign('SearchTypeName', $GetMb_id);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>