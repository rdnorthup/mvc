<?php

/**
 *@package Math
 *@author  Ronnie Northrup ronnie@portlandwebworks.com
 *@copyright 2011
 */

class Math {
    private $firstOperator;
    private $secondOperator;
    private $firstOperand;
    private $secondOperand;

    public function calculate( ) {
        if( ! $this->validate() ) { 
            return 'Error';
        } 
        switch( $this->getFirstOperator() ) {
            case '+':
                return $this->add( );
                break;
            case '-':
                return $this->subtract( );
                break;
            case '*': 
                return $this->multiply( );
                break;
            case '/':
                if( empty($this->secondOperand) )
                    return 'Divide By Zero Error';
                return $this->divide( );
                break;
            case '%':
                return $this->modulus( );
                break;
            default:
                return 'Error';
                break;
        }
        
    }
    
    protected function add( ) {
        return ($this->getFirstOperand() + $this->getSecondOperand() );
    }

    protected function subtract( ) {
        return ($this->getFirstOperand() / $this->getSecondOperand() );
    }

    protected function multiply( ) {
        return ($this->getFirstOperand() * $this->getSecondOperand() );
    }

    protected function divide( ) {
        return ($this->getFirstOperand() / $this->getSecondOperand() );
    }

    protected function modulus( ) {
        return ($this->getFirstOperand() % $this->getSecondOperand() );
    }

    public function clear( ) {
        $this->setFirstOperand(null);
        $this->setSecondOperand(null);
        $this->setFirstOperator(null);
        $this->setFirstOperator(null);
    }

    public function validate( ) {
        $retVal = true;
        if( ! isset($this->firstOperand) ) {
            $retVal = false;
        }

        if( ! isset($this->secondOperand) ) {
            $retVal = false;
        }

        return $retVal;
    }

    /* getters and setters */
    public function getFirstOperator( ) {
        return $this->firstOperator;
    }

    public function getSecondOperator( ) {
        return $this->secondOperator;
    }

    public function getFirstOperand( ) {
        return $this->firstOperand;
    }

    public function getSecondOperand( ) {
        return $this->secondOperand;
    }

    public function setFirstOperator( $operator ) {
        $this->firstOperator = $operator;
    }

    public function setSecondOperator( $operator ) {
        $this->secondOperator = $operator;
    }

    public function setFirstOperand( $operand ) {
        $this->firstOperand = $operand;
    }

    public function setSecondOperand( $operand ) {
        $this->secondOperand = $operand;
    }
}


?>