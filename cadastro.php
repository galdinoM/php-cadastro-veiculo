<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>

<body>
    <div class="container border shadow mt-4 mb-4">
        <form action="processar_formulario.php" method="post" enctype="multipart/form-data">
            <div class="container mt-4 mb-4">
                <h2>Condutor</h2>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="nome">Nome:</label>
                            <input type="text" class="form-control" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cpf">CPF:</label>
                            <input type="text" class="form-control" id="cpf" name="cpf">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="rg">RG:</label>
                            <input type="text" class="form-control" id="rg" name="rg">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="telefone">Telefone:</label>
                            <input type="text" class="form-control" id="telefone" name="telefone">
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cnh">CNH:</label>
                            <input type="text" class="form-control" id="cnh" name="cnh">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cep">CEP:</label>
                            <input type="text" class="form-control" id="cep" name="cep">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="logradouro">Logradouro:</label>
                            <input type="text" class="form-control" id="logradouro" name="logradouro">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="numero">Numero:</label>
                            <input type="text" class="form-control" id="numero" name="numero">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="bairro">Bairro:</label>
                            <input type="text" class="form-control" id="bairro" name="bairro">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="cidade">Cidade:</label>
                            <input type="text" class="form-control" id="cidade" name="cidade">
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="uf">UF:</label>
                            <input type="text" class="form-control" id="uf" name="uf">
                        </div>
                    </div>
                    <br />
                    <div class="container">
                        <h2>Dados do Veículo</h2>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa:</label>
                                    <input type="text" class="form-control" id="placa" name="placa">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="chassi">Chassi:</label>
                                    <input type="text" class="form-control" id="chassi" name="chassi">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="renavam">Renavam:</label>
                                    <input type="text" class="form-control" id="renavam" name="renavam">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="marca">Marca:</label>
                                    <input type="text" class="form-control" id="marca" name="marca">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="modelo">Modelo:</label>
                                    <input type="text" class="form-control" id="modelo" name="modelo">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="km">KM:</label>
                                    <input type="text" class="form-control" id="km" name="km">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="nivel">Nível do combustível:</label>
                                    <input type="text" class="form-control" id="nivel" name="nivel">
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
                                    <input type="file" class="form-control-file" id="selfie_documento" name="selfie_documento">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa Dianteira:</label>
                                    <input type="file" class="form-control-file" id="placa_dianteira" name="placa_dianteira">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="placa">Placa Traseira:</label>
                                    <input type="file" class="form-control-file" id="placa_traseira" name="placa_traseira">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="hodometro">Hodômetro:</label>
                                    <input type="file" class="form-control-file" id="hodometro" name="hodometro">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="banco">Banco Dianteiro:</label>
                                    <input type="file" class="form-control-file" id="banco_dianteiro" name="banco_dianteiro">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="dashboard.php" class="btn btn-primary">Voltar</a>
            </div>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js"></script>

    <script>
        $("#cep").blur(function() {
            var cep = $(this).val().replace(/\D/g, '');

            if (cep.length === 8) {
                $.ajax({
                    url: "https://viacep.com.br/ws/" + cep + "/json/",
                    dataType: "json",
                    success: function(dados) {
                        if (!("erro" in dados)) {
                            $("#logradouro").val(dados.logradouro);
                            $("#bairro").val(dados.bairro);
                            $("#cidade").val(dados.localidade);
                            $("#uf").val(dados.uf);
                        } else {
                            alert("CEP não encontrado.");
                        }
                    }
                });

                var formattedCEP = formatCEP(cep);
                $("#cep").val(formattedCEP);
            }
        });

        $(document).ready(function() {
            $('#cpf').inputmask("999.999.999-99");
            $('#rg').inputmask("99.999.999-9");
            $('#cnh').inputmask("9999.999999.9.999999-9");
            $('#telefone').inputmask("(99) 99999-9999");
        });
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>

</html>