<!-- Find the reverse of a given number using while loop
 -->


 <?php
    $n = 205;
    $reverse = 0;
    while($n>0)
        {
            $r  = $n%10;
            $reverse = $reverse*10 + $r;
            $n = intdiv($n, 10);
        
        }

        echo "Reverse number is $reverse";

 ?>