<?php

// leggo il contenuto del file 
$string = file_get_contents("dischi.json");

// converto il json da stringa ad array assocciativo 
$card = json_encode($string, true);


header("Content-type: application/json");
echo $string;
?>