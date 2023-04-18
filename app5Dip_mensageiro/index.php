<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;
use src\Email;
use src\Sms;
use src\Whatsapp;

//---- canal Email
$msg = new Mensageiro(new Email());
$msg->enviarToken();
echo '<br>';

//---- canal Sms
$msg2 = new Mensageiro(new Sms());
$msg2->enviarToken();
echo '<br>';

//---- canal Whats
$msg2 = new Mensageiro(new Whatsapp());
$msg2->enviarToken();
