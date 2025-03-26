<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Alterar Seguro</title>
    </head>

    <body>
        <div class="container">
            <form action="atuaseguro.php" method="post">
                <div class="form-group">
                    <label for="descricao">Alterar Seguro:</label>
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
                    <input 
                        type="text" 
                        id="descricao" 
                        name="descricao" 
                        placeholder="<?php echo $option['seguro_descricao']?>" 
                        required>
                </div>
                <div class="form-group">
                    <label for="valor">Valor:</label>
                    <input
                        type="number"
                        id="valor"
                        name="valor"
                        placeholder="<?php echo $option['seguro_valor']?>"
                        required
                    />
                </div>
                <button type="submit" class="btn">Atualizar</button>
            </form>
        </div>
    </body>
</html>