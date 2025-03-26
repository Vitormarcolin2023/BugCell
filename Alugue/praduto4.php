<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Função php nome marca, Marca, Sample Headline">
    <meta name="description" content="">
    <title>Página Inicial</title>
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
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Página-Inicial.html" style="padding: 10px 20px;">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Sobre.html" style="padding: 10px 20px;">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="Contato.html" style="padding: 10px 20px;">Contato</a>
</li></ul>
          </div>
          <div class="u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Página-Inicial.html">Página Inicial</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Sobre.html">Sobre</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contato.html">Contato</a>
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
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-left-cell u-size-30 u-layout-cell-1" src="">
                    <div class="u-container-layout u-container-layout-1">
                      <img class="u-absolute-hcenter u-expanded-height u-image u-image-1" src="images/iphone1.webp" data-image-width="500" data-image-height="500">
                    </div>
                  </div>
                  <div class="u-align-left u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-2">
                    <?php
                      include("conexao.php");
                      $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo, modelo_marca FROM tb_modelos WHERE modelo_cod = 6");
                      $registro = $query;

                      foreach($registro as $option) {
                    ?>
                      <h2 class="u-text u-text-1"><?php echo $option['modelo_modelo']?></h2>
                      <h5 class="u-text u-text-2">Marca: <span id="marca"><?php echo $option['modelo_marca']?></span></h5>   
                    <?php
                      }
                    ?>
                      <p class="u-text u-text-3">ficha tecnica</p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-align-left u-container-style u-layout-cell u-left-cell u-size-60 u-layout-cell-3">
                    <div class="u-container-layout u-container-layout-3">
                      <h2 class="u-text u-text-4">Sample Headline</h2>
                      <p class="u-text u-text-5">Escolha um plano</p>
                      <select class="u-text u-text-5"><option value="">Selecione um plano</option>
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
                      <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <p class="u-text u-text-7">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double click to start editing the text.</p>
                      <a href="" class="u-btn u-btn-rectangle u-button-style u-palette-1-base u-btn-1">learn more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-927a"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1">Texto de Amostra. Clique para selecionar o Elemento de Texto.</p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
      <a class="u-link" href="https://nicepage.com/website-templates" target="_blank">
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span>
      </a>. 
    </section>
  
</body></html>