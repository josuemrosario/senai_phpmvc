<?php

    namespace App\controllers;

    use App\Banco;

    class IndexController {

        public function index(){

            //Acessando o Banco
            $db = Banco::conectar();

            echo 'Controler: IndexController - Acao: index() <br>';
            $dados = array('dado1','dado2','dado3','dado4');
            require_once '..\app\views\index.phtml';
    
        }
    

    }


?>