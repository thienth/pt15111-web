<?php 

// for ($i=0; $i < 100; $i++) { 
// 	echo "<h1>$i</h1>";
// }

for ($i=100; $i >= 1 ; $i--) { 
	if($i%3==0){
		continue;
	}
	echo "<h1>$i</h1>";
}
 ?>