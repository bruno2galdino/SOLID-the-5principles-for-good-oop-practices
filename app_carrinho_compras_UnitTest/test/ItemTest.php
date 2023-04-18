<?php
use App\Item;
use PHPUnit\Framework\TestCase;

class ItemTest extends TestCase{
    
    //Metodos Teste
    public function testEstadoInicialItem(){

        $item = new Item();

        //assertions PHPUnit
        $this->assertEquals('', $item->getDescricao());
        $this->assertEquals(0, $item->getValor());
    }

    /**
     * @dataProvider dataDescricao
     */
    public function testGeteSetDescricao($descricao){
        $item = new Item();
        $item->setDescricao($descricao);
        //assertions PHPUnit
        $this->assertEquals($descricao,$item->getDescricao());
    }

    /**
     * @dataProvider dataValores
     */
    public function testGeteSetValor($valor){
        $item = new Item();
        $item->setValor($valor);
        //assertions PHPUnit
        $this->assertEquals($valor, $item->getValor());
    }

    /**
     * @dataProvider dataItemValido
     */
    public function testItemValido($descTrue, $valTrue, $descFalse, $valFalse){
        $item = new Item();        

        //return Descricao true
        $item->setDescricao($descTrue);
        $item->setValor($valTrue);
        $this->assertEquals(true, $item->itemValido());

        //return Descricao false
        $item->setDescricao($descFalse);
        $item->setValor($valTrue);
        $this->assertEquals(false, $item->itemValido());        

        //return valor false
        $item->setDescricao($descTrue);
        $item->setValor($valFalse);
        $this->assertEquals(false, $item->itemValido());

        //return valor true
        $item->setDescricao($descTrue);
        $item->setValor($valTrue);
        $this->assertEquals(true, $item->itemValido());

        //return all att false
        $item->setDescricao($descFalse);
        $item->setValor($valFalse);
        $this->assertEquals(false, $item->itemValido());

    }

    public static function dataValores(){
        return [
            [100],
            [-2],
            ["2"],
            [0]
        ];
    }

    public static function dataDescricao(){
        return [
            ['Cadeira de Praia'],
            [23],
            ['']
        ];
    }

    public static function dataItemValido(){
        return [
            ['Cadeira de Praia', 10.99, '', 0],
            ['Gabinete veneza', 520.99, '', -20]
        ];
    }
}