<?php 
namespace minichat;

    class minichat 
    {
        private $config;

        public function __construct()
        {
        $this->config = include(__DIR__."/../config/app.php");

        }
    }