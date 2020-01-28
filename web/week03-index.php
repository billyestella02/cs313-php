<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Shopping Cart | CS313</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial scale=1.0">
<link rel="stylesheet" href="week03-cs313.css">
</head>
<body>
<div id="flexbox">
<div class="product">
	<img src="gaming-headset.png" height="200" width="160">
    <h3>Gaming Headset</h3>
	<span>$80</span>
    <a href="add-to-cart.php?id=0">Add to Cart</a>
  </div>
  <div class="product">
	<img src="gaming-keyboard.png" height="200" width="280">
    <h3>Gaming Keyboard</h3>
	<span>$65</span>
    <a href="add-to-cart.php?id=1">Add to Cart</a>
  </div>
  <div class="product">
    <img src="gaming-mouse.png" height="200" width="220">
    <h3>Gaming Mouse</h3>
	<span>$40</span>
    <a href="add-to-cart.php?id=2">Add to Cart</a>
  </div>
  </div>
  <a href="view-cart.php">View Cart</a>
  
</body>
</html>
