 <!-- Swipe Gallery -->
 <div class="container-fluid swipe-gallery">
   <div class="container <?php echo (!empty($title)) ? 'divider' : 'divider no-title'; ?> <?php echo (!empty($divider)) ? $divider : ''; ?>">

     <?php if (!empty($title)) : ?>
       <div class="row">
         <div class="col-12 col-md-8">
           <?php echo $title; ?>
         </div>
       </div>
     <?php endif; ?>


     <div class="row">
       <div class="col-12">

         <div class="swiper-container <?php echo ($itemsPerColumn > 1) ? 'padding-pagination' : ''; ?>" data-items-per-column="<?php echo $itemsPerColumn; ?>">
           <div class="swiper-wrapper">
             <?php foreach ($row as $item) : ?>

               <div class="swiper-slide item">
                 <a style="<?php echo (!empty($item[0])) ? 'background-image: url(' . $item[0] . ');' : ''; ?>" href="#">
                   <?php echo (!empty($item[1])) ? '<span class="label">' . $item[1] . '</span>' : ''; ?>
                   <?php echo (!empty($item[4])) ? '<img src="' . $item[4] . '" class="watermark" />' : ''; ?>
                 </a>
                 <?php echo (!empty($item[2])) ? '<div class="col_01--b">' . $item[2] . '<span>' . $item[5] . '</span></div>' : ''; ?>
               </div>

             <?php endforeach; ?>
           </div>
           <!-- Add Pagination -->
           <div class="swiper-pagination"></div>

         </div>
       </div>
     </div>

   </div>
 </div>
 <!-- end of Swipe Gallery -->