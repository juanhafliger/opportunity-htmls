<!-- Slogan Component -->
<div id="section-slogan-block" class="container-fluid bg-primary-green">
  <div class="container">
    <div class="row">
      <?php switch ($space):
        case 'quem-somos':
          ?>
          <div class="col-12 col-lg-7 slogan-block d-flex align-items-start justify-content-start">
            <h3 class="w-100"><?php echo $title; ?></h3>
          </div>
        <?php break;
        default: ?>
          <div class="col-12 col-lg-10 slogan-block d-flex align-items-end justify-content-start">
            <h3 class="w-100"><?php echo $title; ?></h3>
          </div>
        <?php endswitch; ?>

    </div>
  </div>
</div>
<!-- End of Slogan Component -->