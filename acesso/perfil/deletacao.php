<?php
include("conexao.php");

session_start();

$cpf = $_SESSION['login_user'];

// Delet de dados em tabelas 
$sql_delete_fp = mysqli_query($conexao, "DELETE FROM tb_clientes WHERE cli_cpf='$cpf'") 
or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/acesso/perfil/Infdelete.html");
}
?>