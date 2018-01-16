<?php
    /*
     * Kianna Dyck
     * 01/14/2018
     * array-review.php
     * This script contains a series of exercises designed
     * to review php arrays and functions.
     */

    /* Part 1 */
    // Define an array called $animals, which contains panda, alpaca, and boa
    $animals = array('panda', 'alpaca', 'boa');

    // testing functions
    echo "<h4>Part 1</h4>";

    echo "<p>";
    foreach($animals as $animal) {
        echo $animal." ";
    }
    echo "</p>";

    sortAndPrint($animals);

    echo "<p><em>Attempting to add 'Boa' to array...</em></p>";
    addAnimal("Boa");
    sortAndPrint($animals);

    echo "<p><em>Attempting to add 'elephant' to array...</em></p>";
    addAnimal("elephant");
    sortAndPrint($animals);

    // write a function that sorts and prints the array, with each element side by side
    function sortAndPrint ($array) {
        sort($array);

        echo "<p>";
        foreach($array as $element) {
            echo $element." ";
        }
        echo "</p>";
    }

    // write a function that takes a string parameter and adds it to your array,
    // unless the value is already in the array. This function should be case-insensitive!
    function addAnimal ($creature) {
        // get reference to global variable, $animals
        global $animals;

        // loop through each element in array and check if parameter matches
        foreach($animals as $animal) {

            // if creature already exists...
            if (strtoupper($animal) === strtoupper($creature)) {
                echo "<p>$creature already exists in the array.</p>";
                return; //exit function
            }
        }

        // if parameter does not match any contained in the array, add its value to the array
        echo "<p>Adding {$creature}...</p>";
        array_push($animals, $creature);

    }

    /* Part 2 */
    // Define an associative array containing key-value pairs for various cupcake flavors
    $flavors = array('grasshopper' => 'The Grasshopper',
                     'maple' => 'Whiskey Maple Bacon',
                     'carrot' => 'Carrot Walnut',
                     'velvet' => 'Red Velvet',
                     'lemon' => 'Lemon Drop',
                     'tiramisu' => 'Tiramisu');

    // testing associative array
    echo "<h4>Part 2</h4>";

    print_r($flavors);