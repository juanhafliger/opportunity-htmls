<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Wealth Management</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>


  <?php
  includeFileWithVariables("inc/components/banner.php", array(
    'header' => "WEALTH MANAGEMENT",
    'title' => 'Extensão da gestão que fazemos do nosso próprio <span class="d-block d-md-inline">patrimônio. Sendo assim, nossos clientes são</span> naturalmente nossos sócios.',
    'image' => "header-wm.jpg",
    'slim' => true,
    'full' => true,
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'Desde 1994 fazemos a gestão do nosso próprio patrimônio. A partir de 2016, abrimos a nossa estrutura aos nossos clientes através do Opportunity Wealth Management, oferecendo um atendimento completo, desde a gestão de investimentos ao planejamento tributário e sucessório, no Brasil e exterior.',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => '',
    'title' => '<h4>Possuímos uma equipe altamente qualificada de analistas, economistas, advogados e consultores que busca constantemente as melhores oportunidades de investimento para o nosso patrimônio.<h4>',
    'text' => '<p>Tal estrutura, aliada ao fato de sermos uma das primeiras e maiores gestoras de recursos do país, nos permite oferecer aos nossos clientes as mesmas soluções, acesso a investimentos exclusivos e ganhos de escala.</p>',
    'image' => 'text-and-image-02.jpg',
    'cols'  => 'text-image',
    'divider' => 'simple'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => '<h2>Modelos de <br>Investimento no Brasil</h2>',
    'col_01' => ['01.', 'Fundo <br>Exclusivo', '
    <p>Através da criação de veículos exclusivos para cada cliente, ajudamos a tornar seus investimentos mais dinâmicos e eficientes do ponto de vista tributário e sucessório. Com uma plataforma aberta, filtramos os melhores gestores da indústria de fundos por meio de um rigoroso processo de seleção.</p>
    <p>O acompanhamento é feito através de um relatório detalhado, que consolida todos os ativos investidos e monitora o desempenho do fundo sob diversas óticas.<p>
    <ul>
      <li>Gestão profissional e dinâmica, adaptando às mudanças de cenário econômico;</li>
      <li>Através de acessos exclusivos do Opportunity, oferecemos os melhores gestores do país, comumente fechados para captação ao público em geral; e</li>
      <li> Devolução integral de rebates em benefício de nossos clientes.</li>
    </ul>
    '],
    'col_02' => ['02.', 'Fundo <br>de Fundos', '
    <p>Uma solução anterior ao Fundo Exclusivo, os Fundos de Fundos oferecem uma gestão ativa e uma seleção criteriosa dos melhores gestores e fundos da indústria brasileira, proporcionando aos nossos clientes agilidade e facilidade na gestão de seus investimentos.</p>
    <ul class="list-with-links">
      <li><a href="#">WM Crédito</a></li>
      <li><a href="#">WM Macro</a></li>
      <li><a href="#">WM Ações</a></li>
    </ul>
    '],
    'col_03' => ['03.', 'Carteira <br>Administrada', '
    <p>Consultoria para assessorar a seleção de ativos em qualquer instituição financeira. </p>
    <p>Caso seja de interesse do cliente concentrar seu patrimônio em uma das principais instituições financeiras, selecionamos as melhores opções de investimento dentro de suas plataformas.</p>
    '],
    'divider' => 'simple'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Modelos de <br>Investimento no Exterior',
    'title' => '<h4>Através de parcerias com selecionados bancos nos EUA e Suíça, oferecemos aos nossos clientes a possibilidade de entrada nos segmentos ultra-high, permitindo acesso a produtos específicos, redução de taxas e um atendimento mais qualificado.<h4>',
    'text' => '<p>O investimento no exterior é possível realizar diretamente via Pessoa Física. No entanto, a título de planejamento sucessório e tributário, auxiliamos ainda na constituição e manutenção de <span class="bold">Private Investment Companies (PIC)</span>.</p>
               <p>Em ambos os casos, a gestão da carteira é realizada em conjunto com os bancos. Trabalhamos para garantir uma melhor adequação ao perfil do cliente, a isenção na seleção dos ativos além de facilitar a comunicação e o controle de seus investimentos.</p>',
    'image' => 'text-and-image-03.jpg',
    'cols'  => 'image-text',
    'divider' => 'bolder'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'col_01' => [null, 'Consolidação <br>em Relatório Único', '
    <p>Para garantir transparência, simplicidade e um controle preciso da evolução patrimonial de nossos clientes, consolidamos todos os investimentos em relatório único, disponibilizando informações relevantes para seu acompanhamento tais como rentabilidade global e individual de cada ativo, por classes, liquidez do portfólio, dentre outros.</p>
    <p>Todos os extratos e demais documentos de nossos clientes são arquivados de forma segura e sigilosa e podem ser acessados em qualquer eventualidade.</p>
    '],
    'col_02' => [null, 'Educação <br>a Herdeiros', '
    <p>Investimos constantemente na formação de nossos futuros sócios através de um dos mais tradicionais e conceituados programas de estágio no Brasil, o <a href="#">Opportunity SIM</a>.</p>
    <p>A partir dessa experiência de mais de duas décadas desenvolvendo profissionais qualificados, oferecemos oportunidades customizadas e exclusivas de treinamentos para os filhos de nossos investidores, com o objetivo de torná-los mais conscientes para as decisões relacionadas aos seus investimentos e futuros desafios profissionais.</p>
    '],
    'col_03' => [null, 'Planejamento <br>Sucessório', '
    <p>Nossa equipe jurídica e contábil fica à disposição dos nossos clientes para oferecer as melhores soluções disponíveis, diminuindo os custos e tempo em um evento de sucessão.</p>
    <p>Tais soluções são constantemente monitoradas e atualizadas sempre que necessário, seja por decisão do cliente ou mudança de legislação.</p>
    '],
    'divider' => 'none'
  ));
  ?>


  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->

  <script>


  </script>

</body>

</html>