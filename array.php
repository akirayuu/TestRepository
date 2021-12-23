<?php
//call array data from array_data.php
include_once ("array_data.php");

//print data array
//print_r($data);

//print in json format
$decode = json_decode($data);
print_r($data);
?>