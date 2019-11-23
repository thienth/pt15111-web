<pre>
<?php
// lấy dữ liệu từ form 
$str = $_GET['txt'];

var_dump($str);
// chuyển chuỗi thành mảng
$arr = [];
for ($i=0; $i < strlen($str); $i++) { 
	$arr[] = $str[$i];
}
var_dump($arr);

$arr2 = [];
// đảo ngược mảng 1 => $arr2
for ($i=count($arr)-1; $i >=0; $i--) { 
	$arr2[] = $arr[$i];
}
var_dump($arr2);

$palindrome = true;
// so sánh từng phần tử trong 2 mảng với index bằng nhau
for ($i=0; $i < count($arr); $i++) { 
	if($arr[$i] != $arr2[$i]){
		$palindrome = false;
		break;
	}
}

if($palindrome == true){
	echo "Đây là chuỗi palindrome";
}else{
	echo "Đây không phải chuỗi palindrome";
}

 ?>

<form action="" method="get">
	<input type="text" name="txt">
	<button type="submit">submit</button>
</form>