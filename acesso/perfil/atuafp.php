<?php
include("conexao.php");

session_start();

$cpf = $_SESSION['login_user'];
$descricao = $_POST["descricao"];

// Update de dados em tabelas diferentes
$sql_update_fp = mysqli_query($conexao, "UPDATE tb_clientes SET cli_senha = '$descricao'
WHERE cli_cpf = '$cpf'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/acesso/inico.html");
}

?>
