<?php
//$GetMb_id
//$GetMb_page
$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_id.'.txt'),true);
//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('BtTypeJCSQL', $MYSQLVODS);
$tpl->assign('BtTypePage', $GetMb_page);
$tpl->assign('BtTypeId', $GetMb_page);


$BtType=$vodtype[$GetMb_id];
$BtTypeId=$BtType['id'];
$BtTypeName=$BtType['name'];
$tpl->assign('BtTypeId', $BtTypeId);
$tpl->assign('BtTypeName', $BtTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>