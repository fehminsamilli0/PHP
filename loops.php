<?php

for ($x = 0; $x <= 151; $x += 10) {
    echo "Number" . $x . "<br>";
}


$colors = array("red" , "green" , "blue" , "yellow");

foreach ($colors as $value) {
    echo "$value <br>";


}

$age = array("Fahmin" => "22" , "Hamid" => "23" , "Eynur" => "24");

foreach ($age as $a => $val) {
    echo "$a = $val <br>";
}

for ($x = 0; $x < 10; $x++) {
    if ($x == 4) break;
    echo "The number is: $x <br>";
}