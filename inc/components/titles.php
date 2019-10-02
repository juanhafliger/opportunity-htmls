 <!-- Titles Component -->
 <?php if ($type == 'header') : ?>

  <!-- header of page -->
   <div class="container-fluid p-0 bg-sections">
     <div class="container d-flex flex-column align-items-start header-section">

       <?php if (!empty($suptitle)) : ?>
         <span class="section-title"><?php echo $suptitle; ?></span>
       <?php endif; ?>
       <?php echo $title; ?>

     </div>
   </div>
   <!-- end of header of page -->

 <?php elseif ($type == 'dynamic') : ?>

 <?php else : ?>
   <div class="container-fluid titles-component">
     <div class="container divider <?php echo (!empty($divider)) ? $divider : ''; ?>">

       <?php if (!empty($title)) : ?>
         <div class="row">
           <div class="col-12 col-md-8">
             <?php echo $title; ?>
           </div>
         </div>
       <?php endif; ?>

     </div>
   </div>
 <?php endif; ?>
 <!-- Titles Component -->