 <!-- Image and Text Component -->
 <div class="container-fluid cp-image-and-text">
   <div class="container <?php echo (!empty($superTitle)) ? 'divider pt-0' : 'divider'; ?> <?php echo (!empty($divider)) ? $divider : ''; ?>">

     <?php if (!empty($superTitle)) : ?>
       <div class="row">
         <div class="col-12">
           <h2><?php echo $superTitle; ?></h2>
         </div>
       </div>
     <?php endif; ?>

     <div class="row">

       <?php if ($cols == 'image-text') : ?>

         <div class="col-12 col-lg-5">
           <div class="d-block d-lg-none"><?php echo $title; ?></div>
           <img src="assets/images/<?php echo $image; ?>" alt="" class="img-fluid">
         </div>
         <div class="col-12 col-lg-7">
           <div class="d-none d-lg-block"><?php echo $title; ?></div>
           <?php echo $text; ?>
         </div>

       <?php endif; ?>


       <?php if ($cols == 'text-image') : ?>

         <div class="col-12 col-lg-6">
           <?php echo $title; ?>
           <?php echo $text; ?>
         </div>
         <div class="col-12 col-lg-5 offset-md-1">
           <img src="assets/images/<?php echo $image; ?>" alt="" class="img-fluid">
         </div>

       <?php endif; ?>

       <?php if ($cols == 'text-long-image') : ?>

         <div class="col-12 col-lg-7 text-long-image">
           <?php echo $title; ?>
           <span class="d-md-none"><img src="assets/images/<?php echo $image; ?>" alt="" class="img-fluid"></span>
           <?php echo $text; ?>
         </div>
         <div class="col-12 col-lg-5 d-none d-md-block">
           <img src="assets/images/<?php echo $image; ?>" alt="" class="img-fluid">
         </div>

       <?php endif; ?>



     </div>
   </div>
 </div>
 </div>
 <!-- end of Image and Text Component -->