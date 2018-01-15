<?php
    /*
     * Kianna Dyck
     * 01/14/2018
     * array-review.php
     * This script contains a series of exercises designed
     * to review php arrays and functions.
    */

    // Define an array called $animals, which contains panda, alpaca, and boa
    $animals = array('panda', 'alpaca', 'boa');

    // write a function that sorts and prints the array
    function sortAndPrint ($array) {
        echo sort($array);
    }

    // write a function that takes a string parameter and adds it to your array,
    // unless the value is already in the array. This function should be case-insensitive!
    function addAnimal ($creature) {
        // get reference to global variable, $animals
        global $animals;

        // loop through each element in array and check if parameter matches
        foreach($animals as $animal) {
            // if parameter does not match any contained in the array, add its value to the array
            if (strtoupper($animal) != strtoupper($creature)) {
                echo "Adding {$creature}...";
                array_push($animals, $creature);
                return; //exit function
            }
        }
        // if creature already exists...
        echo "This animal already exists in the array.";

    }