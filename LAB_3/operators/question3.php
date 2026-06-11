<!-- Write a php script to validate a student's eligibility for a scholarship. The student must have: GPA >=3.5
and attendance > 90% or be free from a low-income background(income<$30000). Use logical operator(&&,||) to
eligibility status. -->

<?php
    $name1 = "Dipendra";
    $gpa1 = 3.7;
    $attendance1 = 95;
    $income1 = 40000;

    $status1 = (($gpa1>=3.5 && $attendance1>90) || $income1<30000)?"Eligible":"Not Eligible";
    echo "$name1 is $status1.<br>";

    $name2 = "Tarun";
    $gpa2 = 3.2;
    $attendance2 = 85;
    $income2 = 25000;

    $status2 = (($gpa2>=3.5 && $attendance2>90) || $income2<30000)?"Eligible":"Not Eligible";
    echo "$name2 is $status2.<br>";

    
    $name3 = "Mahesh";
    $gpa3 = 3.4;
    $attendance3 = 95;
    $income3 = 45000;

    $status3 = (($gpa3>=3.5 && $attendance3>90) || $income3<30000)?"Eligible":"Not Eligible";
    echo "$name3 is $status3.<br>";




?>