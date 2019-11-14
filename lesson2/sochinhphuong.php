<?php 
$a = rand(2, 100);

// kiểm tra số a có phải là số chính phương hay không
// căn bậc 2 của a
$x = 1;
while($x < $a){
	if($a/$x == sqrt($a)){
		echo "Số $a là số chính phương";
		break;
	}
	$x++;
}
if($x == $a){
	echo "Số $a không là số chính phương!";
}


 ?>