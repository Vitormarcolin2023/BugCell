<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Relatorio</title>
    </head>

    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="descricao">Funcionarios Cadastrados:</label>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT cli_nome, cli_sobrenome, cli_cpf FROM tb_clientes ORDER BY cli_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>  
                                <p><?php echo $option['cli_nome']?> <?php echo $option['cli_sobrenome']?>, <br> CPF: <?php echo $option['cli_cpf']?>.</p>
                                    <?php
                                }
                            ?>
                </div>
            </form>
        </div>
    </body>
</html>