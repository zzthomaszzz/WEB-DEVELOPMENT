<?php
$value = isset($_GET['number']) ? $_GET['number'] : 0;

$message = (!is_numeric($value) || (int)$value != $value)
    ? "$value is not an integer."
    : (((int)$value % 2 == 0)
        ? "$value is an integer and it is even."
        : "$value is an integer and it is odd.");

echo $message . "<br><br>";
?>
