 <!-- Text and Numbers Component -->
 <div class="container-fluid cp-text-and-numbers">
   <div class="container divider">
     <div class="row">

       <?php if ($cols == 'text-numbers') : ?>

         <div class="col-12 col-md-5">
           <?php echo $text ?>
         </div>

         <div class="col-12 col-md-7">
           <div class="d-flex flex-wrap flex-lg-nowrap justify-content-start  justify-content-lg-center  align-items-center <?php echo $numbers[0]; ?>">
             <div class="pr-2 px-lg-2 <?php echo $numbers[0]; ?>--b">
               <div class="<?php echo $numbers[0]; ?>--a"><?php echo $numbers[1]; ?></div>
               <?php echo $numbers[2]; ?>
             </div>
             <div class="pr-2 px-lg-2 <?php echo $numbers[0]; ?>--c"><?php echo $numbers[3]; ?></div>
             <div class="pl-lg-4 pr-lg-3 <?php echo $numbers[0]; ?>--d"><?php echo $numbers[4]; ?></div>
           </div>
         </div>

       <?php endif; ?>


     </div>
   </div>
 </div>
 </div>
 <!-- end of Text and Numbers Component -->