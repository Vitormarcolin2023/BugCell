<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Deletar Modelos</title>
    </head>

    <body>
        <div class="container">
            <form action="deletacao.php" method="post">
                <div class="form-group">
                    <label for="descricao">Modelo:</label>
                        <select name="modelos"required>
                            <option value="">Selecione um modelo</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo, modelo_marca FROM tb_modelos ORDER BY modelo_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['modelo_cod']?>"><?php echo $option['modelo_modelo']?></option>
                                    <?php
                                }
                            ?>
                        </select>
                </div>

                <div class="form-group">
                <label for="modelo">Modelo:</label>
                    <p><?php echo $option['modelo_modelo']?></p>
                </div>

                <div class="form-group">
                <label for="marca">Marca:</label>
                    <p><?php echo $option['modelo_marca']?></p>
                </div>
                <button type="submit" class="btn">Deletar</button>
            </form>
        </div>
    </body>
</html>