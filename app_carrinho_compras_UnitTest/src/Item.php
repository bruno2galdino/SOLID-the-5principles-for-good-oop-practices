<?php

namespace App;

class Item{
    //Atributos
    private $descricao;
    private $valor;

    //Metodos
    public function __construct(){
        $this->descricao = '';
        $this->valor = 0;
    }

    public function getDescricao(){
        return $this->descricao;
    }

    public function getValor(){
        return $this->valor;
    }

    public function setDescricao(string $descricao){
        $this->descricao = $descricao;
    }

    public function setValor(float $valor){
        $this->valor = $valor;
    }

    public function itemValido(){
        if($this->descricao == ''){
            return false;
        }
        if($this->valor <= 0){
            return false;
        }

        return true;
    }
}