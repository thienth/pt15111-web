<?php 

$x = 10;
function test(&$a){
	$a += 5;
	echo $a;
}

test($x);
echo "<br>";
echo $x;


 ?>