<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Nome do Produto, Aluguel">
    <meta name="description" content="">
    <title>Samsung</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Página-Inicial.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 5.21.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/default-logo.png"
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-e6f4"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="http://localhost/BugCell/" style="padding: 10px 20px;">Página Inicial</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="http://localhost/BugCell/">Página Inicial</a>
</li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-54ad">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-10 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-col">
              <div class="u-size-60">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1" src="">
                    <div class="u-container-layout u-container-layout-1">
                      <img class="u-absolute-hcenter u-expanded-height u-image u-image-1" src="images/samsung1.webp" data-image-width="746" data-image-height="560">
                    </div>
                  </div>
                
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                      <?php
                        include("conexao.php");
                        $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo, modelo_marca FROM tb_modelos WHERE modelo_cod = 8");
                        $registro = $query;

                        foreach($registro as $option) {
                      ?>
                        <h2 class="u-text u-text-1"><?php echo $option['modelo_modelo']?></h2>
                        <h5 class="u-text u-text-2">Marca: <span id="marca"><?php echo $option['modelo_marca']?></span></h5>    
                      <?php
                        }
                      ?>
                      <h6 class="u-text u-text-3">Ficha Técnica:</h6>
                      <p class="u-text u-text-4"> Acabamento em vidro na parte traseira. Este celular vem equipado com o mais novo chipset da Qualcomm, o Snapdragon 8 Gen 1. O Galaxy S22 tem tela com taxas de adaptação variáveis entre 60 e 120 Hz. Bateria com  3.700 mAh.Suporte a carregamento rápido de 25 W. WiFi 6. </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <h2 class="u-text u-text-default u-text-5">Aluguel</h2>
        <form action="//localhost/BugCell/Alugue/php_banco/celular.php" method="post">
          <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-2">
            <div class="u-layout">
              <div class="u-layout-row">
                <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-3">
                  <div class="u-container-layout u-container-layout-3">
                    <p class="u-text u-text-6">Escolha um plano&nbsp;</p>
                    <select class="u-text u-text-default u-text-7" name="plano"required>
                      <option value="">Selecione um plano</option>
                      <?php
                        include("conexao.php");
                        $query = mysqli_query($conexao, "SELECT planos_cod, planos_modelocod, planos_descricao, planos_valor, planos_duracao FROM tb_planos WHERE planos_modelocod = 8");
                        $registro2 = $query;

                        foreach($registro2 as $option2) {
                      ?>
                        <option value="<?php echo $option2['planos_cod']?>"><?php echo $option2['planos_descricao']?></option>
                      <?php
                        }
                      ?>
                    </select>
                    <p class="u-text u-text-default u-text-8">Valor: <?php echo $option2['planos_valor']?><br>
                    </p>
                    <p class="u-text u-text-default u-text-9">Duração: <?php echo $option2['planos_duracao']?><br>
                    </p>
                    
                    <p class="u-text u-text-10">Escolha uma forma de Pagamento</p>
                    <select class="u-text u-text-11" name="fp"required>
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
                  </div>
                </div>

                <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-4">
                  <div class="u-container-layout u-valign-bottom u-container-layout-4">
                    <p class="u-text u-text-12">Escolha uma forma de Entrega</p>
                    <select class="u-text u-text-13" name="me" required>
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

                    <p class="u-align-left u-text u-text-14">Escolha um Seguro</p>
                    <select class="u-align-left u-text u-text-16" name="seguro"required>
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
                    <p class="u-text u-text-default u-text-18">Valor:<br>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </body>
</html>