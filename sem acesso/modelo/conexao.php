<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bugcll";

$conexao = mysqli_connect($servidor, $usuario, $senha, $banco) 
	or die ("Não foi possível conectar-se ao servidor. Erro:" . mysqli_connect_error());

if (isset($conexao)) {
}
?>