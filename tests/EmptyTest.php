<?php

    require_once( 'includes/Math.class.php');

    class EmptyTest extends PHPUnit_Framework_TestCase
    {
        protected $objMath;

        public function __construct( ) {
            $this->objMath = new Math( );
        }
        public function setUp(){ 
            //$this->objMath->setSecondOperator('=');
        }

        public function tearDown(){ }

        public function testState()
        {
            $this->assertNull($this->objMath->getFirstOperand());
            $this->assertNull($this->objMath->getSecondOperand());
            $this->assertNull($this->objMath->getFirstOperator());
            $this->assertNull($this->objMath->getSecondOperator());

            $this->assertFalse( $this->objMath->validate() );
            
            $this->objMath->setFirstOperand('5');
            $this->objMath->setFirstOperator('+');
            $this->objMath->setSecondOperand('2');

            $this->assertNotNull($this->objMath->getFirstOperand());
            $this->assertNotNull($this->objMath->getSecondOperand());
            $this->assertNotNull($this->objMath->getFirstOperator());
            //$this->assertNotNull($this->objMath->getSecondOperator());

            $this->assertTrue( $this->objMath->validate() );

            $this->objMath->clear( );

            $this->assertNull($this->objMath->getFirstOperand());
            $this->assertNull($this->objMath->getSecondOperand());
            $this->assertNull($this->objMath->getFirstOperator());
            $this->assertNull($this->objMath->getSecondOperator());

        }


    }

?>