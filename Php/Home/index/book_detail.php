<?php
//$GetMb_id
//$GetMb_page


$MYSQLVODS = json_decode(file_get_contents('./JCSQL/Home/'.$GetMb_page.'.txt'),true);

$BookTypeName=$vodtype[$GetMb_page];
$BookTypeName=$BookTypeName['name'];
$tpl->assign('BookTypeJCSQL', $MYSQLVODS);
$tpl->assign('BookType', $GetMb_page);
$tpl->assign('ListName', $BookTypeName);
$tpl->assign('ListUrl',$Host1.'book_list'.$Host2.$GetMb_page.$Host3.'1'.$Host4);
$tpl->assign('DUrl', $Host1.$GetMb_tmp.$Host2.$GetMb_id.$Host3.$GetMb_page.$Host4);
$tpl->assign('CUrl', $Host1.'book_conter'.$Host2.$GetMb_id.$Host3.$GetMb_page.$Host4);
$count=count($MYSQLVODS)-1;
$FFCZ =null;
for ($x=0; $x<=$count; $x++) {

  $MYSQLVODSs=$MYSQLVODS[$x];
  if($MYSQLVODSs['a_id'] ==$GetMb_id ){
	  $tpl->assign('Id', $MYSQLVODSs['a_id']);
	  $tpl->assign('Name', $MYSQLVODSs['a_name']);
	  $tpl->assign('overview', $MYSQLVODSs['a_remarks']);
	  $tpl->assign('Pic', $MYSQLVODSs['a_pic']);
	  $tpl->assign('Time', $MYSQLVODSs['a_time']);
	  $FFCZ='4';
  }
} 
if($FFCZ ==null){ Header("Location:?");  }

$tpl->show($this_WebMoban.'/html/'.$GetMb_tmp);

?>