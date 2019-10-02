<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Relatórios</title>
  <?php include('inc/head.php'); ?>
</head>

<body class="static">

  <?php include('inc/header.php'); ?>

  <?php
  includeFileWithVariables("inc/components/titles.php", array(
    'title' => '<h1 class="header-title">Relatórios</h1>',
    'suptitle' => '',
    'divider' => 'none',
    'type' => 'header',
  ));
  ?>

  <?php
  includeFileWithVariables("inc/components/panel.php", array(
    'title' => '<h1 class="header-title">Relatórios</h1>'
  ));
  ?>

  <?php include('inc/footer.php'); ?>
  <?php include('inc/menu-mobile.php'); ?>
  <?php include('inc/js.php'); ?>
  <!-- end of content -->


  <!-- podcast js-->
  <script src="assets/js/podcast.js"></script>
  <!-- /podcast js-->

  <script>

    $('.dropdown-toggle').dropdown();
    $('.dropdown-menu .nav-item.nav-link').on('click', function() {
      $(this).parent().parent().find('.dropdown-toggle').html($(this).html());
    });

    
  // Initialize Swiper Gallery Component
  
    $(".swiper-container").each(function(index, element) {
      var $this = $(this);
      var itemsPerColumn = $this.attr('data-items-per-column');
      var swiper = new Swiper(this, {
        slidesPerView: 4,
        spaceBetween: 20,
        slidesPerColumn: itemsPerColumn,
        pagination: {
          el: '.swiper-pagination',
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 10,
            slidesPerColumn: 1,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 20,
            slidesPerColumn: 1,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 20,
            simulateTouch: false
          },
        }
      });
    });
  </script>





</body>

</html>