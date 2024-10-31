<?php
function isSubset($array1, $array2) {
    foreach ($array1 as $item) {
        if (!in_array($item, $array2)) {
            return false;
        }
    }
    return true;
}

$mainArray = array('red', 'green', 'blue', 'yellow');
$subsetArray = array('green', 'blue');

if (isSubset($subsetArray, $mainArray)) {
    echo "Yes, the array is a subset.";
} else {
    echo "No, the array is not a subset.";
}
?>