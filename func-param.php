<?php
function print_text($msg, $tag, $col)
{
	for ($i=0; $i <10 ; $i++) { 
		echo "<$tag style='color: $col'> $msg </$tag>";
	}
}

print_text('Hello', 'p', 'blue');
?>


<?php print_text('How are you', 'h4', 'green'); ?>
