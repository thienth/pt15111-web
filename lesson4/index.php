<?php 
// viết hàm để lấy ra số lớn nhất trong mảng bất kỳ
function getMaxNumber($arr){
	
	$max = $arr[0];
	for ($i=0; $i < count($arr); $i++) { 
		if($max < $arr[$i]){
			$max = $arr[$i];
		}
	}
	return $max;
}

// viết hàm tìm số chia hết cho cả 3 và 5 đầu tiên trong mảng
function b2($arr){
	foreach ($arr as $value) {
		if($value%3==0 && $value%5==0){
			echo "<br>Số chia hết cho cả 3&5 đầu tiên là: $value";
			break;
		}
	}
}

// viết hàm lọc ra các số nguyên tố và trả về
function soNguyenTo($arr){
	$result = [];
	// TODO viet code trong nay


	return $result;
}


$numberArrray = [4,15,2,45,10,100,60,201];

$maximum = getMaxNumber($numberArrray);
echo "Số lớn nhất là: $maximum";
b2($numberArrray);

$mangNguyenTo = soNguyenTo($numberArrray);
var_dump($mangNguyenTo);


 ?>
