<?php
//$GetMb_id
//$GetMb_page


$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_page.'.txt'),true);

$RadioTypeName=$vodtype[$GetMb_page];
$RadioTypeName=$RadioTypeName['name'];
$tpl->assign('RadioTypeJCSQL', $MYSQLVODS);
$tpl->assign('RadioType', $GetMb_page);
$tpl->assign('ListName', $RadioTypeName);
$tpl->assign('ListUrl',$Host1.'radio_list'.$Host2.$GetMb_page.$Host3.'1'.$Host4);
$tpl->assign('DUrl', $Host1.$GetMb_tmp.$Host2.$GetMb_id.$Host3.$GetMb_page.$Host4);
$tpl->assign('CUrl', $Host1.'radio_conter'.$Host2.$GetMb_id.$Host3.$GetMb_page.$Host4);
$count=count($MYSQLVODS)-1;
$FFCZ =null;
for ($x=0; $x<=$count; $x++) {

  $MYSQLVODSs=$MYSQLVODS[$x];
  if($MYSQLVODSs['d_id'] ==$GetMb_id ){
	  $tpl->assign('Id', $MYSQLVODSs['d_id']);
	  $tpl->assign('Name', $MYSQLVODSs['d_name']);
	  $tpl->assign('Pic', $MYSQLVODSs['d_pic']);
	  $tpl->assign('Time', $MYSQLVODSs['d_time']);
	  $FFCZ='4';
  }
} 
if($FFCZ ==null){ Header("Location:?");  }

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>