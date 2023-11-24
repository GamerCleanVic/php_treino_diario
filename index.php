<?php
require 'autoload.php';

echo $stl = "<style>body{background-color: #181818;color: #ccc;}</style>";

use \matematica\Basico;

$n = new Basico();
echo $n->somar(10, 20);

$upload = new \foto\Upload;
