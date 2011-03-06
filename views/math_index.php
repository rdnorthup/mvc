<html>
    <head>
        <script type="text/javascript" src="/mvc/resources/javascripts.js"></script>
        <link type="text/css" rel="stylesheet" href="/mvc/resources/styles.css" media="all" />
    </head>
    <body>

        <div class="calculatorContainer" id="masterContainer">
            <div class="calculatorWrapper" id="calculatorWrapper">
                <div class="title"><em><?php echo $math_heading; ?></em></div>
                <form action="/mvc/math/calculate/" id="calcform" name="calcform" method="post">
                    <div class="calcRow">
                        <input type="text" value="<?php  echo $leftOperand; ?>" class="tally" id="tally" name="tally" readonly="true" />
                    </div>
                    <div class="calcRow">
                        <div class="numberButton">1</div>
                        <div class="numberButton">2</div>
                        <div class="numberButton">3</div>
                        <div class="operatorButton">/</div>
                    </div>
                    <div class="calcRow">
                        <div class="numberButton">4</div>
                        <div class="numberButton">5</div>
                        <div class="numberButton">6</div>
                        <div class="operatorButton">*</div>
                    </div>
                    <div class="calcRow">
                        <div class="numberButton">7</div>
                        <div class="numberButton">8</div>
                        <div class="numberButton">9</div>
                        <div class="operatorButton">%</div>
                    </div>
                    <div class="calcRow">
                        <div class="operatorButton">+</div>
                        <div class="numberButton">0</div>
                        <div class="operatorButton">-</div>
                        <div class="operatorButton">=</div>
                    </div>
                    <input type="hidden" id="firstOperator" name="firstOperator" value="<?php echo $firstOperator; ?>" />
                    <input type="hidden" id="secondOperator" name="secondOperator" value="<?php echo ''; ?>" />
                    <input type="hidden" id="leftOperand" name="leftOperand" value="<?php echo $leftOperand; ?>" />
                    <input type="hidden" id="rightOperand" name="rightOperand" value="<?php echo ''; ?>" />
                    <input type="hidden" id="hasSubmit" name="hasSubmit" value="1" />
                </form>
            </div>
        </div>

    </body>

</html>
