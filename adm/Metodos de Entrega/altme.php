<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Alterar Metodos de Entrega</title>
    </head>

    <body>
        <div class="container">
            <form action="atuame.php" method="post">
                <div class="form-group">
                    <label for="descricao">Alterar Metodos de Entrega:</label>
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
                    <input 
                        type="text" 
                        id="descricao" 
                        name="descricao" 
                        placeholder="<?php echo $option['me_descricao']?>" 
                        required>
                </div>
                <button type="submit" class="btn">Atualizar</button>
            </form>
        </div>
    </body>
</html>