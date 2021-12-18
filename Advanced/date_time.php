<?php
// Bolge uzre vaxt
date_default_timezone_set("Asia/Baku");
echo "The time is " . date("H:i:sa"."<br>");

// Zamani duzenleyir

$d=strtotime("tomorrow");
echo date("Y-m-d h:i:sa", $d) . "<br>";

$d=strtotime("next Sunday");
echo date("Y-m-d h:i:sa", $d) . "<br>";



$d=strtotime("+3 Months");
echo date("Y-m-d h:i:sa", $d) . "<br>";
$startdate=strtotime("Saturday");
$enddate=strtotime("+6 weeks", $startdate);

while ($startdate < $enddate) {
    echo date("M d", $startdate) . "<br>";
    $startdate = strtotime("+1 week", $startdate);
}

?>