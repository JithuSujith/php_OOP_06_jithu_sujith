<?php

require('ironman.php');

$number= rand(1,100);

for($i=0;$i<$number;$i++){
    $creator= new Tony();
    $creator->createIronman();
}

echo "Total number Ironman suites :".Tony::$counter;


?>