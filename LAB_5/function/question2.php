<!-- Write a PHP program to implement a simple calculator using a function that takes two operands
and an operator as input, and uses a switch statement to perform addition, subtraction, multiplication or divison.
The function should return the result. -->

<?php

    function value($operand1, $operand2, $operator){
        $result = null;
        switch($operator){
            case "+":
                $result = $operand1 + $operand2;
            break;
            case "-":
                 $result = $operand1 - $operand2;
            break;
            case "*":
                $result = $operand1 * $operand2;
            break;
            case "/":
                $result = $operand1 / $operand2;
            break;

            default: return "Invalid operator";
        }
        return $result;
    }

    $result = value(1,2,"+"); 
    echo $result;
?>