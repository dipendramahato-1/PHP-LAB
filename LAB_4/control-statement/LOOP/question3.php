
<!-- WAP to print the following patterns:
1
1 2
1 2 3
1 2 3 4 -->




<?php
for ($i = 1; $i <= 4; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}
?>

echo "<br>";
echo "<br>";


<!-- 5
5 4
5 4 3
5 4 3 2
5 4 3 2 1 -->



<?php
for ($i = 5; $i >= 1; $i--) {
    for ($j = 5; $j >= $i; $j--) {
        echo $j . " ";
    }
    echo "<br>";
}
?>
