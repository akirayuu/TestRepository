<?php

$a1=array("a"=>"red","b"=>"green");
$a2=array("c"=>"blue","b"=>"yellow");
//will merge both data and replace 'b' value from green to yellow
array_merge(
    is_array($a1) ? $a1 : iterator_to_array($a1),
    is_array($a2) ? $a2 : iterator_to_array($a2),
);

?>