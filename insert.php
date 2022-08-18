<?php

$nome = filter_input(INPUT_POST, 'nome');
$email = filter_input(INPUT_POST, 'email');
$senha = filter_input(INPUT_POST, 'senha');

// echo 'Olá PHP: ' . $nome . '<br>';
// echo 'Email: ' . $email . '<br>';
// echo 'Senha: ' . $senha;

//Variáveis para conexão
$host = 'localhost';
$usuario_bd = 'root';
$senha_bd = '';
$banco = 'curso1_bd';

//Conexão
$conexao = new mysqli($host, $usuario_bd, $senha_bd, $banco);

// if ($conexao) {
    
//     $query = "INSERT INTO pessoas(nome, email, senha) VALUES ('$nome', '$email', '$senha')";
    
//     $result = $conexao->query($query);
//     if ($result) {
//         echo 'Dados inseridos com sucesso!';
//     } else {
//         echo 'Falha ao tentar inserir dados';
//         echo mysqli_error($conexao);
//     }
// } else {
//     echo 'Erro ao tentar conexão!';
//     return;
// }

echo '<a href="index.html">Retornar</a> <br>';
echo '<a href="select.php">Listar Dados</a>';







// $sql = mysqli_query($conexao, "select * from tb_pessoa") or die("Erro");
// while ($dados = mysqli_fetch_assoc($sql)) {
//     echo $dados['nome'] . '<br>';
// }
