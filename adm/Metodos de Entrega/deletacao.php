<?php
include("conexao.php");

$me = addslashes($_POST['me']);

// Delet de dados em tabelas 
$sql_delete_me = mysqli_query($conexao, "DELETE FROM tb_metodosdeentregas WHERE me_cod='$me'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/Modelos/Infdelete.html");
}
?>