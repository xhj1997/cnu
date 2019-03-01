<?php  
	header("Content-type:application/json");
	include "selectdata.php";

	if(!isset($_REQUEST['flag'])){
		exit;
	}

	$flag = $_REQUEST['flag'];

	//如果$flag == 1时，获取省份数据
	if($flag == 1){
		$province = $provinceJson;
		echo json_encode($province);
	}
	else if($flag == 2){
		$citys = $cityJson;
		$id = $_REQUEST['id'];

		if ($id == -1) {
			echo "xxx";
			exit();
		}

		$selectcity = [];
		foreach ($citys as $value) {
			if($value->id == $id){
				$selectcity[] = $value;
				break;
			}
			if($value->parent == $id){
				$selectcity[] = $value;
			}
		}
		echo json_encode($selectcity);
	}
	else if($flag == 3){
		$countrys = $countyJson;

		$id = $_REQUEST['id'];
		if ($id == -1) {
			echo "xxx";
			exit();
		}

		$selectcountry = [];
		foreach ($countrys as $value) {
			if($value->parent == $id){
				$selectcountry[] = $value;
			}
		}
		echo json_encode($selectcountry);
	}
	
	
?>