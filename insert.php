<style>
	
</style>


<?php
	include 'connection.php';
	$sql = "insert into users(name, email, address)
		values('Sagar', 'sagar@gamil.com', 'YKSG')
	";

	$statement  = $con->query($sql) or die(mysqli_error($con));
	if ($statement) {
			echo 'Value inserted successfully';
		}	
	
?>

<form action="">
	<label for="">Enter you name</label><br>
	<input type="text" name="name" class="input"><br>

	<label for="">Enter you email</label><br>
	<input type="text" name="email" class="input"><br>

	<label for="">Enter you address</label><br>
	<input type="text" name="address " class="input"><br>


</form>