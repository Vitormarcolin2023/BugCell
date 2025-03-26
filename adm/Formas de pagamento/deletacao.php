<?php
include("conexao.php");

$fp = addslashes($_POST['fp']);

// Delet de dados em tabelas 
$sql_delete_fp = mysqli_query($conexao, "DELETE FROM tb_formasdepagamentos WHERE fp_cod='$fp'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/adm/Modelos/Infdelete.html");
}
?>