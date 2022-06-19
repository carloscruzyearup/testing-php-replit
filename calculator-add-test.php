<?php
//calculator-add-test.php
require_once 'simpletest/autorun.php';
include 'Calculator.php';

class TestOfCalculator extends UnitTestCase {
	function testAdd() {
	  $myCalc = new Calculator();
	  $this->assertEqual($myCalc->add(4.2,2.1), 6.3, "4.2 + 2.1");
	  $this->assertEqual($myCalc->add(4,2), 6, "4 + 2");
	}
	
}