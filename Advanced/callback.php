<?php

function nida($srt){
    return $srt." ! <br>";
}

function sual($str){
    return $str." ? <br>";
}

function printFormatted($str,$format){
    echo $format($str);
}



printFormatted("HEllo World","nida");
printFormatted("HEllo World","sual");


function callback($item){
    return strlen($item);
}
$arr  = ["Asif","Hikmet","Ehtibar"];

$lengths = array_map("callback", $arr);
print_r($lengths);






