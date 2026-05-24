<?php
$days = array("Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"); 
echo "The days of the week in English are:<br>";
for ($i = 0; $i<= 6; $i++){
    if($i != 6){
        echo "$days[$i], ";
    }
    else{
        echo "$days[$i]. ";
    }
    
}
echo "<br><br>";

$days = array("Dimanche", "Lundi", "Mardi", "Mercredi", "Jeudi", "Vendredi", "Samedi"); 
echo "The days of the week in French are:<br>";

for ($i = 0; $i<= 6; $i++){
    if($i != 6){
        echo "$days[$i], ";
    }
    else{
        echo "$days[$i]. ";
    }
    
}
?>
