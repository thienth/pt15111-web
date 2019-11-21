<?php 

$x = 10;

function test(){
	global $x;
	var_dump($x);
}

test();

 ?>
