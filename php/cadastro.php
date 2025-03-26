<?php
include("conexao.php");

// Dados do formulário
$nome = $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];
$fone = $_POST["fone"];
$senha = $_POST["senha"];
$cep = $_POST["cep"];
$numerocasa = $_POST["numerocasa"];

// Dados Endereço
$rua = $_POST["rua"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$estado = $_POST["estado"];




// Inserção de dados em tabelas diferentes
$sql_inserir_cli = mysqli_query($conexao, "INSERT INTO tb_clientes (cli_nome, cli_sobrenome, cli_email, cli_cpf, 
cli_fone, cli_numerocasa, cli_senha, cli_datanascimento, cli_cep, cli_end, cli_bairro, cli_cidade, cli_estado)
 VALUES ('$nome', '$sobrenome', '$email', '$cpf','$fone', '$numerocasa', '$senha', '$data', '$cep', '$rua', '$bairro', 
 '$cidade', '$estado' )") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao) {
    header("Location: http://localhost/BugCell/telas/login.html");
}

?>
