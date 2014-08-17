<?php
class FizzBuzz 
{
	public function create_FizzBuzz(){
		$fizzbuzz[];
		for( $i = 1; $i <= 100; $i++ ) {
			if ( $i % 3 == 0 && $i % 5 == 0 ) {
				array_push( $fizzbuzz, 'fizzBuzz <br>' );
			} elseif ( $i % 3 == 0) {
				array_push( $fizzbuzz, 'fizz <br>' );
			} elseif ( $i % 5 == 0 ) { 
				array_push( $fizzbuzz, 'Buzz <br>' );
			} else {
				array_push( $i . '<br>' );
			}
		}
		return $fizzbuzz;
	}

	public function print_FizzBuzz( $fizzbuzz ){
		foreach( $fizzbuzz as $value ){
			echo $value;
		}
	}
}
?>
