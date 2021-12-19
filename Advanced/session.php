<!doctype html>
<?=
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php

$_SESSION['color'] = "Green";
$_SESSION['dog'] = "Pitbull";

print_r($_SESSION['dog']);
?>
<br>
<br>
<?php
$_SESSION['dog'] = "Haskey";
print_r($_SESSION['dog']);
?>
<br>
<br>
<?php
// remove all session variables
session_unset();

// destroy the session
session_destroy();

    $isSession = (@$_SESSION['dog']) ? print_r($_SESSION['dog']) : print_r( "Sessiya Yoxdur");


?>


</body>
</html>
