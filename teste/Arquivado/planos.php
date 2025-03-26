<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Cadastro de Planos</title>
    </head>

    <body>
        <div class="container">
            <form action="cadplanos.php" method="post">
                <div class="form-group">
                    <label for="descricao">Descrição:</label>
                        <select name="planos"required>
                            <option value="">Selecione um modelo</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo FROM tb_modelos ORDER BY modelo_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['modelo_cod']?>"><?php echo $option['modelo_modelo']?></option>
                                <label for="descricao"><?php echo $option['modelo_modelo']?></label>
                                <input type="text" id="descricao" name="descricao" placeholder="<?php echo $option['modelo_modelo']?>" required />
                                    <?php
                                }
                            ?>
                        </select>
                </div>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </div>
    </body>
</html>