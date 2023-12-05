<?php
require 'vendor/autoload.php';

echo $stl = "<style>body{background-color: #181818;color: #ccc;}</style>";

use \classes\matematica\Basico;
use Monolog\Level;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Level::Warning));

$n = new Basico();
echo $n->somar(10, 20);

// add records to the log
$log->warning('Foo');
$log->error('Bar');
