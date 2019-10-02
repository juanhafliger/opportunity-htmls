<div class="Xtable <?php echo $columns ? 'Xtable--'.$columns.'cols' : ''; ?> Xtable--collapse">

  <?php foreach ($items as $item) : ?>
    <div style="order: <?php echo $item['order']; ?>" class="Xtable-cell <?php echo $item['type'] == 'head' ? 'Xtable-cell--head' : ''; ?> <?php echo $item['type'] == 'foot' ? 'Xtable-cell--foot' : ''; ?>">
      <a href="#">
        <?php echo $item['pre'] ? '<div class="pre">' . $item['pre'] . '</div>' : ''; ?>
        <?php echo $item['pre-small'] ? '<div class="pre small">' . $item['pre-small'] . '</div>' : ''; ?>
        <?php echo $item['title'] ? '<div class="title">' . $item['title'] . '</div>' : ''; ?>
      </a>
    </div>
  <?php endforeach; ?>
</div>