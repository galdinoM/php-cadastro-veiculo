# Iniciar o Servidor

Precisa estar dentro do arquivo do servidor Apache ou WampServer (wamp64).

. WampServer (wamp64) precisa estar localizado na pasta: C:\wamp64\www\php.

. Apache precisa estar localizado na pasta: C:\xampp\htdocs\php.

Assim, você poderá acessar no navegador http://localhost/php/.

# Iniciar o branco de dados

O banco de dados que estou usando é o MySQL para fazer o cadastro.

A query que eu usei para criar o banco de dados é a seguinte:

CREATE TABLE vistoriago.veiculos (
id INT AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(255),
cpf VARCHAR(14),
rg VARCHAR(12),
telefone VARCHAR(15),
cnh VARCHAR(20),
cep VARCHAR(10),
logradouro VARCHAR(255),
numero VARCHAR(10),
bairro VARCHAR(255),
cidade VARCHAR(255),
uf VARCHAR(2),
placa VARCHAR(10),
chassi VARCHAR(17),
renavam VARCHAR(20),
marca VARCHAR(255),
modelo VARCHAR(255),
km INT,
nivel VARCHAR(255),
selfie_documento VARCHAR(255),
placa_dianteira VARCHAR(255),
placa_traseira VARCHAR(255),
hodometro VARCHAR(255),
banco_dianteiro VARCHAR(255)
);

. A conexão com o banco de dados para o funcionamento do sistema está dessa forma:

$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "vistoriago";

# Detalhes a observar

1. No cadastro, estou usando a API do viaCEP para trazer automaticamente o seu endereço e adicionei os campos que ele retorna. Você só precisa digitar o seu CEP, e quando o input perde o foco, ele preenche automaticamente o seu endereço, deixando apenas o número em branco.

2. Os arquivos são enviados para o banco de dados, mas estou usando um arquivo de upload no meu projeto para que eu possa pegar as imagens que foram enviadas.

3. Na tabela do dashboard, devem aparecer três botões: "Ver detalhes," "Editar," e "Deletar." Pensei em deixar as imagens na parte da tabela, mas como estava usando imagens muito grandes e queria vê-las com mais detalhes, optei por fazer páginas separadas para os botões.

# btn Ver detalhes

O botão "Ver Detalhes" apresenta apenas as informações, sem opção de edição ou exclusão. Nos detalhes, é onde listo todas as imagens que foram enviadas.

# btn Editar

O botão de "Editar" serve apenas para editar as informações do cadastro e não permite editar a parte das imagens por questões de segurança.

# btn Delete

O botão "Deletar" serve apenas para excluir o usuário. Tentei adicionar um alerta antes da exclusão, mas estava usando apenas o Bootstrap. Particularmente, não encontrei um que ficasse interessante.
