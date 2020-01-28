<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<body>
	<form action="confirmation.php" method="post">
		<p>
		<input type="text" name="street" placeholder="Street Address"><br><br>
		<input type="text" name="street_line2" placeholder="Street Address Line 2"><br><br>
		<input type="text" name="city" placeholder="City"><br><br>
		<input type="text" name="state_province" placeholder="State/Province"><br><br>
		<input type="text" name="zip" placeholder="Postal/Zip Code"><br><br>
		<input type="text" name="country" placeholder="Country"><br><br>
		<input type="button" value="Submit">
	</form>

</body>
</html>
