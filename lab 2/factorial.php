<?php
include("mathfunctions.php");

$input = isset($_GET['number']) ? $_GET['number'] : null;

if ($input === null) {
    echo "No input provided. <a href='factorialform.html'>Go back</a>";
} elseif (!is_numeric($input) || (int)$input != $input || (int)$input < 0) {
    echo "Error: Please enter a positive integer. <a href='factorialform.html'>Go back</a>";
} else {
    $n = (int)$input;
    $result = factorial($n);
    echo "The factorial of $n is: $result<br><br>";
}
?>
