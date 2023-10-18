<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vistoriago";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $vehicle_id = $_POST['id'];
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $telefone = $_POST['telefone'];
    $cnh = $_POST['cnh'];
    $cep = $_POST['cep'];
    $logradouro = $_POST['logradouro'];
    $numero = $_POST['numero'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $uf = $_POST['uf'];
    $placa = $_POST['placa'];
    $chassi = $_POST['chassi'];
    $renavam = $_POST['renavam'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $km = $_POST['km'];
    $nivel = $_POST['nivel'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Erro na conexão com o banco de dados: " . $conn->connect_error);
    }

    $sql = "UPDATE veiculos 
        SET nome='$nome', 
            cpf='$cpf', 
            rg='$rg', 
            telefone='$telefone', 
            cnh='$cnh', 
            cep='$cep', 
            logradouro='$logradouro', 
            numero='$numero', 
            bairro='$bairro', 
            cidade='$cidade', 
            uf='$uf', 
            placa='$placa', 
            chassi='$chassi', 
            renavam='$renavam', 
            marca='$marca', 
            modelo='$modelo', 
            km='$km', 
            nivel='$nivel'
        WHERE id=$vehicle_id";

    if ($conn->query($sql) === TRUE) {
        header("Location: edicaosucesso.php");
        exit;
    } else {
        $errorMessage = "Erro ao inserir registro: " . $conn->error;
    }

    $conn->close();
}
