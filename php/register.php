<?php 
header("Content-type:application/json");
	if($_REQUEST['email']=="123456789@qq.com"&& $_REQUEST['password'] == "123"&&$_REQUEST['username'] == "cxd" ){
	     $data=["message"=>"success"];
		 echo json_encode($data);
	}
	else{
		$data=["message"=>"failure"];
		 echo json_encode($data);
	}
 ?> 