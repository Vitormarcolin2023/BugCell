<?php
include("conexao.php");

$me = addslashes($_POST['me']);
$descricao = $_POST["descricao"];

// Update de dados em tabelas diferentes
$sql_update_fp = mysqli_query($conexao, "UPDATE tb_metodosdeentregas SET me_descricao = '$descricao'
WHERE me_cod = '$me'") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/index.html");
}

?>
