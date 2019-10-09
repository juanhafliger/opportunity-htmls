<!-- Modal -->
<div class="modal fade modal-component" id="<?php echo $modalID; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modalID; ?>Label" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <a href="javascript:;" class="close-modal" data-dismiss="modal"><img src="assets/images/icons/close-modal.svg" alt="" /></a>

      <div class="modal-header d-flex flex-column">
        <h2 class="modal-title" id="<?php echo $modalID; ?>Label"><?php echo $title; ?></h2>
        <h3 class="modal-subtitle"><?php echo $subtitle; ?><h3>
      </div>
      <div class="modal-body">
        <?php echo $content; ?>
      </div>
    </div>
  </div>
</div>