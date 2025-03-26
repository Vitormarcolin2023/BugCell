<?php
include("conexao.php");

// Dados do formulário
$descricao = $_POST["descricao"];
$marca = $_POST["marca"];

// Inserção de dados em tabelas diferentes
$sql_inserir_cli = mysqli_query($conexao, "INSERT INTO tb_modelos (modelo_modelo, modelo_marca)
 VALUES ('$descricao', '$marca')") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));
?>
