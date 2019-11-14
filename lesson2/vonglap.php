<?php 
	// hiển thị danh sách các thẻ h2 có nội dung text từ 19 => 30
	
	// vòng lặp trong php
	// hiển thị các số chia hết có 
	// 3 hoặc 5 mà không chia hết cho cả 2 trong khoảng từ 1 => 50;	
	$x = 1;
	while($x <= 50){
		if(($x%3==0 || $x%5==0) && $x%15 != 0){
			echo "<h2>$x</h2>";	
		}
		$x++;
	}

 ?>
 