<?php
require 'autoload.php';
echo $stl = "<style>body{background-color: #181818;color: #ccc;}</style>";

$n = new Matematica();
echo $n->somar(10, 20);

$x = new Algo();
echo $x->imprimaAlgo();
