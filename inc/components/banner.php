 <!-- Banner Component -->
 <div class="container-fluid bg-section" style="background-image: url(assets/images/<?php echo $image; ?>);">
   <div class="container">
     <div class="row">
       <div class="col-11 banner-home <?php echo (!empty($full)) ? 'full' : ''; ?> d-flex flex-column align-items-start justify-content-end">
         <?php echo $header ? '<h3>' . $header . '</h3>' : ''; ?>
         <h2 <?php echo $slim ? ' class="slim"' : ''; ?>><?php echo $title; ?></h2>
         <a class="align-self-center mt-5 mb-5 d-block d-md-none w-target" href="#section-slogan-block"><img src="assets/images/icons/seta-branca.svg" alt=""></a>
       </div>
     </div>
   </div>
 </div>
 <!-- end of Banner Component -->