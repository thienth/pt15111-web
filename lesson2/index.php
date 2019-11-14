<?php 
	$a = 1;
	$b = 2;
	$c = 1;

	$delta = pow($b, 2) - 4*$a*$c;

	if($delta < 0){
		echo "Vô nghiệm";
	}else if($delta == 0){

		//tính nghiệm kép
		$x = -$b/(2*$a);
		echo "Nghiệm kép x = $x";
	}else{
		// tính kết quả 2 nghiệm
		$x1 = (-$b+sqrt($delta))/(2*$a);
		$x2 = (-$b-sqrt($delta))/(2*$a);
		echo "2 nghiệm phân biệt: <br>";
		echo "x1 = $x1<br>";
		echo "x2 = $x2<br>";

	}


 ?>