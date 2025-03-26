<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style2.css" />
        <title>Relatorio</title>
    </head>

    <body>
        <div class="container">
            <form>
                <div class="form-group">
                        <table border="1" class="tabela">
                            <thead>
                                <tr>
                                    <th>Descrissão do plano</th>
                                    <th>Valor do plano</th>
                                </tr>
                            </thead>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT planos_descricao, planos_valor FROM tb_planos ORDER BY planos_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>  
                                    <tbody>
                                        <tr>
                                            <td><?php echo $option['planos_descricao']?></td>
                                            <td><?php echo $option['planos_valor']?></td>
                                        </tr>
                                    </tbody>
                            
                                    <?php
                                }
                            ?>

                            <thead>
                                <tr>
                                    <th>Descrissão Seguro</th>
                                    <th>Valor do seguro</th>
                                </tr>
                            </thead>
                            <?php
                                include("conexao.php");
                                $query = mysqli_query($conexao, "SELECT seguro_descricao, seguro_valor FROM tb_seguro ORDER BY seguro_cod ASC");
                                $registro = $query;

                                foreach($registro as $option) {
                            ?>  
                                    <tbody>
                                        <tr>
                                            <td><?php echo $option['seguro_descricao']?></td>
                                            <td><?php echo $option['seguro_valor']?></td>
                                        </tr>
                                    </tbody>
                            
                                    <?php
                                }
                            ?>
                        </table>
                </div>
            </form>
        </div>
    </body>
</html>