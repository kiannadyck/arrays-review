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

    echo "<h4>Part 1</h4>";

    // print animals array, sorted, with elements on a single line
    sortAndPrint($animals);

    // Attempt to add a couple animals to the $animals array
    addAnimal("elephant");
    sortAndPrint($animals);

    addAnimal("Boa");
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

        echo "<p>Adding {$creature}...";
        // loop through each element in array and check if parameter matches
        foreach($animals as $animal) {

            // if creature already exists...
            if (strtoupper($animal) === strtoupper($creature)) {
                echo " $creature already exists in the array...</p>";
                return; //exit function
            }
        }

        // if parameter does not match any contained in the array, add its value to the array
        echo "</p>";
        array_push($animals, $creature);

    }

    /* Part 2 */
    // Define an associative array containing key-value pairs for various cupcake flavors
    $flavors = array('grasshopper' => 'The Grasshopper',
                     'maple' => 'Whiskey Maple Bacon',
                     'carrot' => 'Carrot Walnut',
                     'caramel' => 'Salted Caramel Cupcake',
                     'velvet' => 'Red Velvet',
                     'lemon' => 'Lemon Drop',
                     'tiramisu' => 'Tiramisu');

    echo "<h4>Part 2</h4>";

    // Print cupcake flavors as a set of checkboxes, using the key for each item as the value of the checkbox
    foreach($flavors as $key => $value) {
        echo "<input type='checkbox' name='flavors[]' value='$key'> $value<br>";
    }