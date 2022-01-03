<?php

function safeRequest($data){
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}



?>