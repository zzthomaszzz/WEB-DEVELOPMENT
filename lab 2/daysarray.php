<?php
$days[] = "Sunday";
$days[] = "Monday";
$days[] = "Tuesday";
$days[] = "Wednesday";
$days[] = "Thursday";
$days[] = "Friday";
$days[] = "Saturday";

echo "The days of the week in English are:<br>";
echo implode(", ", $days) . "<br><br>";

$days[0] = "Dimanche";
$days[1] = "Lundi";
$days[2] = "Mardi";
$days[3] = "Mercredi";
$days[4] = "Jeudi";
$days[5] = "Vendredi";
$days[6] = "Samedi";

echo "The days of the week in French are:<br>";
echo implode(", ", $days) . "<br>";
?>
