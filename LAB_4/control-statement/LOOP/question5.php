
<!-- WAP to build the multiplication table of a number. if number is 5 then output be 5 * 1 = 5. 
 Print it in table html form .  -->


<?php
    $number = 5;

?>



 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table of 5</title>
</head>
<body>
    <table border='1' cellpadding='10' cellspacing='0'>
        <?php
            for($i=1;$i<=10;$i++) { ?>
                <tr>
                    <td> <?php  echo $number; ?> </td>
                    <td> <?php  echo "*"; ?> </td>
                    <td> <?php  echo $i; ?> </td>
                    <td>=</td>
                    
                    <td> <?php  echo $number * $i; ?> </td>
                    

                </tr>
           <?php } ?>


    </table>
</body>
</html>




