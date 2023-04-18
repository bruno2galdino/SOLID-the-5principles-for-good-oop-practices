<?php

namespace src\model\dao;

use src\BD;
use src\interfaces\ICadastro;
use src\interfaces\ILog;
use src\interfaces\INotificacao;

use src\componentes\Log;
use src\componentes\Notificacao;

class UsuarioDAO extends BD implements ICadastro, ILog, INotificacao{
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