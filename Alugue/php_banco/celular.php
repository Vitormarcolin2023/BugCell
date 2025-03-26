<?php
include("conexao.php");

session_start();


setlocale(LC_ALL, "pt_BR", "pt_BR.utf-8", "portuguese");
$dia = date("Y-m-d");
$cpf = $_SESSION['login_user'];
$plano = addslashes($_POST['plano']);
$me = addslashes($_POST['me']);
$fp = addslashes($_POST['fp']);
$seguro = addslashes($_POST['seguro']);

// Delet de dados em tabelas 
$sql_inserir_aluguel = mysqli_query($conexao, "INSERT INTO tb_aluguel (aluguel_datarealizada, aluguel_clicpf, aluguel_planoscod, aluguel_mecod, aluguel_fpcod, aluguel_segurocod)
 VALUES ('$dia', '$cpf', '$plano', '$me', '$fp', '$seguro' )") or die ("  Erro ao gravar registro . " . mysqli_error($conexao));

if ($conexao = true) {
    header("Location: http://localhost/BugCell/Alugue/pagamento/pix.html");
}

?>