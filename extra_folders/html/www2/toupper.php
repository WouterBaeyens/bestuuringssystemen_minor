<?php
if (isset($_GET['code'])) {
	echo strtoupper($_GET['code']);
}else{
	echo "no code given";	    
}
?>

