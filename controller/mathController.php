<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of mathController
 *
 * @author mreid
 */
class mathController extends baseController {

    public function index()
    {
        $this->initializeCalculator( );
        
        $this->registry->template->show('math_index');
    }


    public function view(){

        $this->registry->template->math_heading = 'This is the math heading';
        $this->registry->template->math_content = 'This is the math content';
        $this->registry->template->math_total = '';
        $this->registry->template->show('math_view');
    }

    private function initializeCalculator( ) {
        $this->registry->template->leftOperand = '';
        $this->registry->template->firstOperator = '';

        $this->registry->template->math_heading = 'The Hudson Calculator';
    }
    
    public function calculate( ) {
        $this->initializeCalculator( );
        if( ! empty($_POST['hasSubmit']) ) {
            $leftOperand = (isset($_POST['leftOperand']) ? (int)$_POST['leftOperand'] : null );
            $rightOperand = (isset($_POST['rightOperand']) ? (int)$_POST['rightOperand'] : null );
            $firstOperator = (isset($_POST['firstOperator']) ? $_POST['firstOperator'] : null );
            $secondOperator = (isset($_POST['secondOperator']) ? $_POST['secondOperator'] : null );
            
            if( $secondOperator != '=' ) {
                $this->registry->template->firstOperator = $secondOperator;
            }
            
            $calculator = new Math( );
            $calculator->setFirstOperand($leftOperand); 
            $calculator->setSecondOperand($rightOperand);
            $calculator->setFirstOperator($firstOperator);
            $calculator->setSecondOperator($secondOperator);
            
            $this->registry->template->leftOperand = $calculator->calculate();
        }

        $this->registry->template->show('math_index');

    }

}
?>
