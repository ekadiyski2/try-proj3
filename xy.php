<?php
function xy($x, $y)
{
	if($x > $y)
	{
		for ($i=$y; $i <= $x; $i++) { 
			echo "$i ";
		}
	}
	else
	{
		for ($i=$x; $i < $y; $i++) { 
			echo "$i ";
		}	
	}
}

xy(5, 52);
?>

<h5>
	<?php xy(11, 1); ?>
</h5>