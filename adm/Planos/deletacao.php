<?php
include("conexao.php");

$planos = addslashes($_POST['planos']);

// Delet de dados em tabelas 
$sql_delete_planos = mysqli_query($conexao, "DELETE FROM tb_planos WHERE planos_cod='$planos'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/Modelos/Infdelete.html");
}
?>