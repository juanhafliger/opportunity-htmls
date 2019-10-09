 <!-- Panel Content Componenet -->
 <?php $item = 882; ?>
 <div class="componet-panel bg-white">
   <div class="componet-panel-container">

     <div class="with-content" id="for_tr_content_<?php echo $item; ?>">

       <div class="row m-0 p-0 with-content-inner">
         <div class="col-12 p-0">

           <!-- menu tabs for mobile and tablet -->
           <ul class="nav nav-pills d-md-none">
             <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="true">CONFERENCE CALL</a>
               <div class="dropdown-menu">
                 <a class="nav-item nav-link active" id="nav-a-tab-mobile-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">CONFERENCE CALL</a>
                 <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">ANÁLISE MACROECONÔMICA</a>
                 <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">CARTA AO GESTOR</a>
               </div>
             </li>
           </ul>
           <!-- menu tabs for mobile and tablet -->


           <!-- menu tabs for lg and xl screens -->
           <nav class="d-none d-md-block op-menu-desktop-tabs">
             <div class="nav nav-tabs d-flex justify-content-around w-3" id="nav-tab-<?php echo $item; ?>" role="tablist">
               <a class="nav-item nav-link active" id="nav-a-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-a-<?php echo $item; ?>" role="tab" aria-controls="nav-a-<?php echo $item; ?>" aria-selected="true">CONFERENCE CALL</a>
               <a class="nav-item nav-link" id="nav-b-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-b-<?php echo $item; ?>" role="tab" aria-controls="nav-b-<?php echo $item; ?>" aria-selected="false">ANÁLISE MACROECONÔMICA</a>
               <a class="nav-item nav-link" id="nav-c-tab-<?php echo $item; ?>" data-toggle="tab" href="#nav-c-<?php echo $item; ?>" role="tab" aria-controls="nav-c-<?php echo $item; ?>" aria-selected="false">CARTA AO GESTOR</a>
             </div>
           </nav>
           <!-- menu tabs for lg and xl screens -->

           <!-- Conten of tabs -->
           <div class="tab-content" id="nav-tabContent-<?php echo $item; ?>">
             <div class="tab-pane active" id="nav-a-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-a-tab-<?php echo $item; ?> nav-a-tab-mobile-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/relatorios/relatorio-panel-a.php", array()); ?></div>
             <div class="tab-pane fade" id="nav-b-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-b-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/relatorios/relatorio-panel-b.php", array()); ?></div>
             <div class="tab-pane fade" id="nav-c-<?php echo $item; ?>" role="tabpanel" aria-labelledby="nav-c-tab-<?php echo $item; ?>"><?php includeFileWithVariables("inc/pages/relatorios/relatorio-panel-c.php", array()); ?></div>
           </div>
           <!-- Conten of tabs -->

         </div>
       </div>

     </div>



   </div>
 </div>



 <!-- end of Panel Content Componenet -->