<?php 

namespace MiniChat{

    class MiniChat
    {
        private $config;

        //configuration de la classe
        public function __construct(){
            $this->config = include(__DIR__." ../config/app.php");
        }

         // "Getter" permet de retourner la config si les clés ne sont pas null
        public function getConfig($key = null) {
            if(!$key) {
                return $this->config;
            }
            return $this->config[$key];
        }
    }
}