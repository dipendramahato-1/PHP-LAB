<!-- Write a php program to demonstrate the use of continue statement -->

<?php
for ($i = 1; $i <= 5; $i++) {
    if ($i == 3) {
        continue;
    }
    echo "Number: $i <br>";
}
?>