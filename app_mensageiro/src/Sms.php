<?php

namespace src;
use src\interfaces\IMensagemToken;

class Sms implements IMensagemToken{
    public function enviar():void {
        echo 'SMS: Seu token é 999-111';
    }
}