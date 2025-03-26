<?php
include("conexao.php");

$fp = addslashes($_POST['fp']);
$descricao = $_POST["descricao"];

// Update de dados em tabelas diferentes
$sql_update_fp = mysqli_query($conexao, "UPDATE tb_formasdepagamentos SET fp_descricao = '$descricao'
WHERE fp_cod = '$fp'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
