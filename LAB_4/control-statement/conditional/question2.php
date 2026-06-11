<!-- An employee receives 20% bonus. If experience is more than 5 years and performance rate is 8 or 
above. 10% bonus if expereience is more than 2 years and performance rating is 6 or above; 
otherwise no bonus. If the employee has been absent for more than 10 days then reduce the bonus 50%.
 Write a php porgram to calculate the final bonus percentage. -->



 <?php
    $salary = 50000;
    $experience = 6;   
    $performance = 9;  
    $absentDays = 12;  

    $bonus = 0;

    if ($experience > 5 && $performance >= 8) {
        $bonus = 20;
    }

    else if ($experience > 2 && $performance >= 6) {
        $bonus = 10;
    }


    if ($absentDays > 10) {
        $bonus = $bonus / 2;
    }

    $bonusAmount = $salary * ($bonus/100);

    echo "Final Bonus Percentage: " . $bonus . "%";
    echo "<br>";
    echo "Final Bonus Amount is Rs. $bonusAmount";
?>
