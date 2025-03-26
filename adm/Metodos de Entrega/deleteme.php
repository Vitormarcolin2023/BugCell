<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Deletar Metodos de Entrega</title>
    </head>

    <body>
        <div class="container">
            <form action="deletacao.php" method="post">
                <div class="form-group">
                    <label for="descricao">Metodos de Entrega:</label>
                        <select name="me"required>
                            <option value="">Selecione um metodo</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT me_cod, me_descricao FROM tb_metodosdeentregas ORDER BY me_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['me_cod']?>"><?php echo $option['me_descricao']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                </div>

                <div class="form-group">
                <label for="descricao">Descrição:</label>
                    <p><?php echo $option['me_descricao']?></p>
                </div>

                <button type="submit" class="btn">Deletar</button>
            </form>
        </div>
    </body>
</html>