<?php

// leggo il contenuto del file 
$string = file_get_contents("dischi.json");

// converto il json da stringa ad array assocciativo 
$card = json_decode($string, true);
var_dump($string);
var_dump($card);

header("Content-type: application/json");
?>