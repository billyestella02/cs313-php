<?php
	session_start();
	
	if (empty($_SESSION['cart'])) {
		$_SESSION['cart'] = array();
	}

	echo $_SESSION['headset_count'] . "<br>";
	echo $_SESSION['keyboard_count'] . "<br>";
	echo $_SESSION['mouse_count'] . "<br>";
	
	array_push($_SESSION["cart"], $_GET["id"]);
	
?>
<!DOCTYPE html>
<html>
<p> item successfully added to cart! </p>
<a href="week03.php">Continue Shopping</a><br>
<a href="view-cart.php">View Cart</a>
</html>

