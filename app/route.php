<?php
    
    namespace App;

    class Route{

        private $routes;
        private $rota_solicitada;

        public function __construct(){
            $this->initRoutes(); // Inicia todas as rotas $routes
            $this->setUrlParam(); // Verifica qual rota o user chamou $rota_solicitada
            $this->runRoute(); // Roda o controller e método responsavel pela rota
        }


        public function initRoutes(){
            
            $this->routes['home'] = array(
                'route' =>  '/',
                'controller' => 'indexController',
                'action' => 'index'
            );    
        }

        public function setUrlParam(){
            $this->rota_solicitada = $this->getUrl();
        }


        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI'],PHP_URL_PATH);
        }

        public function runRoute(){
            $indexController = new controllers\IndexController;
            $indexController->index();
        }


    }

?>
