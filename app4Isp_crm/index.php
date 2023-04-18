<?php
require __DIR__.'/vendor/autoload.php';

use src\model\dao\ContratoDAO;
use src\model\dao\LeadDAO;
use src\model\dao\UsuarioDAO;

$contratoDAO = new ContratoDAO();
print_r($contratoDAO);
echo '<br>';

$usuarioDAO = new UsuarioDAO();
print_r($usuarioDAO);
echo '<br>';

$leadDAO = new LeadDAO();
print_r($leadDAO);
echo '<br>';