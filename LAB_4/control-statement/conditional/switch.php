<!-- Write a program to illustrate switch statement -->

<?php
    $num_one = 10;
    $num_two = 5;
    $operator = "-";
    switch($operator){
        case "+":
            $add = $num_one + $num_two;
            echo "Sum is $add";
        break;

        case "-":
            $subtract = $num_one - $num_two;
            echo "Subtraction is $subtract";
        break;

        case "*":
            $multiply = $num_one * $num_two;
            echo "Product is $multiply";
        break;

        case "+":
            $divide = $num_one / $num_two;
            echo "Quotient is $divide";
        break;

        default: echo "This is invalid operator";
        
    }
?>