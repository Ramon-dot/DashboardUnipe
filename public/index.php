<?php

//Inicia a sessão aqui e SOMENTE aqui.
session_start();

//Carrega o arquivo de configuração e o roteador.
require_once __DIR__ .'/../config/config.php';
require_once __DIR__ .'/../app/core/Router.php';

//Executa o roteador.
$router = new Router();
$router->run();