<?php 
$a = rand(2, 100);

$i = 2;
// vòng lặp chạy từ 2 đến a-1
while($i < $a){
	if($a%$i==0){
		break;
	}
	$i++;
} 

if($i < $a){
	echo "$a không phải số nguyên tố";
}else{
	echo "$a là số nguyên tố";
}

 ?>