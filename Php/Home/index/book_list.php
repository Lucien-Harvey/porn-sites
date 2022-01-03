<?php
//echo $GetMb_id;
//$GetMb_page
$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_id.'.txt'),true);


$count=count($MYSQLVODS)-1;
$tpl->assign('BookTypeJCSQL', $MYSQLVODS);
$tpl->assign('BookTypePage', $GetMb_page);
$tpl->assign('BookTypeId', $GetMb_page);


$BookType=$vodtype[$GetMb_id];
$BookTypeId=$BookType['id'];
$BookTypeName=$BookType['name'];
$tpl->assign('BookTypeId', $BookTypeId);
$tpl->assign('BookTypeName', $BookTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>