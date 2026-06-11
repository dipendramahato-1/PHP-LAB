<!-- Write a php script that compares three test scores and ranks them in order(highest to lowest).
Use the spaceship operator(<=>), ternary operator and logical operator to create a ranking system. 
Test with scores 85,92 and 78 -->


<?php
$score1 = 85;
$score2 = 92;
$score3 = 78;

// Find the highest
$highest = ($score1 <=> $score2) >= 0 && ($score1 <=> $score3) >= 0 
    ? $score1 
    : (($score2 <=> $score1) >= 0 && ($score2 <=> $score3) >= 0 
        ? $score2 
        : $score3);

// Find the lowest
$lowest = ($score1 <=> $score2) <= 0 && ($score1 <=> $score3) <= 0 
    ? $score1 
    : (($score2 <=> $score1) <= 0 && ($score2 <=> $score3) <= 0 
        ? $score2 
        : $score3);

// Middle is the one that is not highest AND not lowest
$middle = ($score1 != $highest && $score1 != $lowest) ? $score1 
        : (($score2 != $highest && $score2 != $lowest) ? $score2 : $score3);

// Output
echo "1st place: $highest<br>";
echo "2nd place: $middle<br>";
echo "3rd place: $lowest";
?>
