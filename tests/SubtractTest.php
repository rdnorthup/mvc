<?php

    require_once( 'includes/Math.class.php');
    
    class SubtractTest extends PHPUnit_Framework_TestCase
    {
        protected $objMath;

        public function __construct( ) {
            $this->objMath = new Math( );
        }
        
        public function setUp(){ 
            $this->objMath->setFirstOperator('-');
            $this->objMath->setSecondOperator('=');
        }

        public function tearDown(){ }

        public function testSubtract()
        {
            $this->objMath->setFirstOperand('10');
            $this->objMath->setSecondOperand('5');

            $answer = $this->objMath->calculate();

            $this->assertEquals($answer, 5);

        }
    }

?>