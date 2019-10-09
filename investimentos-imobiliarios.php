<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Investimentos Imobiliarios</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/banner.php", array(
    'header' => "INVESTIMENTOS IMOBILIÁRIOS",
    'title' => 'Mais do que projetos <br class="d-lg-none">imobiliários, <br class="d-none d-lg-block">construímos <br class="d-lg-none">oportunidades que <br>concretizam projetos <br class="d-lg-none">de vida.',
    'image' => "header-ii.jpg",
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'Além de consultoria e assessoria no <br class="d-lg-none">desenvolvimento de <br class="d-none d-lg-block">projetos <br class="d-lg-none">comerciais e residenciais, o <br class="d-lg-none">Opportunity investe em <br class="d-none d-lg-block">terrenos <br class="d-lg-none">para expansão e incorporação. <br class="d-lg-none">Também realiza <br class="d-none d-lg-block">locação e venda de <br class="d-lg-none">imóveis corporativos.',
    'space' => 'quem-somos'
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Fundo de Investimento <br>Imobiliário',
    'title' => '<h4>Desde 1996 o Opportunity Fundo de Investimento Imobiliário desenvolve produtos imobiliários com excelência, sendo responsável por diversos empreendimentos principalmente no Rio de Janeiro, Espírito Santo e Distrito Federal.<h4>',
    'text' => '<p class="mb-3">O foco de atuação está na análise, seleção e no desenvolvimento de projetos, além da locação e comercialização de imóveis próprios.</p> <a href="#" class="o-btn my-4 my-lg-0">OPPORTUNITY IMOBILIÁRIO</a>',
    'image' => 'imagem-fundo-invest-0@3x.jpg',
    'cols'  => 'image-text-long',
    'divider' => 'none pt-5 pt-lg-0 pb-0'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/swipe-gallery.php", array(
    'title' => '<h2 class="small">Conheça suas realizações e lançamentos</h2>',
    'row' => [
      ['assets/images/1.jpg', '', 'Aretê', '#', '', 'BÚZIOS - RJ'],
      ['assets/images/2.jpg', '', 'Highline Square', '#', '', 'VITÓRIA - ES'],
      ['assets/images/3.jpg', '', 'The Gallery Art Residence', '#', '', 'VITÓRIA - ES'],
      ['assets/images/4.jpg', '', 'Ícono Parque Residências', '#', '', 'RIO DE JANEIRO - RJ'],
    ],
    'divider' => 'bolder pt-0',
    'itemsPerColumn' => 1
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Desenvolvimento <br>Imobiliário',
    'title' => '<h4>Desde 2010 possuímos uma equipe dedicada a adquirir e estruturar grandes áreas com perfil turístico e potencial imobiliário<h4>',
    'text' => '<p>desenvolvendo projetos especiais que manifestam o que cada lugar tem de mais genuíno.</p>',
    'image' => 'imagem-fundo-invest-5@3x.jpg',
    'cols'  => 'text-image-full',
    'divider' => 'none mt-5 mt-lg-0 pb-0'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/swipe-gallery.php", array(
    'title' => null,
    'row' => [
      ['assets/images/1.jpg', '', 'Riserva Praia do Canto', '#', '', 'VITÓRIA - ES'],
      ['assets/images/2.jpg', '', 'Passeio Corporate', '#', '', 'RIO DE JANEIRO - RJ'],
      ['assets/images/3.jpg', '', 'Unity Center - Bayview', '#', '', 'RIO DE JANEIRO - RJ'],
      ['assets/images/4.jpg', '', 'Bella Tijuca', '#', '', 'RIO DE JANEIRO - RJ'],
    ],
    'divider' => 'none pb-5 pb-lg-4 pt-3 pt-lg-5',
    'itemsPerColumn' => 1
  ));
  ?>

  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->


  <!-- Initialize Swiper Gallery Component-->
  <script>
    $(".swiper-container").each(function(index, element) {
      var $this = $(this);
      var itemsPerColumn = $this.attr('data-items-per-column');
      var swiper = new Swiper(this, {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerColumn: itemsPerColumn,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
            slidesPerColumn: 1,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerColumn: 1,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
            simulateTouch: false
          },
        }
      });
    });
  </script>


</body>

</html>