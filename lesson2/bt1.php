<?php 
	$num = $_GET['number'];

	$total = 0;

	if($num <= 0){
		echo "Vui lòng nhập lại số nguyên dương";
	}else{
		for ($i=1; $i <= $num ; $i++) { 
			if ($i%2==0) {
				$total += $i;
			}
		}
		echo "Tổng các số từ 1 -> n là : $total";
	}



 ?>


<form action="" method="get" >
	Số N <input type="number" name="number">
	<button type="submit">Submit</button>
</form>