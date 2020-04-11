<?php
// Iniciando a Sessão
session_start();

// Arquivo de configuração
require_once "config.php";

// Helper
require_once "helpers/helper.php";

// Autoloader
function __autoload($className)
{
    require_once 'lib/'.$className.'.php';
}