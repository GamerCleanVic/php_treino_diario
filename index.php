<?php
    class Operacoes{
          public function calc($x, $y){
               return $x + $y;
          }
    }

$operaFora = new Operacoes();
echo $operaFora->calc(3, 4);
