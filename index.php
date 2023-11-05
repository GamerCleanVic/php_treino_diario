<?php
     class Matematica{
          public static function somar($x, $y){
               return $x + $y;
          }
     }
     echo "Soma = ".Matematica::somar(4, 3);
