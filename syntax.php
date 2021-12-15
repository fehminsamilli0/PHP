<!DOCTYPE html>
<html>
<body>

<?php

/*
 *Funksiyalar
 function myTest() {
    static $x = 5; // local scope
    echo $x;
    $x++;
}
myTest();
echo "<br>";
myTest();
echo "<br>";

myTest();
*/

class Name{
    public $a;
    public $b;
    public function __construct($a,$b){
        $this->a=$a;
        $this->b=$b;
    }
    public function myText(){
        return "My name is ".$this->a." ".$this->b."!";
    }
}

$myName = new Name("Fahmin","Shamilli");
    echo $myName->myText();


?>

</body>
</html>