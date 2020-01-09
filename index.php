<?php

	//echo 'Press 1 for Addition'.'<br>';
	//echo 'Press 2 for Subtruction'.'<br>';
	//echo 'Press 3 for Multiplication'.'<br>';
	//echo 'Press 4 for Division'.'<br>';
	//echo 'Press 5 for Exit'.'<br>';


	function add($x, $y)
	{
		$result = $x + $y;
		echo 'Addition is : '.$result;
	}
	//add(10, 2);
	//echo '<br>';

	//substruction
	function sub($x, $y)
	{
		$result = $x -$y;
		echo 'Substruction is : '.$result;
	}
	//sub(10, 2);
	//echo '<br>';

	//multiplicaltion 
	function mul($x, $y)
	{
		$result = $x * $y;
		echo'Multiplication is : '.$result;
	}
	//mul(10, 2);
	//echo '<br>';

	//division
	function div($x, $y)
	{
		$result = $x + $y;
		echo 'Division is : '.$result;
	}
	//div(10, 2);
	//echo '<br>';

	//switch case
	$a = 4;
	switch ($a) {
		case 1:
			add(10,2);
			break;
		case 2:
			sub(10,2);
			break;
		case 3:
			mul(10, 2);
			break;
		case 4:
			div(10, 2);
			break;
		
		default:
			echo 'Input does not match';
			break;
	}

?>