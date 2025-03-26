<?php
include("conexao.php");

$planos = addslashes($_POST['planos']);
$duracao = $_POST["duracao"];
$valor = $_POST["valor"];
$descricao = $_POST["descricao"];


// Inserção de dados em tabelas diferentes
$sql_inserir_planos = mysqli_query($conexao, "INSERT INTO tb_planos (planos_descricao, planos_valor, planos_duracao, 
planos_modelocod)
 VALUES ('$descricao', '$valor', '$duracao', '$planos' )") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}
?>
