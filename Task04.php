<?php
//Task 4: Fibonacci Series printing using a Function
function printFibonacci($n) {
    $fibonacci = array();
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    if ($n >= 1) {
        echo $fibonacci[0] . ' ';
    }
    if ($n >= 2) {
        echo $fibonacci[1] . ' ';
    }

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        echo $fibonacci[$i] . ' ';
    }
}

// Call the function to print the first 15 Fibonacci numbers
printFibonacci(15);

?>