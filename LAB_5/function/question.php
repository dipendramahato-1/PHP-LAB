Write a php program to demonstrate returning a value from a function

<?php

function multiply($x, $y) {
    return $x * $y;
}

$result = multiply(5, 4);
echo "Result = " . $result;

?>