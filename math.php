<?php
$x = 5;
$y = 3;
$a = 16;

echo $x % $y."<br>"; // output 2

echo $x ** $y."<br>"; // output 125
$x+=100;
echo  $x."<br>"; // output 105

$y%=2;
echo $y."<br>"; // output 1

$a*=5;
echo $a."<br>"; // output 80

$user = "John Doe";
// if empty($user) = FALSE, set $status = "logged in"
echo $status = (empty($user)) ? "anonymous" : "logged in";

// variable $color is "red" if $color does not exist or is null
$color = "green";
echo $color = $color ?? "red";

?>



