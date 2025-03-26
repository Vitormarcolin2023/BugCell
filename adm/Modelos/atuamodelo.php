<?php
include("conexao.php");

$modelos = addslashes($_POST['modelos']);
$modelo = $_POST["modelo"];
$marca = $_POST["marca"];


// // Update de dados em tabelas diferentes
$sql_update_modelo = mysqli_query($conexao, "UPDATE tb_modelos SET modelo_modelo = '$modelo', modelo_marca = '$marca' 
WHERE modelo_cod = '$modelos'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
