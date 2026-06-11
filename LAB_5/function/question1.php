<!-- Write a php program to create a function that accepts a user'name, age and city as parameters and displays the profile information. -->

<?php

    function createProfile($name, $age, $city){
        echo "Name: $name <br>";
        echo "Age: $age <br>";
        echo "City: $city";
    }

    createProfile("Dipendra", 22, "Barahathawa");

?>