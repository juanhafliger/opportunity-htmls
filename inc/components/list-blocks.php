<div class="d-flex flex-column flex-lg-row flex-wrap justify-content-start list-blocks list-blocks-4col">
  <?php foreach ($items as $item) : ?>
    <div class="d-flex flex-lg-column justify-content-start align-items-start">
      <span class="number"><?php echo $item['number']; ?></span>
      <span class="text"><?php echo $item['text']; ?></span>
    </div>
  <?php endforeach; ?>
</div>