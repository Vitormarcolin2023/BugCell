<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Deletar Plano</title>
    </head>

    <body>
        <div class="container">
            <form action="deletacao.php" method="post">
                <div class="form-group">
                    <label for="descricao">Plano:</label>
                        <select name="planos"required>
                            <option value="">Selecione um plano</option>
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
                    <p><?php echo $option['planos_descricao']?></p>
                </div>

                <div class="form-group">
                <label for="duracao">Duração:</label>
                <p><?php echo $option['planos_duracao']?></p>
                </div>

                <div class="form-group">
                <label for="valor">Valor:</label>
                    <p><?php echo $option['planos_valor']?></p>
                </div>
                <button type="submit" class="btn">Deletar</button>
            </form>
        </div>
    </body>
</html>