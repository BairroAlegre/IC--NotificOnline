<?php
    include 'bancoDados.php';
    $objeto = new Conexao();
    $pdo = $objeto->abreConexao();
    $objeto->alteraUsuario();