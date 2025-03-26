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
                                $query = mysqli_query($conexao, "SELECT fun_nome, fun_sobrenome, fun_cargo FROM tb_funcionario ORDER BY fun_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>  
                                <p><?php echo $option['fun_nome']?> <?php echo $option['fun_sobrenome']?>, ocupa cargo de <?php echo $option['fun_cargo']?></p>
                                    <?php
                                }
                            ?>
                </div>
            </form>
        </div>
    </body>
</html>