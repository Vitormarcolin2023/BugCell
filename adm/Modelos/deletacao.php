<?php
include("conexao.php");

$modelos = addslashes($_POST['modelos']);

// Delet de dados em tabelas 
$sql_delete_modelos = mysqli_query($conexao, "DELETE FROM tb_modelos WHERE modelo_cod = '$modelos'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/Modelos/Infdelete.html");
}

?>