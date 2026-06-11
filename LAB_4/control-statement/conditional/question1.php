<!-- WAP to do the following operator.
- If a number is divisible by 3, print FIZZ
- IF a number is divisible by 5, print BUZZ
- If a number is divisible by both 3 and 5 , then print FIZZ-BUZZ; -->


<?php

    $number = 15;
    if($number%3===0 && $number%5===0){
        echo "FIZZ-BUZZ";
    }
    else if($number%5===0){
        echo "BUZZ";
    }
    else if($number%3===0){
        echo "FIZZ";
    }

?>

