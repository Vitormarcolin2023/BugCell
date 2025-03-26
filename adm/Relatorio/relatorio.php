<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css" />
        <title>Relatorio</title>
    </head>

    <body>
        <div class="container">
            <form>
                <div class="form-group">
                    <label for="descricao">Modelo Cadastrados:</label>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT modelo_modelo FROM tb_modelos ORDER BY modelo_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>  
                                <p><?php echo $option['modelo_modelo']?></p>
                                    <?php
                                }
                            ?>
                </div>

                <div class="form-group">
                    <label for="descricao">Planos Cadastrados:</label>
                                <?php
                                    include("conexao.php");
                                    $query = mysqli_query($conexao, "SELECT planos_descricao FROM tb_planos ORDER BY planos_modelocod ASC");
                                    $registro2 = $query;

                                    foreach($registro2 as $option2) {
                                ?>  
                                   <p><?php echo $option2['planos_descricao']?></p>
                                        <?php
                                    }
                                ?>
                </div>

                <div class="form-group">
                    <label for="descricao">Formas de Pagamento Cadastrados:</label>
                                <?php
                                    include("conexao.php");
                                    $query = mysqli_query($conexao, "SELECT fp_descricao FROM tb_formasdepagamentos ORDER BY fp_cod ASC");
                                    $registro3 = $query;

                                    foreach($registro3 as $option3) {
                                ?>  
                                   <p><?php echo $option3['fp_descricao']?></p>
                                        <?php
                                    }
                                ?>
                </div>

                <div class="form-group">
                    <label for="descricao">Metodos de Entrega Cadastrados:</label>
                                <?php
                                    include("conexao.php");
                                    $query = mysqli_query($conexao, "SELECT me_descricao FROM tb_metodosdeentregas ORDER BY me_cod ASC");
                                    $registro4 = $query;

                                    foreach($registro4 as $option4) {
                                ?>  
                                   <p><?php echo $option4['me_descricao']?></p>
                                        <?php
                                    }
                                ?>
                </div>

                <div class="form-group">
                    <label for="descricao">Seguro Cadastrados:</label>
                                <?php
                                    include("conexao.php");
                                    $query = mysqli_query($conexao, "SELECT seguro_descricao FROM tb_seguro ORDER BY seguro_cod ASC");
                                    $registro5 = $query;

                                    foreach($registro5 as $option5) {
                                ?>  
                                   <p><?php echo $option5['seguro_descricao']?></p>
                                        <?php
                                    }
                                ?>
                </div>
            </form>
        </div>
    </body>
</html>