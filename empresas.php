<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Empresas</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h1 class="header-title">Empresas</h1>',
    'suptitle' => '',
    'divider' => 'none',
    'type' => 'header',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'style' => 'small-font',
    'col_01' => [
      null, 'Opportunity <br class="d-block">Gestora de Recursos <br class="d-block">Ltda.', '<p>A empresa atua de forma especializada na gestão de planejamento patrimonial e de alocação em fundos de investimento, buscando proporcionar rentabilidade de longo prazo aos clientes. Os produtos geridos pela empresa são primordialmente fundos de investimento e carteiras administradas, com características de planejamento patrimonial e de alocação em fundos de investimento.</p>',
      '<ul class="list-with-links">
        <li><a href="#">Formulário de Referência</a></li>
        <li><a href="#">Política de Gestão de Risco</a></li>
        <li><a href="#">Política de Rateiro de ordens</a></li>
        <li><a href="#">Código de Ética</a></li>
        <li><a href="#">Manual de Controles Internos</a></li>
        <li><a href="#">Política de Invest. Pessoais</a></li>
        <li><a href="#">Manual de Política de Voto</a></li>
      </ul>'
    ],
    'col_02' => [
      null, 'Opportunity Asset<br class="d-block"> Administradora de <br class="d-block d-lg-none">Recursos <br class="d-none d-lg-block">de Terceiros <br class="d-block d-lg-none">Ltda.', '
    <p>A empresa atua de forma especializada na gestão de fundos de investimento com estratégia primordial em ações e derivativos de renda variável, através da seleção de ativos direcionais no Brasil e no exterior, com exposição de risco preponderante em ações, buscando proporcionar rentabilidade de longo prazo aos cotistas.</p>',
      '<ul class="list-with-links">
      <li><a href="#">Formulário de Referência</a></li>
      <li><a href="#">Política de Gestão de Risco</a></li>
      <li><a href="#">Política de Rateiro de ordens</a></li>
      <li><a href="#">Código de Ética</a></li>
      <li><a href="#">Manual de Controles Internos</a></li>
      <li><a href="#">Política de Invest. Pessoais</a></li>
      <li><a href="#">Manual de Política de Voto</a></li>
      </ul>'
    ],
    'col_03' => [
      null, 'Opportunity Gestão <br class="d-block d-lg-none">de <br class="d-none d-lg-block">Investimentos e <br class="d-block d-lg-none">Recursos <br class="d-none d-lg-block">Ltda.', '
    <p>A empresa atua de forma especializada na gestão de fundos de investimento com estratégia primordial em ações e derivativos de renda variável, através da seleção de ativos direcionais no Brasil e no exterior, com exposição de risco preponderante em ações, buscando proporcionar rentabilidade de longo prazo aos cotistas.</p>',
      '<ul class="list-with-links">
      <li><a href="#">Formulário de Referência</a></li>
      <li><a href="#">Política de Gestão de Risco</a></li>
      <li><a href="#">Política de Rateiro de ordens</a></li>
      <li><a href="#">Código de Ética</a></li>
      <li><a href="#">Manual de Controles Internos</a></li>
      <li><a href="#">Política de Invest. Pessoais</a></li>
      <li><a href="#">Manual de Política de Voto</a></li>
      </ul>'
    ],
    'divider' => 'simple'
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'style' => 'small-font',
    'col_01' => [
      null, 'Opportunity Private<br class="d-block d-lg-none"> Equity Gestora de <br class="d-block d-lg-none">Recursos <br class="d-none d-lg-block">Ltda.',
      '<p>A empresa atua de forma especializada na gestão de fundos de investimento estruturados, primordialmente de Fundo de Investimento em Participações, através da seleção de ativos no mercado brasileiro, buscando proporcionar rentabilidade de longo prazo aos cotistas.</p>',
      '<ul class="list-with-links">
      <li><a href="#">Formulário de Referência</a></li>
      <li><a href="#">Política de Gestão de Risco</a></li>
      <li><a href="#">Política de Rateiro de ordens</a></li>
      <li><a href="#">Código de Ética</a></li>
      <li><a href="#">Manual de Controles Internos</a></li>
      <li><a href="#">Política de Invest. Pessoais</a></li>
      <li><a href="#">Manual de Política de Voto</a></li>
      </ul>'
    ],
    'col_02' => [
      null, 'Opportunity <br class="d-block d-lg-none">Distribuidora <br class="d-none d-lg-block">de <br class="d-block d-lg-none">Títulos e Valores <br class="d-block">Mobiliários Ltda.', '
    <p>Fundada em 1996, a Opportunity DTVM é uma empresa de distribuição de fundos de investimento que tem por objetivo orientar seus clientes a alcançarem suas metas financeiras. Atuando primordialmente como distribuidora dos fundos de investimento geridos pelo Opportunity, a Opportunity DTVM é credenciada pela CVM e contratada diretamente pelos fundos para atuar na distribuição de cotas.</p>',
      '<ul class="list-with-links">
    <li><a href="#">Lista de Tarifas Aplicadas a</a></li>
    <li><a href="#">Política de Responsabilidade Socioambiental</a></li>
    <li><a href="#">Demosnt. Financeiras e Agentes Autônomos</a></li>
    <li><a href="#">Manual de Política de Voto</a></li>
    <li><a href="#">Política de Gerenciamento de Risco</a></li>
    </ul>'
    ],
    'col_03' => [
      null, 'Opportunity HDF <br class="d-block">Participações <br class="d-block">S.A.', '
    <p>A empresa está se reestruturando para atuar como administrador fiduciário de fundos de investimento, primordialmente estruturados, como fundos de investimento em participação, fundos de investimento imobiliário e fundos de investimento em direitos creditórios; podendo atuar como gestor de carteira dos fundos por ela administrados.</p>',
      '<ul class="list-with-links">
    <li><a href="#">Formulário de Referência</a></li>
    <li><a href="#">Política de Gestão de Risco</a></li>
    <li><a href="#">Política de Rateiro de ordens</a></li>
    <li><a href="#">Código de Ética</a></li>
    <li><a href="#">Manual de Controles Internos</a></li>
    <li><a href="#">Política de Invest. Pessoais</a></li>
    <li><a href="#">Manual de Política de Voto</a></li>
    </ul>'
    ],
    'divider' => 'none',
    'isLastBlock' => true,
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