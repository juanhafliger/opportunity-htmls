<!-- ROW ACOES v2 -->

<div class="container-fluid p-0">

  <div class="row-flex-container">
    <div class="o-row o-row-header">
      <div class="row-flex with-header">
        <div class="row-flex-cell"><?php echo $title; ?></div>
        <div class="row-flex-cell">VALOR DA COTA</div>
        <div class="row-flex-cell">%DIA</div>
        <div class="row-flex-cell">%MÊS</div>
        <div class="row-flex-cell">%MES<span class="d-block">ANTERIOR</span></div>
        <div class="row-flex-cell">%ANO</div>
        <div class="row-flex-cell">%ANO<span class="d-block">ANTERIOR</span></div>
        <div class="row-flex-cell">%12 MESES</div>
        <div class="row-flex-cell">PL MÉDIO <sup>1&2</sup><span class="d-block">12 MESES</span></div>
        <div class="row-flex-cell">PL MASTER <sup>2</sup></div>
        <div class="row-flex-cell d-none d-lg-block">&nbsp;</div>
      </div>
    </div>

    <?php foreach ($names as $name) : $item = rand(1, 1000000); ?>

      <div class="o-row o-row-items">
        <div class="row-flex">
          <div class="row-flex-cell d-flex align-items-center open-close-panel-actions">
            <!-- actions for desktop -->
            <a class="px-1 mr-1 open-close-panel-actions-arrow" data-panel-slide="for_tr_content_<?php echo $item; ?>"><img class="" src="assets/images/icons/seta-drop-down-fundo.svg" /></a>
            <a class="px-1 mr-1 d-none d-lg-inline-block" data-toggle="tooltip" data-placement="top" title="18/09/2019" href="javascript:;"><img src="assets/images/icons/icone-data-da-cota.svg" /></a>
            <a class="px-1 mr-2 d-none d-lg-inline-block" data-toggle="tooltip" data-placement="top" title="R$ 42,00" href="javascript:;"><img src="assets/images/icons/icone-valor-da-cota.svg" /></a>
            <a class="open-close-panel" data-panel-slide="for_tr_content_<?php echo $item; ?>" href="javascript:;">
              <?php echo $name; ?>
            </a>

            <!-- actions for mobile -->
            <div class="row-action-bar d-flex align-items-center d-lg-none">
              <div class="d-flex align-items-center justify-content-between inner bg-light-b">

                <?php if ($disable) : ?>
                <a class="o-btn for-table locked" href="#!como-investir"><img src="assets/images/icons/icone-fundo-bloqueado.svg" /></a>
                <?php else : ?>
                  <a class="o-btn for-table" href="#!como-investir">Como investir</a>
                <?php endif; ?>
                <a class="px-1 mr-1" data-toggle="tooltip" data-placement="top" title="18/09/2019" href="javascript:;"><img src="assets/images/icons/icone-data-da-cota.svg" /></a>
                <a class="px-1 mr-2" data-toggle="tooltip" data-placement="top" title="R$ 42,00" href="javascript:;"><img src="assets/images/icons/icone-valor-da-cota.svg" /></a>
                <img src="assets/images/icons/seta-drop-down-fundo-10.svg" />
              </div>
            </div>

          </div>
          <div class="row-flex-cell">42.62300084</div>
          <div class="row-flex-cell">0.150</div>
          <div class="row-flex-cell">2.74</div>
          <div class="row-flex-cell">2.74</div>
          <div class="row-flex-cell">20.46</div>
          <div class="row-flex-cell">18.96</div>
          <div class="row-flex-cell">34.43</div>
          <div class="row-flex-cell">309,06</div>
          <div class="row-flex-cell">3186.72</div>
          <?php if ($disable) : ?>
            <div class="row-flex-cell d-none d-lg-block"><a class="o-btn for-table locked" href="#!como-investir"><img src="assets/images/icons/icone-fundo-bloqueado.svg" /></a></div>
          <?php else : ?>
            <div class="row-flex-cell d-none d-lg-block"><a class="o-btn for-table" href="#!como-investir">Como investir</a></div>
          <?php endif; ?>
        </div>

        <div class="o-panel bg-white">
          <div class="o-panel-container">


            <div class="container with-content" id="for_tr_content_<?php echo $item; ?>">

              <div class="row m-0 p-0 with-content-inner">
                <div class="col-12 p-0">

                  <!-- menu tabs for mobile and tablet -->
                  <ul class="nav nav-pills d-md-none">
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">GRÁFICO DE RENTABILIDADE</a>
                      <div class="dropdown-menu">
                        <a class="nav-item nav-link active" id="nav-a-tab-mobile-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">GRÁFICO DE RENTABILIDADE</a>
                        <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">RENTABILIDADE MÊS A MÊS</a>
                        <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">PERFIL DO FUNDO</a>
                        <a class="nav-item nav-link" id="nav-d-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-d-<?php echo $item; ?>" role="tab" aria-controls="nav-d-<?php echo $item; ?>" aria-selected="false">DADOS PARA MOVIMENTAÇÃO</a>
                        <a class="nav-item nav-link" id="nav-e-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-e-<?php echo $item; ?>" role="tab" aria-controls="nav-e-<?php echo $item; ?>" aria-selected="false">PRESTADORES DE SERVIÇO</a>
                        <a class="nav-item nav-link" id="nav-f-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-f-<?php echo $item; ?>" role="tab" aria-controls="nav-f-<?php echo $item; ?>" aria-selected="false">DOCUMENTOS LEGAIS</a>
                        <a class="nav-item nav-link" id="nav-g-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-g-<?php echo $item; ?>" role="tab" aria-controls="nav-g-<?php echo $item; ?>" aria-selected="false">DOCUMENTOS COMERCIAIS</a>
                      </div>
                    </li>
                  </ul>
                  <!-- menu tabs for mobile and tablet -->

                  <!-- menu tabs for lg and xl screens -->
                  <nav class="d-none d-md-block op-menu-desktop-tabs">
                    <div class="nav nav-tabs d-flex justify-content-between px-4" id="nav-tab-<?php echo $item; ?>" role="tablist">
                      <a class="nav-item nav-link active" id="nav-a-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">GRÁFICO DE <br>RENTABILIDADE</a>
                      <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">RENTABILIDADE <br>MÊS A MÊS</a> <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">PERFIL DO <br>FUNDO</a> <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-d-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-d-<?php echo $item; ?>" role="tab" aria-controls="nav-d-<?php echo $item; ?>" aria-selected="false">DADOS PARA <br>MOVIMENTAÇÃO</a> <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-e-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-e-<?php echo $item; ?>" role="tab" aria-controls="nav-e-<?php echo $item; ?>" aria-selected="false">PRESTADORES <br>DE SERVIÇO</a> <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-f-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-f-<?php echo $item; ?>" role="tab" aria-controls="nav-f-<?php echo $item; ?>" aria-selected="false">DOCUMENTOS <br>LEGAIS</a> <img src="assets/images/icons/separator-tabs.svg" />
                      <a class="nav-item nav-link" id="nav-g-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-g-<?php echo $item; ?>" role="tab" aria-controls="nav-g-<?php echo $item; ?>" aria-selected="false">DOCUMENTOS <br>COMERCIAIS</a>
                    </div>
                  </nav>
                  <!-- menu tabs for lg and xl screens -->

                  <!-- Conten of tabs -->
                  <div class="tab-content" id="nav-tabContent-<?php echo $item; ?>">
                    <div class="tab-pane active pt-0" id="nav-a-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-a-tab-<?php echo $item; ?> nav-a-tab-mobile-<?php echo $item; ?>"><?php include('panel-a.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-b-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-b-tab-<?php echo $item; ?>"><?php include('panel-b.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-c-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-c-tab-<?php echo $item; ?>"><?php include('panel-c.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-d-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-d-tab-<?php echo $item; ?>"><?php include('panel-d.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-e-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-e-tab-<?php echo $item; ?>"><?php include('panel-e.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-f-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-f-tab-<?php echo $item; ?>"><?php include('panel-f.php'); ?></div>
                    <div class="tab-pane fade pt-0" id="nav-g-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-g-tab-<?php echo $item; ?>"><?php include('panel-g.php'); ?></div>
                  </div>
                  <!-- Conten of tabs -->

                </div>
              </div>

            </div>



          </div>
        </div>

      </div>
    <?php $item++;
    endforeach; ?>


  </div>

</div>