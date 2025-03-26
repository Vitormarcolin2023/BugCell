<?php
include("conexao.php");

$planos = addslashes($_POST['planos']);
$descricao = $_POST["descricao"];
$duracao = $_POST["duracao"];
$valor = $_POST["valor"];


// Update de dados em tabelas diferentes
$sql_update_planos = mysqli_query($conexao, "UPDATE tb_planos SET planos_descricao = '$descricao', planos_duracao = '$duracao',
planos_valor = '$valor' WHERE planos_cod = '$planos'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
