<?php

    require_once( '../includes/Math.class.php');
    class MultiplyTest extends PHPUnit_Framework_TestCase
    {
        protected $objMath;

        public function __construct( ) {
            $this->objMath = new Math( );
        }
        
        public function setUp(){ 
            $this->objMath->setFirstOperator('*');
            $this->objMath->setSecondOperator('=');
        }

        public function tearDown(){ }

        public function testMultiply()
        {
            $this->objMath->setFirstOperand('10');
            $this->objMath->setSecondOperand('9');

            $answer = $this->objMath->calculate();

            assertEqual($answer, 90);

        }
    }

?>
