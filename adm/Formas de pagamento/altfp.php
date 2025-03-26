<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Alterar Formas de Pagamento</title>
    </head>

    <body>
        <div class="container">
            <form action="atuafp.php" method="post">
                <div class="form-group">
                    <label for="descricao">Alterar Formas de Pagamento:</label>
                        <select name="fp"required>
                            <option value="">Selecione uma forma</option>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT fp_cod, fp_descricao FROM tb_formasdepagamentos ORDER BY fp_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>
                                <option value="<?php echo $option['fp_cod']?>"><?php echo $option['fp_descricao']?></option>
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
                        placeholder="<?php echo $option['fp_descricao']?>" 
                        required>
                </div>
                <button type="submit" class="btn">Atualizar</button>
            </form>
        </div>
    </body>
</html>