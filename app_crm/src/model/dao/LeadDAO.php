<?php

namespace src\model\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\INotificacao;

use src\componentes\Notificacao;

class LeadDAO extends BD implements ICadastro, INotificacao{
    public function salvar(){
        //logica
    }

    public function enviarNotificacao(Notificacao $notificacao){
        //Logica
    }
}