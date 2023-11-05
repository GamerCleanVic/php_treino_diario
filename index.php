<?php
     class Matematica{
          public static string $operation = 'Soma = ';
          public static function somar($x , $y){
               return ($x + $y);
          }


     }
     echo Matematica::$operation.Matematica::somar(4, 3);
