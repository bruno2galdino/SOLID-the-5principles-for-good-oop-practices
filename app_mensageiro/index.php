<?php

require __DIR__.'/vendor/autoload.php';

use src\Mensageiro;

//---- canal Email
$msg = new Mensageiro();
$msg->setCanal('email');
$msg->enviarToken();

echo '<br>';
//---- canal Sms
$msg2 = new Mensageiro();
$msg2->setCanal('sms');
$msg2->enviarToken();
