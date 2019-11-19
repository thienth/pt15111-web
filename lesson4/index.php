<?php 
// viết hàm để lấy ra số lớn nhất trong mảng bất kỳ
function getMaxNumber($arr){
	
	$max = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if($max < $arr[$i]){
			$max = $arr[$i];
		}
	}

	echo $max;
}

// viết hàm tìm số chia hết cho cả 3 và 5 đầu tiên trong mảng
function b2($arr){

	// echo số chia hết cho 3&5 đầu tiên
}

$numberArrray = [4,549,2,45,10,100,60,201];

getMaxNumber($numberArrray);



 ?>
