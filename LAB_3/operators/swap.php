

<!-- Swap the two variable -->
 <?php
    $a=10;
    $b=20;
    
    // $x = $a;
    // $a = $b;
    // $b = $x;

    $a = $a+$b;
    $b=$a-$b;
    $a=$a-$b;

    echo "After Swapping";
    echo '<br>a = '.$a.' b= '.$b;
    echo "<br> a = $a, b = $b ";
 
?>