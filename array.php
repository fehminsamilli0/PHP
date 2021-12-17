<?php

//Array-ı loopa salıb görüntüyə çıxarırıq
$name=array('Ahmet','Fatih','Bilal','Ali');
$say= count($name);

for($x=0;$x<$say;$x++){
    echo "$name[$x] <br>";
}

// Array elmentlərini dəyərləri ilə birlikdə ekrana çıxardırıq
$age = array("Ahmet"=>"25","Fatih"=>"54","Bilal"=>"42");

foreach ($age as $x=>$value) {
    echo "My name is ".$x." I am ".$value." years old. <br>";
}

$cars= array(
    array("BMW",10,"Sedan"),
    array("Togg",23,"Jep"),
    array("Toyota",14,"SUV"),
    array("Benz",43,"Sedan")
);

for($row=0;$row<4;$row++){
    echo "<p><b>Row Number</b></p>".$row;
    echo "<ul>";
    for ($col=0;$col<3;$col++){
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
// Sorting
$name=array('Ahmet','Fatih','Bilal','Ali');
rsort($name);

$say= count($name);
for($x=0;$x<$say;$x++){
    echo "$name[$x] <br>";
}



