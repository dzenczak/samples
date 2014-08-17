<?php
class fibonacci
{
	public $first_integer  = 0;
	public $second_integer = 1;
	public $third_integer  = 0;

	function process_fibonacci_even_sum ( $fibonacci_sequence ) {
		$fibonacci_sum = 0;
		foreach( $fibonacci_sequence as $value ) {
			if ( $value % 2 == 0 ) {
				$fibonacci_sum = $fibonacci_sum + $value;
			}
		}
		return $fibonacci_sum;
	}

	function print_fibonacci_sum( $top_number ) {
		$fibonacci_sum = $this->process_fibonacci_even_sum( $this->fibonacci_sequence( $top_number ) );
		echo "<h2 align='center'> $fibonacci_sum </h2>";
	}

	function fibonacci_sequence( $top_number )  {
		$first  = $this->first_integer;
		$second = $this->second_integer;
		$third  = $this->third_integer;

		$fibonacci_sequence = array( $first, $second );

		while( ( $first + $second ) < $top_number ) {
			$third = $first + $second;
			array_push( $fibonacci_sequence, $third );
			$first = $second;
			$second = $third;
		}
		return $fibonacci_sequence;
	}

	function print_fibonacci_sequence( $top_number ) {
		$fibonacci_sequence = $this->fibonacci_sequence( $top_number );
		foreach( $fibonacci_sequence as $value ) {
			echo " " . $value . " ";
		}
	}
}
?>
