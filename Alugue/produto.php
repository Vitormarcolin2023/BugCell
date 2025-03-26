<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produto</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
  <form action="../Alugue/php_banco/celular2.php" method="post">
      <div class="product-container">
        <div class="product-image">
          <img src="../fotosCell/iphone1.webp" />
        </div>
        <div class="product-details">
        <?php
          include("conexao.php");
          $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo, modelo_marca FROM tb_modelos WHERE modelo_cod = 6");
          $registro = $query;

          foreach($registro as $option) {
          ?>
          <h4><?php echo $option['modelo_modelo']?></h4>
          <p>Marca: <span id="marca"><?php echo $option['modelo_marca']?></span></p>      
          <?php
          }
          ?>

          </div>
          
          <label>Escolha um plano</label>
          <select name="plano"required>
              <option value="">Selecione um plano</option>
              <?php
                include("conexao.php");
                $query = mysqli_query($conexao, "SELECT planos_cod, planos_modelocod, planos_descricao, planos_valor, planos_duracao FROM tb_planos WHERE planos_modelocod = 6");
                $registro2 = $query;

                foreach($registro2 as $option2) {
              ?>
                <option value="<?php echo $option2['planos_cod']?>"><?php echo $option2['planos_descricao']?></option>
              <?php
              }
              ?>
          </select>


          <br><br>
          <label for="Valor">Valor: <?php echo $option2['planos_valor']?></label>
          <br><br>
          <label for="Duracao">Duração: <?php echo $option2['planos_duracao']?></label>
            
            <br><br><br>
            <label>Escolha uma forma de pagamento</label>
            <select name="me"required>
                <option value="">Selecione uma entrega</option>
                <?php
                include("conexao.php");
                $query = mysqli_query($conexao, "SELECT me_cod, me_descricao FROM tb_metodosdeentregas ORDER BY me_cod ASC");
                $registro3 = $query;

                foreach($registro3 as $option3) {
              ?>
                <option value="<?php echo $option3['me_cod']?>"><?php echo $option3['me_descricao']?></option>
              <?php
              }
              ?>
          </select>
        </div>

        <div>
          <label>Escolha uma Forma de Pagamento</label>
            <select name="fp"required>
                <option value="">Selecione um pagamento</option>
                <?php
                  include("conexao.php");
                  $query = mysqli_query($conexao, "SELECT fp_cod, fp_descricao FROM tb_formasdepagamentos ORDER BY fp_cod ASC");
                  $registro4 = $query;

                  foreach($registro4 as $option4) {
                ?>
                  <option value="<?php echo $option4['fp_cod']?>"><?php echo $option4['fp_descricao']?></option>
                <?php
                }
                ?>
            </select>

            <br><br>
            <label>Escolha um Seguro
            </label>
            <select name="seguro"required>
                <option value="">Selecione um seguro</option>
                <?php
                  include("conexao.php");
                  $query = mysqli_query($conexao, "SELECT seguro_cod, seguro_descricao FROM tb_seguro ORDER BY seguro_cod ASC");
                  $registro5 = $query;

                  foreach($registro5 as $option5) {
                ?>
                  <option value="<?php echo $option5['seguro_cod']?>"><?php echo $option5['seguro_descricao']?></option>
                <?php
                }
                ?>
            </select>
        </div>

        <button type="submit" class="btn">Alugar</button>
      </div>
    </form>
  </body>
</html>
