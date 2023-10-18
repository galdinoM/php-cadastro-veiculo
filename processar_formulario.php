<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];
    $rg = $_POST["rg"];
    $telefone = $_POST["telefone"];
    $cnh = $_POST["cnh"];
    $cep = $_POST["cep"];
    $logradouro = $_POST["logradouro"];
    $numero = $_POST["numero"];
    $bairro = $_POST["bairro"];
    $cidade = $_POST["cidade"];
    $uf = $_POST["uf"];
    $placa = $_POST["placa"];
    $chassi = $_POST["chassi"];
    $renavam = $_POST["renavam"];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $km = $_POST["km"];
    $nivel = $_POST["nivel"];

    $upload_directory = "./upload/";

    $selfie_documento = $_FILES['selfie_documento']['tmp_name'];
    $placa_dianteira = $_FILES['placa_dianteira']['tmp_name'];
    $placa_traseira = $_FILES['placa_traseira']['tmp_name'];
    $hodometro = $_FILES['hodometro']['tmp_name'];
    $banco_dianteiro = $_FILES['banco_dianteiro']['tmp_name'];

    if (
        move_uploaded_file($selfie_documento, $upload_directory . basename($_FILES['selfie_documento']['name'])) &&
        move_uploaded_file($placa_dianteira, $upload_directory . basename($_FILES['placa_dianteira']['name'])) &&
        move_uploaded_file($placa_traseira, $upload_directory . basename($_FILES['placa_traseira']['name'])) &&
        move_uploaded_file($hodometro, $upload_directory . basename($_FILES['hodometro']['name'])) &&
        move_uploaded_file($banco_dianteiro, $upload_directory . basename($_FILES['banco_dianteiro']['name']))
    ) {
        $selfie_documento_path = $upload_directory . $_FILES['selfie_documento']['name'];
        $placa_dianteira_path = $upload_directory . $_FILES['placa_dianteira']['name'];
        $placa_traseira_path = $upload_directory . $_FILES['placa_traseira']['name'];
        $hodometro_path = $upload_directory . $_FILES['hodometro']['name'];
        $banco_dianteiro_path = $upload_directory . $_FILES['banco_dianteiro']['name'];

        $servername = "127.0.0.1";
        $username = "root";
        $password = "";
        $dbname = "vistoriago";

        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Falha na conexão com o banco de dados: " . $conn->connect_error);
        }

        $sql = "INSERT INTO vistoriago.veiculos (nome, cpf, rg, telefone, cnh, cep, logradouro, numero, bairro, cidade, uf, placa, chassi, renavam, marca, modelo, km, nivel, selfie_documento, placa_dianteira, placa_traseira, hodometro, banco_dianteiro)
        VALUES ('$nome', '$cpf', '$rg', '$telefone', '$cnh', '$cep', '$logradouro', '$numero', '$bairro', '$cidade', '$uf', '$placa', '$chassi', '$renavam', '$marca', '$modelo', '$km', '$nivel', '$selfie_documento_path', '$placa_dianteira_path', '$placa_traseira_path', '$hodometro_path', '$banco_dianteiro_path')";

        if ($conn->query($sql) === TRUE) {
            header("Location: sucesso.php");
            exit;
        } else {
            $errorMessage = "Erro ao inserir registro: " . $conn->error;
        }
        $conn->close();
    } else {
        $errorMessage = "Erro no upload de arquivos.";
    }
} else {
    echo "Formulário não enviado!";
}
