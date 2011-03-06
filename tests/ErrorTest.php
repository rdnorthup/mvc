<?php

    require_once( 'includes/Math.class.php');
    class ErrorTest extends PHPUnit_Framework_TestCase
    {
        protected $objMath;

        public function __construct( ) {
            $this->objMath = new Math( );
        }

        public function setUp(){
            $this->objMath->setFirstOperator('^');
            $this->objMath->setSecondOperator('@');
        }

        public function tearDown(){ }

        public function testError()
        {

            $this->objMath->setFirstOperand('5');
            $this->objMath->setSecondOperand('2');

            $answer = $this->objMath->calculate();

            $this->assertEquals($answer, 'Error');
        }
    }

?>