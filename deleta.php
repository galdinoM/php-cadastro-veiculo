<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vistoriago";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $vehicle_id = $_GET['id'];
} else {
    header("Location: pagina_de_erro.php");
    exit();
}

$sql = "DELETE FROM veiculos WHERE id = ?";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
} else {
    $stmt->bind_param("i", $vehicle_id);
    $result = $stmt->execute();

    if ($result) {
        header("Location: dashboard.php?success=Veículo+deletado+com+sucesso");
        exit();
    } else {
        header("Location: dashboard.php?error=Erro+ao+deletar+veículo");
        exit();
    }
    $stmt->close();
}

$conn->close();
