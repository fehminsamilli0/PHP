<?php

$str = "<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magnam repellendus vitae voluptas voluptates?</p>";

$fstr=filter_var($str,FILTER_SANITIZE_STRING);

echo $fstr."<br><br>";

$int = 100;

$check =  (!filter_var($int,FILTER_VALIDATE_INT)===false || filter_var($int,FILTER_VALIDATE_INT)===0)
    ? print_r( $int." is integer")
    : print_r( $int." is not integer");
?>

<br>
<br>

<?php
/* variable to check */
$int = 122;

/* min value */
$min = 1;
/* max value */
$max = 200;

$filter = (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false)
    ? print_r("Variable value is not within the legal range")
    : print_r("Variable value is within the legal range");
