<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Curso PHP</title>
</head>

<body>

    <div class="container col-md-6">

        <h1>Curso PHP</h1>

        <h3>Tabela de Pessoas Cadastradas</h3>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                <?php

                //Variáveis para conexão
                $host = 'localhost';
                $usuario_bd = 'root';
                $senha_bd = '';
                $banco = 'curso1_bd';

                //Conexão
                $conexao = new mysqli($host, $usuario_bd, $senha_bd, $banco);

                if ($conexao) {

                    //Selecione tudo da tabela pessoas
                    $query = "SELECT * FROM pessoas";

                    //Resultado
                    $result = $conexao->query($query);

                    if ($result) {
                        //Enquanto tiver linha com resultado
                        while ($row = mysqli_fetch_assoc($result)) {
                            echo  '<tr>';
                            echo '<td>'.$row["id"].'</td>';
                            echo '<td>'.$row["nome"].'</td>';
                            echo '<td>'.$row["email"].'</td>';
                        echo '</tr>';
                        }
                    } else {
                        echo mysqli_error($conexao);
                    }
                } else {
                    echo 'Erro ao tentar conexão!';
                    return;
                }

                ?>


            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>