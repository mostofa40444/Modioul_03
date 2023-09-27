<?php
//Task 3: Break on Condition
$fibonacci = array();
$fibonacci[0] = 0;
$fibonacci[1] = 1;

// Print the first two Fibonacci numbers
echo $fibonacci[0] . ' ' . $fibonacci[1] . ' ';

// Calculate and print the next 8 Fibonacci numbers
for ($i = 2; $i < 10; $i++) {
    $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    
    // Check if the Fibonacci number exceeds 100
    if ($fibonacci[$i] > 100) {
        break; // Break out of the loop if it exceeds 100
    }
    
    echo $fibonacci[$i] . ' ';
}

echo "\n";