<?php

namespace src;

class Quadrado extends Retangulo{
    public function setAltura(float $altura): void{
        $this->largura = $altura;
        $this->altura = $altura;
    }
    public function setLargura(float $largura): void{
        $this->largura = $largura;
        $this->altura = $largura;
    }
}