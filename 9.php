<?php
$array = array(1, 2, 3, 4, 5);
$elementToRemove = 3; // Specify the element you want to remove

// Remove the element
foreach (array_keys($array, $elementToRemove, true) as $key) {
    unset($array[$key]);
}

// Re-index the array
$array = array_values($array);

// Output the modified array
print_r($array);
?>