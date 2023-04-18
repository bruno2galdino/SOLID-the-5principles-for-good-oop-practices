<?php

namespace src;
use src\interfaces\IMensagemToken;

class Whatsapp implements IMensagemToken{
    public function enviar():void {
        echo 'Zap: Seu token é 444-777';
    }
}