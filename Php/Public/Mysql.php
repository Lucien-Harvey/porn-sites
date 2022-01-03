<?php
//INSERT增
function INSERT($mysql,$check){
	$mysql[]=$check;
	$return=$mysql;
	return $return;
	
}	
//DELETE删
function DELETE($mysql,$check){
	unset($mysql[$check]);
	$return=$mysql;	
	$return = array_values($return);
	return	$return;
}
//UPDATE改
function UPDATE($mysql,$zhujian,$check){
	$mysql[$zhujian]=$check;
	$return=$mysql;
	return $return;	
}
//SELECT查
function SELECT($mysql,$check){
	$return=$mysql[$check];
	return $return;	
}

?>