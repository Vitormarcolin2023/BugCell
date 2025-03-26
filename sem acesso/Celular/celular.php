<?php
  include("conexao.php");
  $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo FROM tb_modelos WHERE modelo_cod = 6");
  $registro = $query;

  foreach($registro as $option) {
  }

  $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo FROM tb_modelos WHERE modelo_cod = 8");
  $registro2 = $query;

  foreach($registro2 as $option2) {
  }

  $query = mysqli_query($conexao, "SELECT modelo_cod, modelo_modelo FROM tb_modelos WHERE modelo_cod = 10");
  $registro3 = $query;

  foreach($registro3 as $option3) {
  }
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Modelos</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Página-1.css" media="screen">
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
    <meta property="og:title" content="Página 1">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="pt"><header class="u-clearfix u-header u-header" id="sec-e6f4"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="https://nicepage.com" class="u-image u-logo u-image-1">
          <img src="images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
</li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
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
    <section class="u-clearfix u-section-1" id="sec-a36d">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="data-layout-selected u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-round u-preserve-proportions u-radius-10 u-image-1" src="images/iphone1.webp" alt="" data-image-width="500" data-image-height="500">
                  <a href="http://localhost/BugCell/sem%20acesso/modelo/apple.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-50 u-btn-1"><?php echo $option['modelo_modelo']?></a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <img class="u-image u-image-contain u-image-round u-radius-10 u-image-2" src="images/samsung1.webp" alt="" data-image-width="746" data-image-height="560">
                  <a href="http://localhost/BugCell/sem%20acesso/modelo/samsung.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-50 u-btn-2"><?php echo $option2['modelo_modelo']?></a>
                </div>
              </div>
              <div class="u-container-style u-layout-cell u-size-20 u-layout-cell-3">
                <div class="u-container-layout u-container-layout-3">
                  <img class="u-image u-image-contain u-image-round u-preserve-proportions u-radius-10 u-image-3" src="images/moto.jpg" alt="" data-image-width="500" data-image-height="500">
                  <a href="http://localhost/BugCell/sem%20acesso/modelo/moto.php" class="u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-light-1 u-palette-2-base u-radius-50 u-btn-3"><?php echo $option3['modelo_modelo']?></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
</body></html>