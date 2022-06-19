<?php
//calculator-divide-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testDivide() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->divide(2,3), 0.67, "2 / 3");
	  $this->assertEqual($myCalc->divide(4,2), 2, "4 / 2");
	}
	
}