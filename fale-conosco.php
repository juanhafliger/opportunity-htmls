<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Fale Conosco</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h1 class="header-title">Fale Conosco</h1>',
    'suptitle' => '',
    'divider' => 'none',
    'type' => 'header',
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => null,
    'titleForm' => '<h5>Para movimentações, contate o seu officer. <span class="d-lg-block">Infomações sobre Fundos Opportunity <br class="d-none d-lg-block">RJ (021) 3804.3434 ou SP (011) 3039.1201</span></h5>',
    'form' => '<form class="o-form needs-validation pt-5" novalidate>
                  <div class="form-group">
                    <input type="text" class="form-control" id="nome" placeholder="" required>
                    <label for="nome">Nome</label>
                    <div class="invalid-feedback">
                      <span class="required">Obrigatório</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control" id="email" placeholder="" required>
                    <label for="email">Email</label>
                    <div class="invalid-feedback">
                      <span class="required">Obrigatório</span>
                    </div>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="telefone" placeholder="">
                    <label for="telefone">Telefone</label>
                  </div>
                  <div class="form-group">
                    <select class="form-control minimal" id="assunto">
                        <option disabled selected>Selecione...</option>
                        <option value="Option 1">Option 1</option>
                        <option value="Option 2">Option 2</option>
                        <option value="Option 3">Option 3</option>
                        <option value="Option 4">Option 4</option>
                        <option value="Option 5">Option 5</option>
                    </select>
                    <label for="assunto">Assunto</label>
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control" id="mensagem" placeholder="">
                    <label for="mensagem">Mensagem</label>
                  </div>

                  <button type="submit" class="o-btn mt-3 mb-4 mb-lg-0">Enviar</button>
                </form>',
    'title' => null,
    'text' => '  <div class="contact-block">
                    <h3>Rio de Janeiro</h3>
                    <h4>+55 21 3804.3434</h4>
                    <p>Av. Presidente Wilson, nº 231, 28º andar - Parte <br>CEP 20030-905 - Centro - RJ</p>
                    <p class="small">Tel: + 55 21 3804.3700<br> Fax: +55 21 3804.3480 <br>E-mail: <a href="mailto:">opportunity@opportunity.com.br</a></p>
                    <a href="#" class="o-btn mb-2 d-md-none">Ver mapa</a>
                  </div>
                  <div class="contact-block">
                    <h3>São Paulo</h3>
                    <h4>+55 11 3039.1201</h4>
                    <p>Av. São Gabriel, nº 477, 12º andar <br>CEP 01435-001 - Itaim Bibi - SP</p>
                    <p class="small">Tel: +55 11 3039.1200 <br>Fax: +55 11 3039.1240 <br>E-mail: <a href="mailto:">opportunity@opportunity.com.br</a></p>
                    <a href="#" class="o-btn mb-2 d-md-none">Ver mapa</a>
                  </div>',
    'image' => null,
    'cols'  => 'form-text-long',
    'divider' => 'simple form-text-long',
    'isMobileReverse' => true
  ));
  ?>


  <?php
  includeFileWithVariables("inc/components/image-and-text.php", array(
    'superTitle' => 'Canal de Denúncias',
    'smallSuperTitle' => true,
    'titleForm' => '',
    'form' => '<form class="o-form needs-validation pt-4" novalidate>
                  <div class="form-group">
                    <input type="text" class="form-control" id="denuncia" placeholder="" required>
                    <label for="denuncia">Denúncia</label>
                    <div class="invalid-feedback">
                      <span class="required">Obrigatório</span>
                    </div>
                  </div>
                  <button type="submit" class="o-btn mb-5 mb-lg-0">Enviar</button>
                </form>',
    'title' => null,
    'text' => '<p>Esse canal de denúncia permite que qualquer funcionário, colaborador, cliente, usuário, parceiro ou fornecedor possa reportar, sem a necessidade de se identificar, situações com indícios de ilicitude de qualquer natureza, relacionadas às atividades da empresa. </p>
              <p>Toda denúncia será tratada de forma confidencial e avaliada com independência, imparcialidade e isenção.</p>',
    'image' => null,
    'cols'  => 'form-text-long',
    'divider' => 'bolder'
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/title-and-text.php", array(
    'title' => 'Importante!',
    'cols' => array(
      array('content' => '
      <p>O Opportunity não entra em contato por telegrama, telefone ou e-mail informando sobre valores bloqueados ou liberados e solicitando dados bancários pessoais para depósito.</p>
      <p>Ao receber uma comunicação ou ligação em nome do Opportunity de pessoa que você não conheça, solicitando dados bancários pessoais, desconfie e entre em contato conosco imediatamente. </p>
      '),
      array('content' => '
      <p>Confira sempre os números de contato do Opportunity através do nosso site ou de documentos oficiais. Criminosos podem utilizar fraudulentamente o nome do Opportunity para publicar ou informar números de telefone incorretos com a finalidade de aplicar golpes.</p>
      '),
    ),
    'divider' => 'none pb-0'
  ));
  ?>



  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->


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