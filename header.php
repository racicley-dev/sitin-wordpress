<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página Inicial</title>
  
  <!--<link rel="stylesheet" href="reset.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./styles/style.css">
  <link rel="shortcut icon" href="./assets/Logo.svg" type="image/x-icon">
  <link rel="stylesheet" href="./styles/swiper-bundle.css">
   Swiper JS 
  <script src="./scripts/swiper-bundle.min.js" defer></script>
   JavaScript 
  <script src="./scripts/script.js" defer></script>-->
  
  <?php wp_head(); ?>
</head>

<body>
  <header class="cabecalho s-header">
    <div class="largura-site-wide">
        <a href="/index.html" title="Link para página inicial">
            <img class="container__item" src="<? echo IMAGES_DIR ?>/Logo.svg" alt="Logo da IN JUNIOR">
        </a>
        <nav class="navegacao">
            <a href="/contato.html" class="link-orcamento">Orçamento Grátis</a>
            
            <input hidden aria-hidden type="checkbox" name="" id="menu">
            <label title="Botão do menu" for="menu" class="navegacao__botao">
                <span class="cabecalho__menu-hamburguer"></span>
            </label>
            <ul class="lista-menu">
                <li class="lista-menu__item">
                    <a class="lista-menu__link" href="./index.html">INÍCIO</a>
                </li>
                <li class="lista-menu__item">
                    <a class="lista-menu__link" href="./quem-somos.html">QUEM SOMOS</a>
                </li>
                <li class="lista-menu__item">
                    <a class="lista-menu__link" href="./contato.html">CONTATO</a>
                </li>
            </ul>
        </nav>
    </div>
</header>
<main>
