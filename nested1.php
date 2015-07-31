<?php
$num = 0;

for ($j=0; $j <= 9 ; $j++) { 
	for ($i=0; $i <= 4; $i++) { 
		
		echo "$j,$i [$num]Vratsa | ";
	}
	$num++;
	echo "<br/>";
}

$num = 5;
for ($i=0; $i <=2 ; $i++) { 
	for ($j=0; $j <=4 ; $j++) { 
		echo "$num ";
		$num++;
	}
	echo "<br/>";
	$num += 9;
}
?>