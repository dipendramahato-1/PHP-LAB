<!-- Write a php program to demonstrate passing argument to a function -->



<?php

function addNumbers($a, $b) {
    $sum = $a + $b;
    echo "Sum = " . $sum;
}

addNumbers(10, 20);

?>