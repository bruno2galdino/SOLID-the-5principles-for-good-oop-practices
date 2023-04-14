<?php

namespace src;

use src\Arquivo;

class Leitor
{
    private $diretorio;
    private $arquivo;

    public function getDiretorio()
    {
        return $this->diretorio;
    }

    public function setDiretorio(string $diretorio): void
    {
        $this->diretorio = $diretorio;
    }

    public function getArquivo()
    {
        return $this->arquivo;
    }

    public function setArquivo(string $arquivo): void
    {
        $this->arquivo = $arquivo;
    }

    public function lerArquivo()
    {
        $caminho = $this->getDiretorio() . '/' . $this->getArquivo();

        $arquivo = new Arquivo();

        $extensao = explode('.', $this->getArquivo());

        if ($extensao[1] == 'csv') {
            $arquivo->lerArquivoCSV($caminho);
        } else {
            $arquivo->lerArquivoTXT($caminho);
        }

        return $arquivo->getDados();
    }
}
