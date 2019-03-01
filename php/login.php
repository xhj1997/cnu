<?php 
header("Content-type:application/json");
	$email = $_REQUEST['email'];
	$pwd = $_REQUEST['password'];
	if($email == "123456789@qq.com" && $pwd == "123"){
		 $data=["message"=>"success"];
		 echo json_encode($data);
	}
	else{
		$data=["message"=>"failure"];
		 echo json_encode($data);
	}
 ?>