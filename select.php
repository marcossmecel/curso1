<?php

//Variáveis para conexão
$host = 'localhost';
$usuario_bd = 'root';
$senha_bd = '';
$banco = 'curso1_bd';

//Conexão
$conexao = new mysqli($host, $usuario_bd, $senha_bd, $banco);

if ($conexao) {
    echo 'Conectado';
    // $query = "INSERT INTO pessoas(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
    // $result = $conexao->query($query);
    // if ($result) {
    //     echo 'Dados inseridos com sucesso!';
    // } else {
    //     echo 'Falha ao tentar inserir dados';
    //     echo mysqli_error($conexao);
    // }
} else {
    echo 'Erro ao tentar conexão!';
    return;
}