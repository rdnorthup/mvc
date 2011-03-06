<?php

    require_once( '../includes/Math.class.php');

    class EmptyTest extends PHPUnit_Framework_TestCase
    {
        protected $objMath;

        public function __construct( ) {
            $this->objMath = new Math( );
        }
        public function setUp(){ 
            $this->objMath->setSecondOperator('=');
        }

        public function tearDown(){ }

        public function testState()
        {
            assertNull($this->objMath->getFirstOperand());
            assertNull($this->objMath->getSecondOperand());
            assertNull($this->objMath->getFirstOperator());
            assertNull($this->objMath->getSecondOperator());

            assertFalse( $this->objMath->validate() );
            
            $this->objMath->setFirstOperand('5');
            $this->objMath->setFirstOperator('+');
            $this->objMath->setSecondOperand('2');

            assertNotNull($this->objMath->getFirstOperand());
            assertNotNull($this->objMath->getSecondOperand());
            assertNotNull($this->objMath->getFirstOperator());
            assertNotNull($this->objMath->getSecondOperator());

            assertTrue( $this->objMath->validate() );

            $this->objMath->clear( );

            assertNull($this->objMath->getFirstOperand());
            assertNull($this->objMath->getSecondOperand());
            assertNull($this->objMath->getFirstOperator());
            assertNull($this->objMath->getSecondOperator());
            
        }


    }

?>