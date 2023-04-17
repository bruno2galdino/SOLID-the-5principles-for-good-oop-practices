<?php

namespace src\extrator;

use PhpOffice\PhpSpreadsheet\IOFactory;

class Xlsx extends Arquivo
{
    public function lerArquivo(string $caminho): array
    {
        $spreadsheet = IOFactory::load($caminho);
        $worksheet = $spreadsheet->getActiveSheet();
        foreach ($worksheet->getRowIterator() as $row) {
            $linha = [];
            foreach ($row->getCellIterator() as $cell) {
                $linha[] = $cell->getValue();
            }

            $this->setDados($linha[0], $linha[1], $linha[2]);
        }

        return $this->getDados();
    }
}
