<?php 
function sum(){
	$arg = func_get_args();
	$total = 0;
	foreach ($arg as $value) {
		$total += $value;
	}
	return $total;
}


 ?>