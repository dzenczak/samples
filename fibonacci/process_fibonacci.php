<!DOCTYPE html>
<html lang="en">
<head>
	<title>Daniel's Fibonnaci Answer </title>
	<link rel="stylesheet" type="text/css" href="tron.css">
</head>
<body>
<h1 align='center'>Fibonacci Answer</h1>
<?php

require_once( "fibonacci.php" );

$ending_fibonacci_number = $_POST[ 'ending_fibonnaci_number' ];

echo "<p>The answer to the sum of all the even Fibonacci numbers between zero and $ending_fibonacci_number is: </p>";

$fibonacci_sum = new fibonacci();
$fibonacci_sum->print_fibonacci_sum( $ending_fibonacci_number );

echo "<p> Here is the fibonacci numbers from zero to $ending_fibonacci_number: </p>";
$fibonacci_sequence = new fibonacci();
$fibonacci_sequence->print_fibonacci_sequence( $ending_fibonacci_number );

?>
</body>
</html>
