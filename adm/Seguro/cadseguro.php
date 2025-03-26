<?php
include("conexao.php");

// Dados do formulário
$descricao = $_POST["descricao"];
$valor = $_POST["valor"];



// Inserção de dados em tabelas diferentes
$sql_inserir_fp = mysqli_query($conexao, "INSERT INTO tb_seguro (seguro_descricao, seguro_valor)
 VALUES ('$descricao', '$valor')") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
