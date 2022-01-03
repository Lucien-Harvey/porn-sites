<?php
//$GetMb_id
//$GetMb_page
$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_id.'.txt'),true);
//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('RadioTypeJCSQL', $MYSQLVODS);
$tpl->assign('RadioTypePage', $GetMb_page);
$tpl->assign('RadioTypeId', $GetMb_page);


$RadioType=$vodtype[$GetMb_id];
$RadioTypeId=$RadioType['id'];
$RadioTypeName=$RadioType['name'];
$tpl->assign('RadioTypeId', $RadioTypeId);
$tpl->assign('RadioTypeName', $RadioTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>