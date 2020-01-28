<?php
	session_start();

	$items = array("Gaming Headset", "Gaming Keyboard", "Gaming Mouse");

	$headset_count = 0;
	$keyboard_count = 0;
	$mouse_count = 0;
	
	$quantities = array_count_values($_SESSION['cart']);
	print_r($quantities);
	
	foreach ($quantities as $key => $value) {
		 # echo "$items[$key] " . " " . "$value <br>" ;
		 echo $items[$key] . "\t" . $value . "<br>"; 
	}
?>

<!DOCTYPE html>
<html>
<body>
	<a href="week03-checkout.php">Proceed to Checkout</a>
</body>
</html>
