<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Fundos e Rentabilidade</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="intern">


  <?php include('inc/header.php'); ?>

  <!-- header of page -->
  <div class="container-fluid p-0 bg-sections">
    <div class="container d-flex flex-column align-items-start header-section">

      <span class="section-title">ASSET MANAGEMENT</span>
      <h1 class="header-title">Fundos e Rentabilidade</h1>

    </div>
  </div>
  <!-- end of header of page -->

  <!-- content -->
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "AÇÕES",
    'names' => ['Opp Logica II FIC FIA', 'Opp SELECTION FIC FIA'],
    'disable' => true,
  ));
  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "LONG BIASED",
    'names' => ['Opp Long Biased FIC FIM'],
    'disable' => false,
  ));
  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "MULTIMERCADO <br class='d-md-none'>MACRO",
    'names' => ['Opp TOTAL FIC FIM', 'Opp Market FIC FIM'],
    'disable' => false,
  ));
  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "RETORNO <br class='d-md-none'>ABSOLUTO",
    'names' => ['Opp MIDI FIC FIM'],
    'disable' => false,
  ));
  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "MULTIGESTOR",
    'names' => ['Opp WM Crédito FIC FIM CP', 'Opp Set Equities FIC FIM', 'Opp Allocation FIC FIM'],
    'disable' => false,
  ));
  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "PREVIDÊNCIA",
    'names' => ['Opp Icatu Previdência FIM'],
    'disable' => false,
  ));

  ?>
  <?php
  includeFileWithVariables("inc/pages/fundos-e-rentabilidade/row-v2.php", array(
    'title' => "REFERENCIADO",
    'names' => ['Opp Top DI FIC FI Ref'],
    'disable' => false,
  ));
  ?>


  <div class="container-fluid p-0">

    <div class="op-row-flex-container">

      <div class="op-row header">
        <div class="op-row-inner">
          <div class="op-row-inner-cell">INDICES</div>
          <div class="op-row-inner-cell">%DIA</div>
          <div class="op-row-inner-cell">%MÊS</div>
          <div class="op-row-inner-cell">%MES<span>ANTERIOR</span></div>
          <div class="op-row-inner-cell">%ANO</div>
          <div class="op-row-inner-cell">%ANO<span>ANTERIOR</span></div>
          <div class="op-row-inner-cell">%12 MESES</div>
        </div>
      </div>

      <div class="op-row body">
        <div class="op-row-inner">
          <div class="op-row-inner-cell with-icon"><img src="assets/images/icons/icone-data-da-cota.svg" />IPCA +6%</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
          <div class="op-row-inner-cell">1.15</div>
          <div class="op-row-inner-cell">-3.24</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
        </div>
      </div>
      <div class="op-row body">
        <div class="op-row-inner">
          <div class="op-row-inner-cell with-icon"><img src="assets/images/icons/icone-data-da-cota.svg" />IBOVESPA</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
          <div class="op-row-inner-cell">1.15</div>
          <div class="op-row-inner-cell">-3.24</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
        </div>
      </div>
      <div class="op-row body">
        <div class="op-row-inner">
          <div class="op-row-inner-cell with-icon"><img src="assets/images/icons/icone-data-da-cota.svg" />IBX-100</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
          <div class="op-row-inner-cell">1.15</div>
          <div class="op-row-inner-cell">-3.24</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
        </div>
      </div>
      <div class="op-row body">
        <div class="op-row-inner">
          <div class="op-row-inner-cell with-icon"><img src="assets/images/icons/icone-data-da-cota.svg" />IPCA +6%</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
          <div class="op-row-inner-cell">1.15</div>
          <div class="op-row-inner-cell">-3.24</div>
          <div class="op-row-inner-cell">2.74</div>
          <div class="op-row-inner-cell">2.21</div>
        </div>
      </div>

    </div>
  </div>


  <div class="container-fluid bg-light-b">
    <div class="container">
      <div class="d-flex flex-column flex-lg-row align-items-start align-items-lg-center justify-content-lg-between items-ctas">
        <a href="#"><span><img src="assets/images/icons/icone-fundo-bloqueado.svg" /></span> Fundos fechados para captação</a>
        <a href="#"><span><img src="assets/images/icons/icone-data-da-cota.svg" /></span> Data da Cota </a>
        <a href="#"><span><img src="assets/images/icons/icone-valor-da-cota.svg" /></span> Patrimônio Líquido</a>
        <a href="#"><span class="icon">2.</span> Unidade de valor para PL Médio e PL Master (R$MM) </a>
      </div>
    </div>
  </div>





  <div class="container-fluid title-and-text-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2>A apuração das rentabilidades é feita com base nos últimos dias úteis dos períodos de referência.</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-12 col-lg-6">
          <p class="pr-0 pr-lg-4">1. Média aritmética do PL, apurada no último dia útil de cada mês, expressa em R$MM. A rentabilidade divulgada não é líquida de impostos e taxa de saída, quando houver. Fundos de investimento não contam com garantia do administrador, do gestor, de qualquer mecanismo de seguro ou, Fundo Garantidor de Crédito/FGC. A rentabilidade obtida no passado não representa garantia de rentabilidade futura -Leia o prospecto e o regulamento antes de investir. Alguns fundos têm menos de 12 (doze) meses.</p>
        </div>
        <div class="col-12 col-lg-6">
          <p class="pl-0 pl-lg-4">Para avaliação da performance de um fundo de investimento, é recomendável a análise de, no mínimo, 12 (doze) meses. - Alguns fundos listados utilizam estratégias com derivativos, podendo resultar em perdas patrimoniais para seus cotistas, podendo inclusive acarretar perdas superiores ao patrimônio investido e a consequente obrigação do cotista de aportar recursos adicionais para cobrir o prejuízo do Fundo. Alguns fundos listados possuem data de conversão das cotas diversa da data de pagamento do resgate. Fonte: Banco de Dados / Opportunity.</p>
        </div>
      </div>
    </div>
  </div>



  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->

  <script>
    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu .nav-item.nav-link').on('click', function() {
      $(this).parent().parent().find('.dropdown-toggle').html($(this).html());
    });

    $(function() {
      $('[data-toggle="tooltip"]').tooltip()
    })

    var inLeft = false;

    $('[data-panel-slide]').click(function(e) {
      e.preventDefault();

      $the_row = $(this).parent().parent().parent();
      $the_row_container = $(this).parent().parent().parent().parent();
      $the_panel = $(this).parent().parent().next();
      $arrow = $(this).parent().find('.open-close-panel-actions-arrow');


      $('.o-panel').not($the_panel).slideUp();
      $('.open-close-panel-actions-arrow').not($arrow).removeClass('open-close-panel-actions-arrow-active');

      $arrow.toggleClass('open-close-panel-actions-arrow-active');


      $('.row-flex-container').animate({
        scrollLeft: "0"
      }, 30);

      $the_panel.slideToggle(800, 'linear', function() {

        $the_row.toggleClass('bg-light-b');

        $the_panel.is(':visible') ? $the_row_container.addClass('overflow-hidden') : $the_row_container.removeClass('overflow-hidden');

      });


    });



    $('.row-flex-container').on('scroll', function(e) {

      var x = $(this).scrollLeft();
      var w = $(this).width();
      var y = $(this).closest('.row-flex-cell:first-child .row-action-bar');

      $(this).closest('.row-flex-cell:first-child .row-action-bar').css('width', w);

      if ((x >= 0) && (x<410)) {

        if (x >= (w - 152)) {

          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transition-timing-function', 'ease-in');
          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transition', '0.2s');
          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transform', 'translateX(' + (x - (w - 152)) + 'px)');
        } else {
          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transition-timing-function', 'ease-out');
          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transition', '0.2s');
          $(this).find('.row-flex-cell:first-child .row-action-bar').css('transform', 'translateX(0)');
        }

      }

    });


    $("input:checkbox").on('click', function() {

      var $box = $(this);
      if ($box.is(":checked")) {

        var group = "input:checkbox[name='" + $box.attr("name") + "']";

        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
  </script>

</body>

</html>