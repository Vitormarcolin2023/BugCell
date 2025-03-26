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
                    <label for="descricao">Alugues:</label>
                        <table border="1" class="tabela">
                            <thead>
                                <tr>
                                    <th>Nome do Cliente</th>
                                    <th>Plano Escolhido</th>
                                    <th>Valor do Plano</th>
                                    <th>Duração do Plano</th>
                                    <th>Data da Realização do Aluguel</th>
                                    <th>Método de Entrega</th>
                                    <th>Forma de Pagamento</th>
                                    <th>Seguro</th>
                                    <th>Valor do Seguro</th>
                                    <th>Valor total do Pedido</th>
                                </tr>
                            </thead>
                            <?php
                                include("conexao.php");
                                session_start();

                                $cpf = $_SESSION['login_user'];

                                $query = mysqli_query($conexao, "SELECT
                                    `tb_aluguel`.`aluguel_cod`,
                                    `tb_aluguel`.`aluguel_datarealizada`,
                                    (SELECT CONCAT(`cli_nome`, ' ', `cli_sobrenome`) FROM `bugcll`.`tb_clientes` WHERE `cli_cpf` = `tb_aluguel`.`aluguel_clicpf`) AS `NomeCliente`,
                                    (SELECT `planos_descricao` FROM `bugcll`.`tb_planos` WHERE `planos_cod` = `tb_aluguel`.`aluguel_planoscod`) AS `DescricaoPlano`,
                                    (SELECT `planos_valor` FROM `bugcll`.`tb_planos` WHERE `planos_cod` = `tb_aluguel`.`aluguel_planoscod`) AS `ValorPlano`,
                                    (SELECT `planos_duracao` FROM `bugcll`.`tb_planos` WHERE `planos_cod` = `tb_aluguel`.`aluguel_planoscod`) AS `DuracaoPlano`,
                                    (SELECT `me_descricao` FROM `bugcll`.`tb_metodosdeentregas` WHERE `me_cod` = `tb_aluguel`.`aluguel_mecod`) AS `MetodoEntrega`,
                                    (SELECT `fp_descricao` FROM `bugcll`.`tb_formasdepagamentos` WHERE `fp_cod` = `tb_aluguel`.`aluguel_fpcod`) AS `FormaPagamento`,
                                    (SELECT `seguro_descricao` FROM `bugcll`.`tb_seguro` WHERE `seguro_cod` = `tb_aluguel`.`aluguel_segurocod`) AS `DescricaoSeguro`,
                                    (SELECT `seguro_valor` FROM `bugcll`.`tb_seguro` WHERE `seguro_cod` = `tb_aluguel`.`aluguel_segurocod`) AS `ValorSeguro`,
                                    (`tb_planos`.`planos_valor` + `tb_seguro`.`seguro_valor`) AS 'total_valor'
                                FROM
                                    `bugcll`.`tb_aluguel`
                                    JOIN `bugcll`.`tb_planos` ON `tb_aluguel`.`aluguel_planoscod` = `tb_planos`.`planos_cod`
                                    JOIN `bugcll`.`tb_seguro` ON `tb_aluguel`.`aluguel_segurocod` = `tb_seguro`.`seguro_cod`
                                WHERE `tb_aluguel`.`aluguel_clicpf` = '$cpf';");
                                $registro = $query;

                                foreach($registro as $option) {
                                    
                            ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $option['NomeCliente']?></td>
                                            <td><?php echo $option['DescricaoPlano']?></td>
                                            <td>R$<?php echo $option['ValorPlano']?></td>
                                            <td><?php echo $option['DuracaoPlano']?></td>
                                            <td><?php echo $option['aluguel_datarealizada']?></td>
                                            <td><?php echo $option['MetodoEntrega']?></td>
                                            <td><?php echo $option['FormaPagamento']?></td>
                                            <td><?php echo $option['DescricaoSeguro']?></td>
                                            <td>R$<?php echo $option['ValorSeguro']?></td>
                                            <td>R$<?php echo $option['total_valor']?></td>
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