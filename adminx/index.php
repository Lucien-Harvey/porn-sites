<?php
$ADMINKEY='9CCMS18';
//引入公共辅助函数
include("../Php/Public/Helper.php");
if(isset($_GET['Php'])){	
	$Php = safeRequest($_GET['Php']);
}else{	
	$Php = NULL;
}
//插件菜单模块
if (is_dir('../Php/Admin/Plug')){
    $plug_dir = scandir('../Php/Admin/Plug');
    if ($plug_dir){
        //插件菜单
        $plug_menu =array(
            array(
                'plug_name'=>'站群管理',
                'plug_path'=>'Plug/Zhanqun/index',
            ),
        );
    }
}

if($Php ==NULL){ 
//登录路由入口
include('../Php/Admin/Login.php'); 
}
if(strpos($Php,'Home') !== false){
//后台路由入口
include("../Php/Public/Home.php");
include('../Php/Admin/'.$C_T_0.'.php'); 
}
if(strpos($Php,'Cancellation') !== false){ 
//注销路由入口
include("../Php/Public/Cancellation.php");
include('../Php/Admin/'.$C_T_0.'.php'); 
}
if(strpos($Php,'Plug') !== false){
//插件路由入口
include("../Php/Public/Plug.php");  
}

?>