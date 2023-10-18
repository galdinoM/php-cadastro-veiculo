<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vistoriago";

if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM veiculos WHERE id = $vehicle_id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
        <!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Detalhes do Veículo</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        </head>

        <body>
            <div class="container mt-4">
                <div class="card shadow">
                    <div class="container mt-4 mb-4">

                        <h2>Condutor</h2>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="nome">Nome:</label>
                                    <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['nome']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cpf">CPF:</label>
                                    <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="rg">RG:</label>
                                    <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $row['rg']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="telefone">Telefone:</label>
                                    <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>" readonly>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cnh">CNH:</label>
                                    <input type="text" class="form-control" id="cnh" name="cnh" value="<?php echo $row['cnh']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cep">CEP:</label>
                                    <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $row['cep']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="logradouro">Logradouro:</label>
                                    <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $row['logradouro']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="numero">Numero:</label>
                                    <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $row['numero']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="bairro">Bairro:</label>
                                    <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="cidade">Cidade:</label>
                                    <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label for="uf">UF:</label>
                                    <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $row['uf']; ?>" readonly>
                                </div>
                            </div>
                            <br />
                            <div class="container">
                                <h2>Dados do Veículo</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="placa">Placa:</label>
                                            <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row['placa']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="chassi">Chassi:</label>
                                            <input type="text" class="form-control" id="chassi" name="chassi" value="<?php echo $row['chassi']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="renavam">Renavam:</label>
                                            <input type="text" class="form-control" id="renavam" name="renavam" value="<?php echo $row['renavam']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="marca">Marca:</label>
                                            <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row['marca']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="modelo">Modelo:</label>
                                            <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="km">KM:</label>
                                            <input type="text" class="form-control" id="km" name="km" value="<?php echo $row['km']; ?>" readonly>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="nivel">Nível do combustível:</label>
                                            <input type="text" class="form-control" id="nivel" name="nivel" value="<?php echo $row['nivel']; ?>" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <h2>Fotos do Veículo</h2>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="selfie">Selfie com Documento:</label>
                                            <img src="<?php echo $row['selfie_documento']; ?>" alt="Selfie com Documento">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="placa">Placa Dianteira:</label>
                                            <img src="<?php echo $row['placa_dianteira']; ?>" alt="Placa Dianteira">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="placa">Placa Traseira:</label>
                                            <img src="<?php echo $row['placa_traseira']; ?>" alt="Placa Traseira">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="hodometro">Hodômetro:</label>
                                            <img src="<?php echo $row['hodometro']; ?>" alt="Hodômetro">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="banco">Banco Dianteiro:</label>
                                            <img src="<?php echo $row['banco_dianteiro']; ?>" alt="Banco Dianteiro">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="dashboard.php" class="btn btn-primary">Voltar</a>
                    </div>
                </div>
            </div>
            </div>

            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        </body>

        </html>

<?php
    } else {
        echo "Nenhum veículo encontrado com o ID fornecido.";
    }

    $conn->close();
} else {
    echo "ID do veículo não fornecido na URL.";
}
?>