<?php
	$con = new mysqli('localhost', 'root','', 'test_1');
	if ($con) {
		echo 'yes';
	}
	else
		echo 'no data base connection';
?>