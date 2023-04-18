<?php

namespace src\model\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\componentes\Log;
use src\componentes\Notificacao;

class LeadDAO extends BD implements ICadastro{
    public function salvar(){
        //logica
    }

    public function registrarLog(Log $log){
        //Logica
    }

    public function enviarNotificacao(Notificacao $notificacao){
        //Logica
    }
}