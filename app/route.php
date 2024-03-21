<?php
    
    namespace app;

    class Route{

        public function getUrl(){
            return parse_url($_SERVER['REQUEST_URI']);
        }

    }

?>
