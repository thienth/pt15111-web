<?php 

$birth = mktime(null, null, null, 1, 4, 1999);
// $date = date("F, d Y", $birth);
// echo "Loan's style: " . $date . "<br>";
// echo "Ngày sinh: " . mktime(null, null, null, 1, 4, 1999). "<br>";
// echo "Now: " . time(). "<br>";

// echo "Số giây đã sống: " . (time() - (int)$birth);
// echo "<pre>";
// $parts = getdate($birth);
// // var_dump($parts);

// echo "ngày " . $parts['mday'] 
// 		. " tháng " . $parts['mon'] 
// 		. " năm " . $parts['year'];
$ha = strtotime("1999-12-01 -7 hours");
$date = date("F, d Y", $ha);
echo $date;

 ?>