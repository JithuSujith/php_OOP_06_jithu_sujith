<?php

require('armor.php');

class Tony extends Ironman{

   public static $counter=0;

   public function __construct(){
    self::$counter++;
   }
   public function createIronman(){
    echo "I'm IRONMAN \n";
   }
}


?>