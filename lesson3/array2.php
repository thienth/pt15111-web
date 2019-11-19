<?php 

$arr = [
	'id' => 1679,
	'name' => 'tran huu thien',
	'age' => 29,
	'isMarried' => true
];
$arr2 = [3,5,6,8,3,12,7];
// for ($i=0; $i < count($arr); $i++) { 
// 	echo $arr[$i] . "<br>";
// }
foreach ($arr2 as $key => $value) {
	echo $key . "-" . $value . "<br>";
}
 ?>