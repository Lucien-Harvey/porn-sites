<?php
$AdminIeUrl	=NULL;
$AdminIeUrlS = json_decode(file_get_contents("./JCSQL/Admin/Ad/AdminIeUrl.php"),true);
array_multisort(array_column($AdminIeUrlS,'IeUrlId'),SORT_DESC,$AdminIeUrlS);//SOTR_ASC,SOTR_DESC
$count 	= count($AdminIeUrlS);
for ($x=0; $x<=$count-1; $x++) {
$IeUrl		=	$AdminIeUrlS[$x];	
$IeUrlId	=	$IeUrl['IeUrlId'];//友链排序
$IeUrlName	=	$IeUrl['IeUrlName'];//友链标题
$IeUrlWebUrl	=	$IeUrl['IeUrlWebUrl'];//友链链接
$IeUrlState	=	$IeUrl['IeUrlState'];//友链状态	
if($IeUrlState =='ok'){
$AdminIeUrlMod['IeUrlId'] = $IeUrlId;
$AdminIeUrlMod['IeUrlName'] = $IeUrlName;
$AdminIeUrlMod['IeUrlWebUrl'] = $IeUrlWebUrl;
$AdminIeUrlMod['IeUrlState'] = $IeUrlState;
$AdminIeUrl=INSERT($AdminIeUrl,$AdminIeUrlMod); 	
}




}
$AdminIeUrl =$AdminIeUrl;


?>