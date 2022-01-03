<?php
//$GetMb_id
//$GetMb_page
$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_id.'.txt'),true);
//$MYSQLVODS=PAGE($MYSQLVODS,$GetMb_page,'5');
$count=count($MYSQLVODS)-1;
$tpl->assign('VideoTypeJCSQL', $MYSQLVODS);
$tpl->assign('VideoTypePage', $GetMb_page);
$tpl->assign('VideoTypeId', $GetMb_page);


$VideoType=$vodtype[$GetMb_id];
$VideoTypeId=$VideoType['id'];
$VideoTypeName=$VideoType['name'];
$tpl->assign('VideoTypeId', $VideoTypeId);
$tpl->assign('VideoTypeName', $VideoTypeName);

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>