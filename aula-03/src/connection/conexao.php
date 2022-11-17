<?php
function abrirConexao(){
    $host = "localhost";
    $user = "root";
    $password = "1234";
    $data_base = "digitalcommerce";
    $conexao = new mysqli($host, $user, $password, $data_base);
    return $conexao;
}