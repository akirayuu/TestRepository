<?php
include_once("array_data_merge.php");

print_r(array_merge($a1,$a2));

/*
class Colour {
 private $url;
 private $ListofColour;
 public $a1;
 public $a2;

    function __construct()
    {
        $this->url = "http://localhost:8080/GitHub/TestRepository/array_data_merge.php";

        $this->ListofColour = curl_init();

        curl_setopt($this->ListofColour, CURLOPT_URL, $this->url);
        curl_setopt($this->ListofColour, CURLOPT_RETURNTRANSFER, true);

        $respone = curl_exec($this->ListofColour);
        



$obj = new Colour();
*/

?>