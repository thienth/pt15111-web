<?php 
$a = rand(1, 10);
$b = rand(1, 10);
echo "Số a = $a, số b = $b<br>";
$x = 1;
$bcln = $a*$b;
while ($x < $bcln) {
	if($x%$a == 0 && $x%$b == 0){
		break;
	}

	$x++;
}

echo "Bội chung nhỏ nhất của 2 số $a, $b là: $x";




 ?>