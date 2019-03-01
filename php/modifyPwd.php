<?php
header('Content-Type: application/json');

if($_REQUEST['old_password'] == '123' && $_REQUEST['password'] == '456'){
    $data = ["message"=>"success"];
    echo json_encode($data);
}
else{
    $data = ["message"=>"faliture"];
    echo json_encode($data);
}
