<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Quem Somos</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>


  <?php
  includeFileWithVariables("inc/components/banner.php", array(
    'header' => "QUEM SOMOS",
    'title' => 'Uma história marcada pela vanguarda, excelência e protagonismo no mercado financeiro brasileiro.',
    'image' => "header-qs.jpg",
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'Fundado em 1994 por <a href="#">Daniel Dantas</a> e <a href="#">Dorio Ferman</a>, o Opportunity é uma das primeiras e maiores empresas de gestão de recursos e pioneira na indústria brasileira de fundos de investimento.',
    'space' => 'quem-somos'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => '',
    'title' => '<h4>Fomos um dos primeiros gestores de fundos de Private Equity do país, com atuação determinante nas privatizações da década de 90.<h4>',
    'text' => '<p>Inauguramos o mercado de investimentos no exterior e participamos ativamente das discussões regulatórias para aprimorar e dar mais segurança e transparência aos investidores brasileiros.  </p>
    <p>Nossas áreas de atuação incluem investimentos em fundos de ação, renda-fixa, multimercado, retorno absoluto e previdência - <a href="#">Asset Management</a>, investimentos em empresas privadas de diferentes setores - Private Equity e desenvolvimento de empreendimentos imobiliários - Investimentos Imobiliários. </p>
    <p>Além do foco em investimentos, também assessoramos nossos clientes na profissionalização da gestão de seus patrimônios Wealth Management.</p>
    <p>Nosso longo histórico de sucesso e solidez reforça nossa capacidade e competência de sobreviver em um mercado tão competitivo, que busca constantemente o maior retorno para seus clientes. </p>',
    'image' => 'text-and-image-04.jpg',
    'cols'  => 'text-long-image',
    'divider' => 'bolder'
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'size_column' => '3',

    'col_01' => [null, 'Asset <br>Management', '
    <h4 class="mb-4">Gestão de fundos de ação, renda-fixa, multimercado, retorno absoluto e previdência.</h4>
    <p>Expertise em renda variável e multimercados, com um dos track records mais longos do Brasil.</p>'],

    'col_02' => [null, 'Private <br>Equity', '
    <h4 class="mb-4">Aquisição de novas empresas e desenvolvimento de novos negócios.</h4>
    <p>Gestão das empresas investidas e busca por novos negócios. O portfólio inclui companhias líderes em Infraestrutura Portuária, Óleo & Gás, Mineração e Agribusiness.</p>'],

    'col_03' => [null, 'Investimentos <br>Imobiliários', '
    <h4 class="mb-4">Empreendimentos imobiliários ao longo de todo o território nacional. </h4>
    <p>Realização de empreendimentos imobiliários para locação e venda em áreas urbanas, e desenvolvimento de projetos com perfil turístico e de longo prazo.</p>'],

    'col_04' => [null, 'Wealth <br>Management', '
    <h4 class="mb-4">Assessoria na gestão de patrimônio. </h4>
    <p>Atuação com foco na preservação do patrimônio dos clientes e de suas futuras gerações, buscando os melhores investimentos no Brasil e no exterior.</p>'],

    'divider' => 'none',
  ));
  ?>



  <?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h3>EQUIPE OPPORTUNITY</h3>',
    'divider' => 'simple',
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'size_column' => '3',

    'col_01' => ['01.',  null, '
    <p>Buscamos o aprimoramento constante de uma equipe altamente qualificada para encontrar e construir as melhores oportunidades de investimento para nossos clientes em todas as unidades de negócio.</p>'],

    'col_02' => ['02.', null, '
    <p>Temos um dos mais tradicionais e conceituados programas de estágio no Brasil - o Opportunity SIM - favorecendo o recrutamento dos melhores talentos das melhores universidades. </p>
    <p>Formamos nossos futuros sócios por meio de treinamentos internos intensivos em um ambiente altamente meritocrático. </p>'],

    'col_03' => ['03.', null, '
    <p>Estrutura de compensação centrada em remuneração variável, baseada em avaliações semestrais e atrelada ao desempenho.</p>
    <p>Todos que trabalham no Opportunity investem seus próprios recursos nos mesmos fundos que os clientes, garantindo um verdadeiro alinhamento de interesses.</p>'],

    'col_04' => ['04.', null, '
    <p>Com o suporte de uma equipe jurídica, de operações e compliance extremamente qualificadas, nossa equipe de análise e gestão consegue focar exclusivamente na busca pela excelência e na performance dos negócios.</p>'],

    'divider' => 'none',
    'side_by_side' => true
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