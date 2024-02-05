<?php 
    //config banco de dados
    define('HOST', 'localhost'); 
    define('USER', 'root');
    define('PASS', '');
    define('BASE', 'cadastro');

    $conn = new mysqli(HOST, USER, PASS, BASE); // criar conexão com Banco de Dados
?>