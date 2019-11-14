<?php 

	// 1. tính tổng
	// - thu thập dữ liệu từ form
	$a = $_GET['soa'];
	$b = $_GET['sob'];
	$c = $_GET['soc'];
	// var_dump($a, $b, $c);
	// - tính tổng của các giá trị nhận đc từ form
	$tong = $a+$b+$c;
	echo "Tổng 3 số: $a + $b + $c = $tong <br>";
	// 2. tìm số lớn nhất
	$max = $a;
	
	// nếu thỏa mãn đk thì các câu lệnh trong cặp dấu {} sẽ đc thực thi
	if($max < $b){ 
		$max = $b;
	}

	if($max < $c){
		$max = $c;
	}

	echo "Số lớn nhất trong 3 số là: $max <br>";


 ?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>

	<form action="" method="get" >
		<div>
			<label for="">Số A</label>
			<input type="number" name="soa" value="" placeholder="">
		</div>
		<div>
			<label for="">Số B</label>
			<input type="number" name="sob" value="" placeholder="">
		</div>
		<div>
			<label for="">Số C</label>
			<input type="number" name="soc" value="" placeholder="">
		</div>
		<div>
			<button type="submit">Submit</button>
		</div>
		
	</form>
	
</body>
</html>