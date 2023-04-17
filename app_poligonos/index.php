<?php
require __DIR__.'/vendor/autoload.php';

use src\Quadrado;
use src\Retangulo;

$retangulo = new Retangulo();
$retangulo->setAltura(10);
$retangulo->setLargura(5);

echo '<h3> Area do retangulo: '.$retangulo->getArea().'</h3>';

$quadrado = new Quadrado();
$quadrado->setLargura(5);

echo '<h3> Area do quadrado: '.$quadrado->getArea().'</h3>';
