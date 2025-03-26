<?php
include("conexao.php");

$seguro = addslashes($_POST['seguro']);
$descricao = $_POST["descricao"];
$valor = $_POST["valor"];

// Update de dados em tabelas diferentes
$sql_update_seguro = mysqli_query($conexao, "UPDATE tb_seguro SET seguro_descricao = '$descricao', seguro_valor = '$valor'
WHERE seguro_cod = '$seguro'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
