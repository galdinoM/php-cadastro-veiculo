<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        footer {
            position: fixed;
            bottom: 0;
            width: 100%;
            background-color: gray;
            color: white;
            padding: 10px;
        }

        footer img {
            max-width: 100px;
        }
    </style>
</head>

<body>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img src="./src/img/vitoria.png" alt="Sua Imagem" class="img-fluid">
                    <p>&copy; <?php echo date("Y"); ?> Vistoria GO</p>
                </div>
                <div class="col-md-6">
                    <p>Endereço: Rua dr Baeta Neves n° 114 – Baeta Neves - São Bernardo do Campo - 09784260</p>
                    <p>E-mail: suporte@vistoriago.com.br</p>
                    <p>Telefone: (123) 456-7890</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>