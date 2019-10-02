 <!-- Content In Columns Component -->
 <div class="container-fluid cp-content-in-columns <?php echo (!empty($style)) ? $style : ''; ?>">
   <div class="container <?php echo (!empty($title)) ? 'divider' : 'divider no-title'; ?> <?php echo (!empty($divider)) ? $divider : ''; ?> <?php echo (!empty($isLastBlock)) ? 'pb-0 mb-0' : ''; ?>">


     <?php if (!empty($title)) : ?>
       <div class="row">
         <div class="col-12">
           <?php echo $title; ?>
         </div>
       </div>
     <?php endif; ?>


     <?php if (!empty($style)) : ?>

       <div class="row">

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?> d-flex flex-column">
           <?php echo (!empty($col_01[0])) ? '<div class="col_01--a">' . $col_01[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_01[1])) ? '<div class="col_01--b">' . $col_01[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_01[2])) ? '<div class="col_01--c">' . $col_01[2] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[3])) ? '<div class="col_02--c">' . $col_01[3] . '</div>' : ''; ?>

         </div>

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?> d-flex flex-column">
           <?php echo (!empty($col_02[0])) ? '<div class="col_02--a">' . $col_02[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[1])) ? '<div class="col_02--b">' . $col_02[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[2])) ? '<div class="col_02--c">' . $col_02[2] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[3])) ? '<div class="col_02--c">' . $col_02[3] . '</div>' : ''; ?>
         </div>

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?> d-flex flex-column">
           <?php echo (!empty($col_03[0])) ? '<div class="col_03--a">' . $col_03[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_03[1])) ? '<div class="col_03--b">' . $col_03[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_03[2])) ? '<div class="col_03--c">' . $col_03[2] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[3])) ? '<div class="col_02--c">' . $col_03[3] . '</div>' : ''; ?>

         </div>



       </div>

     <?php else : ?>
       <div class="row">

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?>">
           <?php echo (!empty($col_01[0])) ? '<div class="col_01--a">' . $col_01[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_01[1])) ? '<div class="col_01--b">' . $col_01[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_01[2])) ? '<div class="col_01--c">' . $col_01[2] . '</div>' : ''; ?>
         </div>

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?>">
           <?php echo (!empty($col_02[0])) ? '<div class="col_02--a">' . $col_02[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[1])) ? '<div class="col_02--b">' . $col_02[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_02[2])) ? '<div class="col_02--c">' . $col_02[2] . '</div>' : ''; ?>
         </div>

         <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?>">
           <?php echo (!empty($col_03[0])) ? '<div class="col_03--a">' . $col_03[0] . '</div>' : ''; ?>
           <?php echo (!empty($col_03[1])) ? '<div class="col_03--b">' . $col_03[1] . '</div>' : ''; ?>
           <?php echo (!empty($col_03[2])) ? '<div class="col_03--c">' . $col_03[2] . '</div>' : ''; ?>
         </div>

         <?php if (!empty($col_04[1]) || !empty($col_04[2])) : ?>
           <div class="<?php echo (!empty($size_column)) ? 'col-12 col-lg-' . $size_column : 'col-12 col-md-4'; ?> <?php echo (!empty($side_by_side)) ? 'side-by-side-mobile' : ''; ?>">
             <?php echo (!empty($col_04[0])) ? '<div class="col_03--a">' . $col_04[0] . '</div>' : ''; ?>
             <?php echo (!empty($col_04[1])) ? '<div class="col_03--b">' . $col_04[1] . '</div>' : ''; ?>
             <?php echo (!empty($col_04[2])) ? '<div class="col_03--c">' . $col_04[2] . '</div>' : ''; ?>
           </div>
         <?php endif; ?>

       </div>
     <?php endif; ?>


   </div>
 </div>
 <!-- end of Content In Columns Component -->