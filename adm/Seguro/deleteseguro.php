<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Deletar Seguro</title>
    </head>

    <body>
        <div class="container">
            <form action="deletacao.php" method="post">
                <div class="form-group">
                    <label for="descricao">Seguro:</label>
                        <select name="seguro"required>
                            <option value="">Selecione um seguro</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT seguro_cod, seguro_descricao, seguro_valor FROM tb_seguro ORDER BY seguro_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['seguro_cod']?>"><?php echo $option['seguro_descricao']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                </div>

                <div class="form-group">
                <label for="descricao">Descrição:</label>
                    <p><?php echo $option['seguro_descricao']?></p>
                </div>

                <div class="form-group">
                <label for="valor">Valor:</label>
                    <p><?php echo $option['seguro_valor']?></p>
                </div>

                <button type="submit" class="btn">Deletar</button>
            </form>
        </div>
    </body>
</html>