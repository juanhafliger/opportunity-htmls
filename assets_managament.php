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
    'title' => 'Nossa filosofia de <br>investimento é simples: <br>buscar a excelência <br class="d-block d-lg-none">sempre.',
    'image' => "header-am.jpg",
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'Desde 1994, fazemos a gestão de <br class="d-block d-lg-none">fundos abertos com ampla <br class="d-block d-lg-none">plataforma de produtos <br class="d-none d-lg-block">e <br class="d-block d-lg-none">rentabilidade comprovada. Somos <br class="d-block d-lg-none">reconhecidos pela expertise na <br class="d-block d-lg-none">gestão de fundos <br class="d-none d-lg-block">de ação e <br class="d-block d-lg-none">multimercado, por nosso rigoroso <br class="d-block d-lg-none">gerenciamento de risco, além da <br class="d-none d-lg-block"><br class="d-block d-lg-none">disciplina e fidelidade à filosofia de <br class="d-block d-lg-none">investimento.'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/title-and-text.php", array(
    'superTitle' => null,
    'title' => null,
    'cols' => array(
      array('content' => '<h3 class="color-black">Investimos continuamente para ser um motor inteligente, capaz de enxergar além e antecipar cenários.</h3>'),
      array('content' => '
      <p>O objetivo é sempre a excelência, buscando a maior valorização possível para os recursos dos investidores, sempre dentro de rígidos parâmetros de risco previamente definidos.</p>
      <a href="#" class="o-btn">FUNDOS e RENTABILIDADE</a>'),
    ),
    'divider' => 'bolder',
    'colNumber' => '5-7'
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/title-and-text.php", array(
    'superTitle' => 'Filosofia de Investimento',
    'title' => null,
    'cols' => array(
      array('content' => '
      <p class="font-size-20">A fidelidade à nossa filosofia de atuação consolidou a posição do Opportunity entre as maiores gestoras do país, combinando confiança, integridade, resultados e longevidade. Nossa gestão se destaca nos seguintes aspectos:</p>
      <p class="font-size-20">Qualidade do retorno - qualquer investimento deve ter sempre uma relação risco/retorno favorável, evitando-se investimentos com probabilidade, mesmo que baixa, de perda expressiva;</p>
      '),
      array('content' => '
      <p class="font-size-20">Limites rígidos de alavancagem - a alavancagem é utilizada de forma selecionada, já que a prioridade é pela qualidade dos ativos, com retornos obtidos pela boa análise e seleção, além da simetria positiva das estratégias;</p>
      <p class="font-size-20">Visão de longo prazo - buscamos ganhos de longo prazo, aceitando a volatilidade de curto prazo sempre dentro dos parâmetros de risco pré-estabelecidos.</p>
      '),
    ),
    'divider' => 'none',
    'classHelper' => 'pb-0'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/panel-assets.php", array(
    'classHelper' => 'divider-bottom-bolder',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Conceito de <br class="d-lg-none">Risco',
    'title' => '<h4>O nosso negócio não é simplesmente correr risco para obter retorno. Isto não é negócio, é uma alternativa disponível para qualquer um. Buscamos encontrar oportunidades onde as relações entre retorno e risco sejam superiores às usuais.<h4>',
    'text' => '
    <p>Sempre acreditamos na necessidade de uma postura mais simples e cuidadosa de análise de risco, estudando com profundidade os fundamentos e não confiando, unicamente, em modelos matemáticos formais, como as medidas de value-at-risk, por exemplo. Ao longo dos anos, fomos nos diferenciando de boa parte do mercado financeiro justamente por questionar a suficiência dos modelos normalmente utilizados. </p>
    <p>O principal cuidado deve estar na observação crítica de suas premissas, principalmente na hipótese da estabilidade do gerador de dados que estes costumam utilizar. </p>
    <p>Por isso, no Opportunity, as mudanças radicais e súbitas na conjuntura econômica que causam “cenários de estresse” são sempre avaliadas, projetadas e consideradas até a exaustão. Por mais improváveis que pareçam.</p>
    ',
    'image' => 'text-and-image-05.jpg',
    'cols'  => 'image-text-long',
    'divider' => 'simple'
  ));
  ?>

  <div class="container-fluid">
    <div class="container divider-bolder-cp-list-blocks-container">
      <div class="row">
        <div class="col-12">
          <?php
          includeFileWithVariables("inc/components/list-blocks.php", array(
            'items' => array(
              array('number' => '01.', 'text' => 'A promessa de rentabilidade sem risco não é crível. Investimentos precisam ser feitos com responsabilidade, mesmo que aparentes oportunidades de ganho fácil passem à nossa frente.'),
              array('number' => '02.', 'text' => 'Podemos conviver com uma volatilidade maior, desde que a proposição do investimento continue favorável e o risco nos pareça adequado.'),
              array('number' => '03.', 'text' => 'Fazemos projeções dos investimentos em situações de adversidade extrema com o objetivo de analisar se o risco é ou não adequado.'),
              array('number' => '04.', 'text' => 'Modelos de risco podem transmitir uma sensação de segurança aparentemente confortável, porém inadequada e falsa.'),
              array('number' => '05.', 'text' => 'Avaliamos os investimentos pelas premissas e não pelo resultado.'),
              array('number' => '06.', 'text' => 'Lembramos que baixa volatilidade não significa baixo risco.'),
              array('number' => '07.', 'text' => 'Sabemos conviver com o risco. Desde que seja dentro dos parâmetros previamente definidos.'),
              array('number' => '08.', 'text' => 'É fundamental a identificação do risco corrido: o risco de ruína é inaceitável. '),
              array('number' => '09.', 'text' => 'Compreendemos que volatilidade e correlações passadas não necessariamente se repetem no futuro.'),
              array('number' => '10.', 'text' => 'Focamos no risco de mercado em detrimento ao risco de crédito.'),

            )
          ));
          ?>
        </div>
      </div>
    </div>
  </div>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Controle de Risco',
    'title' => '<h4 class="pb-3">Nossa área de risco tem como objetivo fiscalizar o mandato de gestão concedido ao Opportunity pelos clientes e garantir que a filosofia de investimento da empresa seja cumprida.<h4>',
    'text' => '
    <p>Ela está integrada à mesa de operações, mas ao mesmo tempo é independente, respondendo hierarquicamente à diretoria segregada. </p>
    <p>São efetuados diferentes tipos de controles nos portfólios, privilegiando-se a simplicidade aliada ao bom senso. Os principais são os de alavancagem, exposição a mercados, capital aplicado em renda variável e limites de perdas, feitos na continuidade e na ruptura de cenários macroeconômicos. </p>
    ',
    'image' => 'text-and-image-06.jpg',
    'cols'  => 'text-long-image',
    'divider' => 'none pb-4',
    'classHelper' => 'pr-lg-4',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/panel-assets.php", array(
    'classHelper' => 'divider-bottom-bolder',
    'panelNumber' => "2",
    'item' => 157
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Nossa Visão de Risco',
    'title' => '<h4>Os métodos tradicionalmente utilizados para a avaliação de risco de investimentos, assim como de fundos, têm a sua eficiência questionada no Opportunity há bastante tempo.<h4>',
    'text' => '
    <p>São inúmeros os eventos que mostram claramente as deficiências destes métodos ao longo dos últimos anos, desde a quebra do mais famoso hedge fund dos EUA em 1998 até a ruína dos bancos de investimento de Wall Street em 2008, passando por vários casos de perdas irreversíveis – inclusive de fundos brasileiros. </p>
    <p>Normalmente, o objetivo da maior parte dos modelos de risco é inferir sobre o futuro com base no passado, encontrando relações matemáticas entre diferentes variáveis. Para tal, usa-se certas premissas que, em teoria, tornariam possível a obtenção de parâmetros de risco confiáveis. Porém, mais do que conhecimento matemático, é necessário que se tenha extremo cuidado para avaliar se tais premissas são razoáveis.</p>
    ',
    'extraContent' => ' <p>Nossa visão é que a maioria dos modelos de risco se baseia firmemente em premissas muito fortes, das quais se destaca a estabilidade no modo de comportamento dos ativos ao longo do tempo. Considerar a imutabilidade nas regras do universo analisado é um erro muito comum no meio financeiro. </p>
    <p class="mb-0">Não se deve esquecer que mudanças de cenário fazem com que as relações entre as variáveis econômicas também sofram modificações, pondo em dúvida, assim, a estabilidade das leis do universo analisado. Por isto, confiar cegamente nestes modelos – que costumam impressionar pela sua sofisticação – pode ser extremamente perigoso. </p>',
    'image' => 'text-and-image-07.jpg',
    'cols'  => 'image-text-long',
    'divider' => 'none pb-5'
  ));
  ?>
  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => null,
    'title' => '<h4>Muitas vezes, ganhos podem ocorrer devido a realizações favoráveis de eventos aleatórios. No caso, os modelos de risco podem dar a falsa impressão de que estes ganhos ocorreram devido a posições responsáveis e inteligentes.<h4>',
    'text' => '
    <p>Na verdade, estas podem ter sido realizações favoráveis de posições insensatas, com grande probabilidade de pequenos ganhos, mas com possibilidade, mesmo que pequena, de grandes perdas. </p>
    <p>Em geral, estratégias que buscam minimizar o risco sem sacrificar os ganhos, através de operações de hedge com alavancagem, são, em finanças, análogas aos modelos “moto-contínuos” da Física. Enganadoras e pouco úteis, deveriam servir somente como curiosidade ou ilustração. A verdade é que a promessa de alta rentabilidade com pouco risco no curto prazo, infelizmente, não nos parece possível. </p>
    ',
    'extraContent' => '
    <p>É importante ter em mente que o risco é inevitável; o importante, mesmo que seja difícil, é aprender a conviver conscientemente com ele. O que não podemos aceitar, isto sim, é o risco de ruína. Não é raro que o uso excessivo da alavancagem faça com que posições com grande esperança de ganho no longo prazo não resistam às variações do curto prazo. Desta forma, é essencial que sejam evitadas, pois poderiam resultar em significativas perdas patrimoniais não visíveis inicialmente. </p>
    <p class="mb-0">Tão importante quanto calcular medidas como o value at risk de um investimento é avaliá-lo em situações de adversidade extrema. Os chamados “cenários de estresse” devem ser projetados sempre, por mais improváveis que pareçam. Mudanças radicais e súbitas na conjuntura econômica, tanto no âmbito interno quanto externo, devem ser sempre consideradas até a exaustão. Isto é tudo o que pode, e deve, ser feito. </p>',
    'image' => 'text-and-image-08.jpg',
    'cols'  => 'text-long-image',
    'divider' => 'none pt-0 pb-5'
  ));
  ?>
  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => null,
    'title' => '<h4>O que decorre disto tudo é que, ao analisar o retorno passado de um fundo, é essencial ter em mente que uma volatilidade historicamente baixa não implica, de maneira alguma, baixo risco.<h4>',
    'text' => '
    <p>A baixa volatilidade das cotas de um fundo, assim como a constância de ganhos, pode esconder riscos terríveis, tais como investimentos em ativos duvidosos, operações assimétricas ou até mesmo fraudes inimagináveis, privando o investidor de uma avaliação real do risco de sofrer um grande prejuízo ou até terminar em ruína. </p>
    <p>Assim, nosso dever como gestor é evitar a alavancagem excessiva e resistir às tentações de buscar, na complexidade, ganhos aparentemente fáceis. Nossa filosofia de trabalho é o cuidado, mesmo que aparentes oportunidades de ganho fácil passem à nossa frente. Devemos ser pacientes e buscar ganhar, principalmente, em prazos mais longos.</p>',
    'image' => 'text-and-image-09.jpg',
    'cols'  => 'image-text-long',
    'divider' => 'bolder pt-0'
  ));
  ?>


  <div class="container-fluid cp-title-and-text team-photos">
    <div class="container divider pt-0 none pb-0">

      <div class="row">
        <div class="col-12">
          <h2>Equipe</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-9 pb-4">
          <p class="font-size-20">Contamos com uma equipe altamente qualificada com mais de 30 profissionais dedicados exclusivamente aos fundos de <br class="d-none d-lg-block">investimento do Asset Management, liderados por Dório Ferman, com larga experiência na gestão de recursos no  <br class="d-none d-lg-block">mercado financeiro brasileiro e global.</p>
        </div>
      </div>
      <div class="row team-members">
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/1/equipe-foto-01@3x.jpg" alt=""><p class="name">Alexandre Coelho</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/2/equipe-foto-02@3x.jpg" alt=""><p class="name">Bruno Bak</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/3/equipe-foto-03@3x.jpg" alt=""><p class="name">Bruno Palermo</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/4/equipe-foto-04@3x.jpg" alt=""><p class="name">Bruno Waga</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/5/equipe-foto-05@3x.jpg" alt=""><p class="name">Daniel Brum</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/6/equipe-foto-06@3x.jpg" alt=""><p class="name">Diogo Bahia</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/7/equipe-foto-07@3x.jpg" alt=""><p class="name">Dório Ferman</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/8/equipe-foto-08@3x.jpg" alt=""><p class="name">Eduardo Marques</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/9/equipe-foto-09@3x.jpg" alt=""><p class="name">Frederico Catalan</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/10/equipe-foto-10@3x.jpg" alt=""><p class="name">Gabriel Levy</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/11/equipe-foto-11@3x.jpg" alt=""><p class="name">Gabriel Piccoli</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/12/equipe-foto-12@3x.jpg" alt=""><p class="name">Guilherme Preciado</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/13/equipe-foto-13@3x.jpg" alt=""><p class="name">Gustavo Vieira</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/14/equipe-foto-14@3x.jpg" alt=""><p class="name">Humberto Nardiello</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/15/equipe-foto-15@3x.jpg" alt=""><p class="name">Igor Chalhub</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/16/equipe-foto-16@3x.jpg" alt=""><p class="name">Itamar Benigno</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/17/equipe-foto-17@3x.jpg" alt=""><p class="name">Laura Gonzaga</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/18/equipe-foto-18@3x.jpg" alt=""><p class="name">Leonardo Monoli</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/19/equipe-foto-19@3x.jpg" alt=""><p class="name">Lorenzo Rabello</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/20/equipe-foto-20@3x.jpg" alt=""><p class="name">Luiz Constantino</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/21/equipe-foto-21@3x.jpg" alt=""><p class="name">Marcelo Fonseca</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/22/equipe-foto-22@3x.jpg" alt=""><p class="name">Marcos Mollica</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/23/equipe-foto-23@3x.jpg" alt=""><p class="name">Marcos Pinheiro</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/24/equipe-foto-24@3x.jpg" alt=""><p class="name">Milton Baggio</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/25/equipe-foto-25@3x.jpg" alt=""><p class="name">Pedro Guedes</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/26/equipe-foto-26@3x.jpg" alt=""><p class="name">Rafael Bistafa</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/27/equipe-foto-27@3x.jpg" alt=""><p class="name">Renata Baião</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/28/equipe-foto-28@3x.jpg" alt=""><p class="name">Renato Antunes</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/29/equipe-foto-29@3x.jpg" alt=""><p class="name">Ricardo Rennó</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/30/equipe-foto-30@3x.jpg" alt=""><p class="name">Samir Moreira</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/31/equipe-foto-31@3x.jpg" alt=""><p class="name">Stefano Milagostovich</p></div>
        <div class="col-6 col-lg-2"><img src="assets/images/equipe/32/equipe-foto-32@3x.jpg" alt=""><p class="name">Vinícius Ferreira</p></div>
        
      </div>
      <div class="row">
        <div class="col-12 pt-0 pb-5 pb-lg-0 pt-lg-4">
          <p class="mb-0">Presença nas principais associações de Mercado: <span class="font-sans-bold d-block"> Anbima, AMEC, B3, FIAFIN, IIFA</span></p>
        </div>
      </div>
    </div>
  </div>


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