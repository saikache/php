<h5>Swaping 2 variables in a single line.</h5>
<?php 
	echo $e = 3;
	echo $r = 4;
?>
<hr>
<?php
	$e = ($e + $r) - ($r = $e);
	echo $e;
	echo $r;
?>