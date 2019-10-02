<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Assets Managament</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/banner.php", array(
    'header' => "ASSET MANAGEMENT",
    'title' => 'Nossa filosofia de <br>investimento é simples: <br>buscar a excelência sempre.',
    'image' => "header-am.jpg",
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'Desde 1994, fazemos a gestão de fundos abertos com ampla plataforma de produtos <br>e rentabilidade comprovada. Somos reconhecidos pela expertise na gestão de fundos <br>de ação e multimercado, por nosso rigoroso gerenciamento de risco, além da <br>disciplina e fidelidade à filosofia de investimento.'
  ));
  ?>



  <?php
  includeFileWithVariables("inc/components/title-and-text.php", array(
    'superTitle' => 'Filosofia de Investimento',
    'title' => null,
    'cols' => array(
      array('content' => '
      <p>A fidelidade à nossa filosofia de atuação consolidou a posição do Opportunity entre as maiores gestoras do país, combinando confiança, integridade, resultados e longevidade. Nossa gestão se destaca nos seguintes aspectos:</p>
      <p>Qualidade do retorno - qualquer investimento deve ter sempre uma relação risco/retorno favorável, evitando-se investimentos com probabilidade, mesmo que baixa, de perda expressiva;</p>
      '),
      array('content' => '
      <p>Limites rígidos de alavancagem - a alavancagem é utilizada de forma selecionada, já que a prioridade é pela qualidade dos ativos, com retornos obtidos pela boa análise e seleção, além da simetria positiva das estratégias;</p>
      <p>Visão de longo prazo - buscamos ganhos de longo prazo, aceitando a volatilidade de curto prazo sempre dentro dos parâmetros de risco pré-estabelecidos.</p>
      '),
    ),
    'divider' => 'none'
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/panel.php", array(
    'title' => '<h1 class="header-title">Relatórios</h1>'
  ));
  ?>

  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->


  <!-- podcast js-->
  <script src="assets/js/podcast.js"></script>
  <!-- /podcast js-->

  <script>
    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu .nav-item.nav-link').on('click', function() {
      $(this).parent().parent().find('.dropdown-toggle').html($(this).html());
    });


    // Initialize Swiper Gallery Component

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