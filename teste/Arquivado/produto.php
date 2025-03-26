<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Produto</title>
    <link rel="stylesheet" href="styles.css" />
  </head>
  <body>
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
         <h1><?php echo $option['modelo_modelo']?></h1>
        <p>Marca: <span id="marca"><?php echo $option['modelo_marca']?></span></p>      
        <?php
         }
        ?>
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
      </div>
    </div>
  </body>
</html>
