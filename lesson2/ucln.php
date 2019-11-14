<?php 
// tìm ước chung lớn nhất của 2 số random a và b
$a = rand(1, 10);
$b = rand(1, 10);
echo "Số a = $a, số b = $b<br>";
// tìm đc số nhỏ hơn trong 2 số a và b
// chạy vòng lặp từ số a => 1
// kiểm tra nếu số x thỏa mãn đk
// a%x==0 && b%x==0
// thì break => x là ước chung lớn nhất
while ($x >= 1){

	$x--;
}

 ?>