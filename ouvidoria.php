<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Ouviudoria</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h1 class="header-title">Ouvidoria</h1>',
    'suptitle' => '',
    'divider' => 'none',
    'type' => 'header',
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/slogan.php", array(
    'title' => 'A Ouvidoria do Opportunity DTVM existe para dar o devido encaminhamento às manifestações sobre os produtos e serviços prestados pela Opportunity DTVM. <br>Ela deverá ser acionada caso o cliente não se satisfaça com a solução que lhe foi apresentada previamente pelo atendimento habitual dos atendentes.',
  ));
  ?>




  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => '<h2>Sua atuação acontece da <br class="d-block">seguinte forma:</h2>',
    'size_column' => '4',

    'col_01' => ['01.',  null, '
    <p class="small">Recebe as manifestações dos clientes sobre os serviços prestados.</p>'],

    'col_02' => ['02.', null, '
    <p class="small">Envia as manifestações às áreas correspondentes, responsáveis pelo assunto.</p>'],

    'col_03' => ['03.', null, '
    <p class="small">Acompanha as providências e cobra soluções.</p>'],

    'divider' => 'none pb-0 mt-4',
    'side_by_side' => true
  ));
  ?>
  <?php
  includeFileWithVariables("inc/components/content-in-columns.php", array(
    'title' => null,
    'size_column' => '4',

    'col_01' => ['04.',  null, '
    <p class="small">Responde no prazo máximo de 10 dias úteis com clareza e objetividade. Caso não seja possível atender o cliente dentro do prazo estabelecido, a Ouvidoria comunicará ao cliente as providências já adotadas, as razões de tal impossibilidade e o novo prazo para resposta final.</p>'],

    'col_02' => ['05.', null, '
    <p class="small">Sugere/recomenda medidas corretivas ou mudanças de procedimentos internos e adequações de normas e serviços.</p>'],

    'col_03' => ['06.', null, '
    <p class="small">Avalia o grau de satisfação do cliente.</p>'],

    'divider' => 'bolder pt-3 mb-5 mb-lg-4',
    'side_by_side' => true
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Como funciona ?',
    'smallSuperTitle' => false,
    'titleForm' => '',
    'form' => '
    <form class="o-form inline needs-validation pt-4 d-flex flex-wrap justify-content-between" novalidate>

                    <div class="form-group">
                      <p>Você já contactou algum de nossos canais de atendimento?</p>
                      <div class="d-flex justify-content-start align-items-center">
                        <div class="o-form-item pr-5">
                          <label class="container-checkbox d-flex justify-content-between align-items-center">
                            <span class="label ">SIM</span>
                            <input type="checkbox" name="ja-foi-atendido" value="sim">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                        <div class="o-form-item pr-5">
                          <label class="container-checkbox d-flex justify-content-between align-items-center">
                            <span class="label ">NÃO</span>
                            <input type="checkbox" name="ja-foi-atendido" value="nao" checked="checked">
                            <span class="checkmark"></span>
                          </label>
                        </div>
                      </div>
                    </div>

                    <div class="form-group"></div>
        
                    <div class="form-group ja-foi-atendido-sim" style="display:none;">
                      <input type="text" class="form-control" id="resposta" placeholder="" required>
                      <label for="resposta">Qual a resposta obtida?</label>
                      <div class="invalid-feedback">
                        <span class="required">Campo obrigatório</span>
                      </div>
                    </div>
                
                    <div class="form-group ja-foi-atendido-sim" style="display:none;">
                      <input type="text" class="form-control" id="atendente" placeholder="" required>
                      <label for="atendente">Nome do Atendente</label>
                      <div class="invalid-feedback">
                      <span class="required">Campo obrigatório</span>
                      </div>
                    </div>

                  

                  <button type="submit" class="o-btn mb-5 mb-lg-0">Seguir</button>
                </form>',
    'title' => null,
    'text' => '
    <p class="mt-4 mt-lg-0">O atendimento ao cliente é feito através do formulário abaixo, da Central de Atendimento a Clientes (CAC), pelo telefone 0800 282 3853, por correspondência física ou em nossa sede, na Avenida Presidente Wilson, nº 231, 28º andar - parte, Rio de Janeiro, RJ. O local dispõe de acesso a portadores de deficiência locomotora.</p>
    <p>O horário de funcionamento da Ouvidoria é de segunda a sexta-feira, das 10h às 16h, compreendendo todo o território nacional.</p>',
    'image' => null,
    'cols'  => 'text-logn-form',
    'divider' => 'none pb-0'
  ));
  ?>







  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->


  <!-- Initialize Swiper Gallery Component-->
  <script>
    $("input:checkbox").on('click', function() {

      var $box = $(this);
      if ($box.is(":checked")) {

        if ($box.val() == "sim") {
          $('.ja-foi-atendido-sim').show();
        } else {
          $('.ja-foi-atendido-sim').hide();
        }
        
        var group = "input:checkbox[name='" + $box.attr("name") + "']";

        $(group).prop("checked", false);
        $box.prop("checked", true);
      } else {
        $box.prop("checked", false);
      }
    });
  </script>

  <script>
    //validate forms 
    (function() {
      'use strict';
      window.addEventListener('load', function() {
        // Pega todos os formulários que nós queremos aplicar estilos de validação Bootstrap personalizados.
        var forms = document.getElementsByClassName('needs-validation');
        // Faz um loop neles e evita o envio
        var validation = Array.prototype.filter.call(forms, function(form) {
          form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add('was-validated');
          }, false);
        });
      }, false);
    })();
  </script>


</body>

</html>