 <!-- Title and Text Component -->
 <div class="container-fluid cp-title-and-text">
   <div class="container <?php echo (!empty($superTitle)) ? 'divider pt-0' : 'divider'; ?> <?php echo (!empty($divider)) ? $divider : ''; ?> <?php echo (!empty($classHelper)) ? $classHelper : ''; ?>">

     <?php if (!empty($superTitle)) : ?>
       <div class="row">
         <div class="col-12">
           <h2><?php echo $superTitle; ?></h2>
         </div>
       </div>
     <?php endif; ?>

     <?php if (!empty($title)) : ?>
       <div class="row">
         <div class="col-12">
           <h3><?php echo $title; ?></h3>
         </div>
       </div>
     <?php endif; ?>

     <div class="row">
       <?php if (!empty($colNumber)) : ?>
         <?php if ($colNumber == '5-7') : ?>
           <div class="col-12 col-lg-5 pr-0 pr-lg-4">
             <?php echo $cols[0]['content']; ?>
           </div>
           <div class="col-12 col-lg-7 pl-0 pl-lg-2">
             <?php echo $cols[1]['content']; ?>
           </div>
         <?php endif; ?>
       <?php else : ?>
         <div class="col-12 col-lg-6 pr-0 pr-lg-4">
           <?php echo $cols[0]['content']; ?>
         </div>
         <div class="col-12 col-lg-6 pl-0 pl-lg-4">
           <?php echo $cols[1]['content']; ?>
         </div>
       <?php endif; ?>


     </div>
   </div>
 </div>
 <!-- end of Title and Text Component -->