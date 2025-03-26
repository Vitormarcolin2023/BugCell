<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Alterar planos</title>
    </head>

    <body>
        <div class="container">
            <form action="atuaplanos.php" method="post">
                <div class="form-group">
                    <label for="descricao">Plano:</label>
                        <select name="planos"required>
                            <option value="">Selecione um modelo</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT planos_cod, planos_descricao, planos_valor, planos_duracao FROM tb_planos ORDER BY planos_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['planos_cod']?>"><?php echo $option['planos_descricao']?></option>
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
                        placeholder="<?php echo $option['planos_descricao']?>" 
                        required>
                </div>

                <div class="form-group">
                <label for="duracao">Duração:</label>
                    <input 
                        type="text" 
                        id="duracao" 
                        name="duracao" 
                        placeholder="<?php echo $option['planos_descricao']?>" 
                        required>
                </div>

                <div class="form-group">
                <label for="valor">Valor:</label>
                    <input 
                        type="number" 
                        id="valor" 
                        name="valor" 
                        placeholder="<?php echo $option['planos_descricao']?>" 
                        required>
                </div>
                <button type="submit" class="btn">Atualizar</button>
            </form>
        </div>
    </body>
</html>