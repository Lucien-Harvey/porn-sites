<?php
//过滤提交参数
function safeRequest($data){
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>