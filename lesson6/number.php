<?php 

$num = 5.34566765234234;
echo ceil($num) . "<br>";
echo floor($num). "<br>";
echo round($num, 2). "<br>";

echo pow(5, 3). "<br>";


$money = rand(1000, 999999999);

// number_format($number, $decimal, $decimalDelimiter, $sep);
// $numer = số truyền vào
// $decimal = quy định mấy chữ số cuối cùng là số đơn vị thập phân
// $decimalDelimiter = Ký tự ngăn cách của đơn vị thập phân so với đơn vị số nguyên
// $sep = ký tự ngăn cách 3 đơn vị số
echo number_format($money, 0, ".", ".") . " đ" ;

echo "<br>";
$x = "567";
$y = (float) $x;
$z = intval($x);
var_dump($x);
var_dump($y);
var_dump($z);












 ?>