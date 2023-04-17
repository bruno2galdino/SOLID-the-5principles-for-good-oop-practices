<?php

namespace src\poligonos;

class Quadrado{
    protected $largura;
    protected $altura;
    public function setAltura(float $altura): void{
        $this->largura = $altura;
        $this->altura = $altura;
    }
    public function setLargura(float $largura): void{
        $this->largura = $largura;
        $this->altura = $largura;
    }

    public function getaltura(): float{
        return $this->altura;
    }

    public function getLargura(): float{
        return $this->largura;
    }
}