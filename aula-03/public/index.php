<?php
$rota = $_SERVER['REQUEST_URI'];
// usando require_once porque esse arquivo é importante e não pode ser duplicado
require_once '../src/controller/produtoController.php';
$paginas = [
    '/' => 'inicio',
    '/listar' => 'listar',
    '/novo' => 'novo',
];
include '../src/views/menu.phtml';
if(false === isset($paginas[$rota])){
    include '../src/views/erro404.phtml';
    exit;
}
echo $paginas[$rota]();