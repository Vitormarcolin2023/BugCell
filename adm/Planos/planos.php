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
                <h2>Cadastro de Planos</h2>
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
                        placeholder="Digite a Descrição" 
                        required>
                </div>

                <div class="form-group">
                <label for="duracao">Duração:</label>
                    <input 
                        type="text" 
                        id="duracao" 
                        name="duracao" 
                        placeholder="Digite a duração" 
                        required>
                </div>

                <div class="form-group">
                <label for="valor">Valor:</label>
                    <input 
                        type="number" 
                        id="valor" 
                        name="valor" 
                        placeholder="Digite o valor" 
                        required>
                </div>

                <button type="submit" class="btn">Cadastrar</button>
            </form>
        </div>
    </body>
</html>