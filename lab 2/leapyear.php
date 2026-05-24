<?php
function is_leapyear($year) {
    if ($year % 4 == 0) {
        if ($year % 100 != 0) {
            return true;
        } 
        elseif ($year % 400 == 0) {
            return true;
        }
    }
    return false;
}

$year = isset($_GET['year']) ? $_GET['year'] : null;

if ($year === null) {
    echo "No year provided. <a href='leapyearform.html'>Go back</a>";
} 
elseif (!is_numeric($year)) {
    echo "Error: Please enter a valid year. <a href='leapyearform.html'>Go back</a>";
} 
else {
    $year = (int)$year;
    if (is_leapyear($year)) {
        echo "The year you entered $year is a leap year.";
    } 
    else {
        echo "The year you entered $year is a standard year.";
    }
}
?>
