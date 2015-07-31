<?php
$tepms = array();

// $tepms[0] = 27;
// $tepms[1] = 30;
// $tepms[2] = 21;
// $tepms[3] = 21;
// $tepms[4] = 25;
// $tepms[5] = 37;
// $tepms[6] = 39;

$n = 0;

for ($i=0; $i <=6 ; $i++) { 

	$tepms[$i] = rand(25, 40);
	$n = $n + $tepms[$i];
}
$n = $n / count($tepms);
print_r($tepms);
echo "<br/>";
echo "Average = $n <br/>";
?>