<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vistoriago";

if (isset($_GET['id'])) {
    $vehicle_id = $_GET['id'];
} else {
    echo "ID do veículo não fornecido na URL.";
    exit;
}

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

$sql = "SELECT * FROM veiculos WHERE id = $vehicle_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
} else {
    echo "Nenhum veículo encontrado com o ID fornecido.";
    exit;
}

$conn->close();
?>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<div class="container border shadow mt-4 mb-4">
    <div class="container mt-4">
        <h1>Editar informações</h1>
        <form action="salvar_edicao.php" method="post">
            <div class="container mt-4 mb-4">
                <h2>Condutor</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="id">id:</label>
                            <input type="text" class="form-control" id="id" name="id" value="<?php echo $vehicle_id; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome" value="<?php echo $row['nome']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf" value="<?php echo $row['cpf']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rg">RG:</label>
                            <input type="text" class="form-control" id="rg" name="rg" value="<?php echo $row['rg']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone" value="<?php echo $row['telefone']; ?>"><br>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cnh">CNH:</label>
                            <input type="text" class="form-control" id="cnh" name="cnh" value="<?php echo $row['cnh']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">CEP:</label>
                            <input type="text" class="form-control" id="cep" name="cep" value="<?php echo $row['cep']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="logradouro">Logradouro:</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro" value="<?php echo $row['logradouro']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="numero">Numero:</label>
                            <input type="text" class="form-control" id="numero" name="numero" value="<?php echo $row['numero']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro" value="<?php echo $row['bairro']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidade">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade" value="<?php echo $row['cidade']; ?>"><br>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="uf">UF:</label>
                            <input type="text" class="form-control" id="uf" name="uf" value="<?php echo $row['uf']; ?>"><br>
                        </div>
                    </div>
                    <br />
                    <div class="container">
                        <h2>Dados do Veículo</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa:</label>
                                    <input type="text" class="form-control" id="placa" name="placa" value="<?php echo $row['placa']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="chassi">Chassi:</label>
                                    <input type="text" class="form-control" id="chassi" name="chassi" value="<?php echo $row['chassi']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="renavam">Renavam:</label>
                                    <input type="text" class="form-control" id="renavam" name="renavam" value="<?php echo $row['renavam']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="marca">Marca:</label>
                                    <input type="text" class="form-control" id="marca" name="marca" value="<?php echo $row['marca']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo" value="<?php echo $row['modelo']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="km">KM:</label>
                                    <input type="text" class="form-control" id="km" name="km" value="<?php echo $row['km']; ?>"><br>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nivel">Nível do combustível:</label>
                                    <input type="text" class="form-control" id="nivel" name="nivel" value="<?php echo $row['nivel']; ?>"><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="dashboard.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>
</div>