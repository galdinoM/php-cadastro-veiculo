<!DOCTYPE html>
<html>

<head>
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <style>
        body {
            background-color: #ccc;
            display: flex;
            justify-content: center !important;
            align-items: center !important;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background-color: white;
            padding: 1rem;
            border-radius: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        }

        .form-input {
            width: 100%;
            padding: 0.375rem;
            border: 1px solid #d2d6dc;
            border-radius: 0.25rem;
        }

        .login-button {
            background-color: #3b82f6;
            color: #fff;
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 0.25rem;
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="login-container">
                    <img src="./src/img/vitoria.png" alt="Sua Imagem" class="img-fluid" style="margin-bottom: 1rem;">
                    <h1 class="card-title" style="font-size: 1.25rem; margin-bottom: 1rem;">Login</h1>
                    <form action="login.php" method="post">
                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label for="username" style="color: #374151;" class="block text-gray-700">Nome de usuário:</label>
                            <input type="text" id="username" name="username" class="form-input">
                        </div>
                        <div class="form-group" style="margin-bottom: 1rem;">
                            <label for="password" style="color: #374151;" class="block text-gray-700">Senha:</label>
                            <input type="password" id="password" name="password" class="form-input">
                        </div>
                        <button type="submit" class="login-button">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>