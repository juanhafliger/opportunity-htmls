 <?php if (!empty($panelNumber) && $panelNumber == 2) : ?>

   <!-- Panel Content Componenet -->
   <div class="componet-panel bg-white">
     <div class="componet-panel-container pt-0">

       <div class="with-content" id="for_tr_content_<?php echo $item; ?>">

         <div class="row m-0 p-0 with-content-inner <?php echo (!empty($classHelper)) ?  $classHelper : ''; ?>">
          <div class="col-12 p-0">
            <h4 class="mb-4">Avaliamos constantemente os seguintes riscos:</h4>
          </div>
           <div class="col-12 p-0">

             <!-- menu tabs for mobile and tablet -->
             <ul class="nav nav-pills d-md-none">
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">RISCO DE MERCADO</a>
                 <div class="dropdown-menu">
                   <a class="nav-item nav-link active" id="nav-a-tab-mobile-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">RISCO DE MERCADO</a>
                   <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">RISCO DE CRÉDITO</a>
                   <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">RISCO LEGAL</a>
                   <a class="nav-item nav-link" id="nav-d-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-d-<?php echo $item; ?>" role="tab" aria-controls="nav-d-<?php echo $item; ?>" aria-selected="false">RISCO OPERACIONAL</a>
                   <a class="nav-item nav-link" id="nav-e-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-e-<?php echo $item; ?>" role="tab" aria-controls="nav-e-<?php echo $item; ?>" aria-selected="false">RISCO DE LIQUIDEZ</a>
                 </div>
               </li>
             </ul>
             <!-- menu tabs for mobile and tablet -->

             <!-- menu tabs for lg and xl screens -->
             <nav class="d-none d-md-block op-menu-desktop-tabs">
               <div class="nav nav-tabs d-flex justify-content-around w-5" id="nav-tab-<?php echo $item; ?>" role="tablist">
                 <a class="nav-item nav-link active" id="nav-a-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">RISCO DE MERCADO</a>
                 <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">RISCO DE CRÉDITO</a>
                 <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">RISCO LEGAL</a>
                 <a class="nav-item nav-link" id="nav-d-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-d-<?php echo $item; ?>" role="tab" aria-controls="nav-d-<?php echo $item; ?>" aria-selected="false">RISCO OPERACIONAL</a>
                 <a class="nav-item nav-link" id="nav-e-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-e-<?php echo $item; ?>" role="tab" aria-controls="nav-e-<?php echo $item; ?>" aria-selected="false">RISCO DE LIQUIDEZ</a>
               </div>
             </nav>
             <!-- menu tabs for lg and xl screens -->

             <!-- Conten of tabs -->
             <div class="tab-content" id="nav-tabContent-<?php echo $item; ?>">
               <div class="tab-pane active" id="nav-a-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-a-tab-<?php echo $item; ?> nav-a-tab-mobile-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-2a.php", array()); ?></div>
               <div class="tab-pane fade" id="nav-b-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-b-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-2b.php", array()); ?></div>
               <div class="tab-pane fade" id="nav-c-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-c-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-2c.php", array()); ?></div>
               <div class="tab-pane fade" id="nav-d-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-d-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-2d.php", array()); ?></div>
               <div class="tab-pane fade" id="nav-e-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-e-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-2e.php", array()); ?></div>
             </div>
             <!-- Conten of tabs -->

           </div>
         </div>

       </div>

     </div>
   </div>
   <!-- end of Panel Content Componenet -->
 <?php else : ?>

   <!-- Panel Content Componenet -->
   <div class="componet-panel bg-white">
     <div class="componet-panel-container pt-0">

       <div class="with-content" id="for_tr_content_<?php echo $item; ?>">

         <div class="row m-0 p-0 with-content-inner <?php echo (!empty($classHelper)) ?  $classHelper : ''; ?>">
           <div class="col-12 p-0">

             <!-- menu tabs for mobile and tablet -->
             <ul class="nav nav-pills d-md-none">
               <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">INVESTIMENTO MACRO</a>
                 <div class="dropdown-menu">
                   <a class="nav-item nav-link active" id="nav-a-tab-mobile-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="false">INVESTIMENTO MACRO</a>
                   <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="true">INVESTIMENTO AÇÕES</a>
                 </div>
               </li>
             </ul>
             <!-- menu tabs for mobile and tablet -->


             <!-- menu tabs for lg and xl screens -->
             <nav class="d-none d-md-block op-menu-desktop-tabs">
               <div class="nav nav-tabs d-flex justify-content-around w-3" id="nav-tab-<?php echo $item; ?>" role="tablist">
                 <a class="nav-item nav-link active" id="nav-a-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">INVESTIMENTO MACRO</a>
                 <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="true">INVESTIMENTO AÇÕES</a>
               </div>
             </nav>
             <!-- menu tabs for lg and xl screens -->

             <!-- Conten of tabs -->
             <div class="tab-content" id="nav-tabContent-<?php echo $item; ?>">
               <div class="tab-pane active" id="nav-a-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-a-tab-<?php echo $item; ?> nav-a-tab-mobile-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-a.php", array()); ?></div>
               <div class="tab-pane fade" id="nav-b-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-b-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/assets_managament/asset-panel-b.php", array()); ?></div>
             </div>
             <!-- Conten of tabs -->

           </div>
         </div>

       </div>

     </div>
   </div>
   <!-- end of Panel Content Componenet -->
 <?php endif; ?>