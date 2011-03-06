String.prototype.trim = function() {
    a = this.replace(/^\s+/, '');
    return a.replace(/\s+$/, '');
};

window.onload= function( ) {
    document.getElementById('tally').onclick = function( )  {
        document.getElementById('firstOperator').value = '';
        document.getElementById('secondOperator').value = '';
        document.getElementById('leftOperand').value = '';
        document.getElementById('rightOperand').value = '';
        if( document.getElementById('tally').value == '69' ) {
            document.getElementById('masterContainer').style.backgroundImage = "url(http://localhost/mvc/images/ChuckNorrisKangaroo.jpg)";
            document.getElementById('calculatorWrapper').style.display = "none";
        }
        
        document.getElementById('tally').value = '';

    }

    var nB = document.getElementById('masterContainer').getElementsByClassName('numberButton');
    for (var g in nB) {
        nB[g].onclick = function( ) {
            var h = this.innerHTML.trim();
            var tally = document.getElementById('tally');
            var firstOperator = document.getElementById('firstOperator');
            var leftOperand = document.getElementById('leftOperand');

            if( firstOperator.value != '' && leftOperand.value != '' && leftOperand.value == tally.value ) {
                tally.value = h;
            } else {
                tally.value = document.getElementById('tally').value.trim() + h;
            }
            var l = document.getElementById('masterContainer').getElementsByClassName('buttonPressed');
            for( var press in l ) {
                l[press].className = 'operatorButton';
            }
        }
    }

    var oB = document.getElementById('masterContainer').getElementsByClassName('operatorButton');
    for (var g in oB) {
        oB[g].onclick = function( ) {
            var op = this.innerHTML;
            var firstOperator = document.getElementById('firstOperator');
            var secondOperator = document.getElementById('secondOperator');
            var leftOperand = document.getElementById('leftOperand');
            var rightOperand = document.getElementById('rightOperand');
            var tally = document.getElementById('tally');

            if( firstOperator.value != '') {
                secondOperator.value = op.trim();
                rightOperand.value = tally.value.trim();
                document.forms["calcform"].submit();
            } else {
                leftOperand.value = tally.value.trim();
                rightOperand.value = '';
                this.className = "buttonPressed";
                firstOperator.value = op.trim();
            }
        }
    }
}