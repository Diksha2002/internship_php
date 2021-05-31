<?php
//Associative Array 
//key = value
//method
$a [0] = 10;
$a ['c'] = "computer";
$a ['php'] = "web devlopment";
$a [10] = "ten";
$a [50] = "50.50";
//method 2
//always use this method to create an array
$a = array(
    0 => 10,
    "c" => "computer",
    "php" => "web devlopment",
    10 => "ten",
    50 => 50.50
);
//print value
echo "<pre>";
print_r($a);
echo "<pre>";
echo "<pre>";
var_dump($a);
echo "<pre>";