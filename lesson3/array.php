<?php 
// tạo ra 1 mảng mới
$arr = ["phạm khả quang", "Vũ Chí Thành", 150, false, 1];
// var_dump($arr);
// echo "<br>";
// $arr[] = 350;
// var_dump($arr);

// for ($i=0; $i < count($arr); $i++) { 
// 	echo $arr[$i]. "<br>";
// }

// tạo 1 mảng gồm 20 số random trong 1->100
$arr2 = [];
for ($i=0; $i < 20; $i++) { 
	$arr2[] = rand(1, 100);
}
echo "<pre>";
var_dump($arr2);
// tính tổng các phẩn tử trong mảng

 ?>