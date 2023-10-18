<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light custom-navbar fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="./src/img/vitoria.png" alt="Logo" width="190px" height="60" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
        <div class="flex justify-content-md-end mb-3" style="margin: 10px;">
            <a class="btn btn-danger me-md-2 shadow" href="index.php">Sair</a>
        </div>

        <div class="flex justify-content-md-end mb-3" style="margin: 10px;">
            <a class="btn btn-primary me-md-2 shadow" href="cadastro.php">Cadastrar Veículo</a>
        </div>
    </nav>

    <div class="container-fluid d-flex flex-column justify-content-center align-items-center" style="min-height: 100vh;">
        <table class="table table-bordered" style="margin-top: 0;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>CNH</th>
                    <th>Telefone</th>
                    <th>RG</th>
                    <th>CPF</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>KM</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $servername = "127.0.0.1";
                $username = "root";
                $password = "";
                $dbname = "vistoriago";

                $conn = new mysqli($servername, $username, $password, $dbname);

                if ($conn->connect_error) {
                    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
                }

                $sql = "SELECT * FROM veiculos";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo '<tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["nome"] . '</td>
                        <td>' . $row["cnh"] . '</td>
                        <td>' . $row["telefone"] . '</td>
                        <td>' . $row["rg"] . '</td>
                        <td>' . $row["cpf"] . '</td>
                        <td>' . $row["marca"] . '</td>
                        <td>' . $row["modelo"] . '</td>
                        <td>' . $row["km"] . '</td>
                        <td>
                            <a href="ver_detalhes.php?id=' . $row["id"] . '" class="btn btn-info">Ver Detalhes</a>
                            <a href="editar.php?id=' . $row["id"] . '" class="btn btn-warning">Editar</a>
                            <a href="deleta.php?id=' . $row["id"] . '" class="btn btn-danger">deletar</a>
                        </td>
                      </tr>';
                    }
                }
                $conn->close();
                ?>
            </tbody>
        </table>

        <?php
        if ($result->num_rows == 0) {
            echo '<div class="no-data-message" style="text-align: center;">Nenhum veículo encontrado.</div>';
        }
        ?>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>
<?php
include 'rodape.php';
?>