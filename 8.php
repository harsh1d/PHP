<?php
$number1 = 10;
$number2 = 5;
$operation = '+'; // The operation to perform: +, -, *, or /

switch ($operation) {
    case '+':
        $result = $number1 + $number2;
        break;
    
    case '-':
        $result = $number1 - $number2;
        break;
    
    case '*':
        $result = $number1 * $number2;
        break;
    
    case '/':
        if ($number2 != 0) {
            $result = $number1 / $number2;
        } else {
            $result = "Error: Division by zero";
        }
        break;
    
    default:
        $result = "Error: Invalid operation";
        break;
}

echo "Result: " . $result;
?>