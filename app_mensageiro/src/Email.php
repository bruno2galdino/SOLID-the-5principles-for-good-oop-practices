<?php

namespace src;
use src\interfaces\IMensagemToken;

class Email implements IMensagemToken{
    public function enviar():void {
        echo 'Email: Seu token é 555-333';
    }
}