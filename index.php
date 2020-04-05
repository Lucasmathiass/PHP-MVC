<?php
require_once('autoload.php');
require_once('app/Core/Core.php');
require_once('app/Model/Produtos.php');
require_once('lib/database/Connection.php');

$template = file_get_contents('app/Template/template.html');


ob_start();
$core = new Core;
$core -> start($_GET);
$saida = ob_get_contents();
ob_end_clean();


//capturando campo para sustituir e atribuindo novo valor com retorno de funcão (ob_get_contents)
$newTemplate = str_replace("{{area-dinamica}}", $saida, $template);
echo $newTemplate;