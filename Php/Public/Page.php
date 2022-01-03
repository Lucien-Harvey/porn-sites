<?php

function PAGE($MYSQLVODS,$page,$pagesize){

$MYSQLVODSs =array();
$return =array();
$current  =$page;
$total=floor(Count($MYSQLVODS)/$pagesize);//求总页数
$total=$total?$total:1;
    $prev=(($current-1)<=0 ? "1":($current-1));//确定上一页，如果当前页是第一页，点击显示第一页
$next=(($current+1)>=$total ? $total:$current+1);//确定下一页，如果当前页是最后一页，点击下页显示最后一页
$current=($current>($total)?($total):$current);//当前页如果大于总页数，当前页为最后一页
$start=($current-1)*$pagesize;//分页显示时，应该从多少条信息开始读取

for($i=$start;$i<($start+$pagesize);$i++){
    if ($MYSQLVODS[$i]){
        array_push($return,$MYSQLVODS[$i]);//将该显示的信息放入数组 $_return 中
    }
}

$MYSQLVODSs["source"]=$return;
$MYSQLVODSs["page"]='1';
$MYSQLVODSs["prev"]=$prev;
$MYSQLVODSs["next"]=$next;
$MYSQLVODSs["total"]=$total;
return	$MYSQLVODSs;
}
?>