<?php
require __DIR__.'/vendor/autoload.php';

use src\poligonos\Quadrado;
use src\poligonos\Retangulo;
use src\Poligono;

$poligono = new Poligono();
$poligono->setForma(new Retangulo());
$poligono->getForma()->setLargura(10);
$poligono->getForma()->setAltura(5);

echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3> Area da forma: '.$poligono->getArea().'</h3>';

$poligono = new Poligono();
$poligono->setForma(new Quadrado());
$poligono->getForma()->setLargura(10);

echo '<pre>';
print_r($poligono);
echo '</pre>';
echo '<h3> Area da forma: '.$poligono->getArea().'</h3>';

