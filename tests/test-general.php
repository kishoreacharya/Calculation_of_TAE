<?php


require 'MotorK/Tae.php';

use MotorK\{ Rate, Tae, Taeg };

class TestTaeg extends \PHPUnit\Framework\TestCase {
	
	
	public function test_tae() {
		$obj = Tae::init( 5, 12 );

		$this->assertEquals( 5.116, round( $obj->calculate(), 3 ) );

		$this->expectOutputString( '5.116 %' );
		echo $obj;
	}

	
}
