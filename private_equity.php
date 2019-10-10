<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Private Equity</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>


  <?php
  includeFileWithVariables("inc/components/banner.php", array(
    'header' => "PRIVATE EQUITY",
    'title' => 'Pioneirismo que enxerga <span class="d-block d-md-inline-block d-lg-block">oportunidades e desenvolve potenciais</span> <span class="d-block d-md-inline-block d-lg-block">em diversos setores.</span>',
    'image' => "header-pe.jpg",
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'O Opportunity é um dos pioneiros da indústria de Private Equity no Brasil. Desde 1997, tem investido em empresas de capital fechado dos mais variados setores da economia, contribuindo para que desenvolvam o seu potencial de crescimento, aprimorem a sua performance e criem valor para os seus stakeholders.',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => '',
    'title' => '<h4>Com uma equipe multidisciplinar, atuamos tanto na gestão das empresas investidas quanto na busca contínua por novos negócios para o portfólio.<h4>',
    'text' => '<p>Nossa filosofia de investimento apoia-se em análises setoriais minuciosas, identificando assimetrias entre o valor e preço de empresas com elevado potencial de valorização, e também na gestão ativa de nosso portfólio, trabalhando junto com o management das companhias investidas para aumentar a produtividade, crescer o negócio e rentabilizar o capital investido.</p>
                 <p>Buscamos empresas diferenciadas, bem posicionadas em seus respectivos mercados e com elevado potencial de crescimento no longo prazo.</p>',
    'image' => 'text-and-image-01.png',
    'cols'  => 'image-text',
    'divider' => 'simple'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/text-and-numbers.php", array(
    'text' => '<p>Em parceria com investidores nacionais e internacionais, os fundos de Private Equity geridos pelo Opportunity já investiram em diversos setores como telecomunicações, energia, concessões portuárias e rodoviárias, mobilidade urbana, saneamento básico e mídia e entretenimento.</p>',
    'cols' => 'text-numbers',
    'numbers' => ['private-equity', 'Mais de', 'R$', '14 bi', 'em <span class="d-lg-block">fundos geridos </span>pelo Opportunity']
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/swipe-gallery.php", array(
    'title' => '<h2><span class="d-lg-block">Atualmente, o nosso portfólio engloba empresas líderes nos setores de Infraestrutura Portuária,</span> Óleo & Gás, <span class="d-block d-md-inline-block">Mineração e Agronegócio.</span></h2>',
    'row' => [
      ['assets/images/1.jpg', '', 'Santos Brasil', '#'],
      ['assets/images/2.jpg', '', 'Petroreconcavo', '#'],
      ['assets/images/3.jpg', '', 'Bemisa', '#'],
      ['assets/images/4.jpg', '', 'Agro SB', '#'],
    ],
    'divider' => 'none',
    'itemsPerColumn' => 1
  ));
  ?>


<?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h3>Investimentos Realizados</h3>',
    'divider' => 'simple',
  ));
  ?>
  

  <?php
  includeFileWithVariables("inc/components/swipe-gallery.php", array(
    'title' => '',
    'row' => [
      ['assets/images/5.jpg', '', '', '#', 'assets/images/h-5.png'],
      ['assets/images/6.jpg', '', '', '#', 'assets/images/h-6.png'],
      ['assets/images/7.jpg', '', '', '#', 'assets/images/h-7.png'],
      ['assets/images/8.jpg', '', '', '#', 'assets/images/h-8.png'],
      ['assets/images/9.jpg', '', '', '#', 'assets/images/h-9.png'],
      ['assets/images/10.jpg', '', '', '#', 'assets/images/h-10.png'],
      ['assets/images/11.jpg', '', '', '#', 'assets/images/h-11.png'],
      ['assets/images/12.jpg', '', '', '#', 'assets/images/h-12.png']
    ],
    'divider' => 'none pb-0',
    'itemsPerColumn' => 2
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