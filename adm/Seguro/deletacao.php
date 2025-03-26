<?php
include("conexao.php");

$seguro = addslashes($_POST['seguro']);

// Delet de dados em tabelas 
$sql_delete_seguro = mysqli_query($conexao, "DELETE FROM tb_seguro WHERE seguro_cod='$seguro'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/Modelos/Infdelete.html");
}
?>