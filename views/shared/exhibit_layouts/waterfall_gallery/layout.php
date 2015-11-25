<!-- <div class="container exhibit"> -->
  <!-- <article> -->
    <!-- <div class="col-md-8 col-md-offset-2"> -->
      <!-- <div class="article-content"> -->
      </div>
    </div>
  </article>
</div>

<div class="gallery">
  <?php foreach  ($attachments as $attachment): ?>
    <?php 
      $item = $attachment->getItem();
      $itemLink = record_url($item);
      $itemImageTag = item_image('square_thumbnail', array(), 0, $item);
      $itemTitle = metadata($item, array('Dublin Core', 'Title'));
      $itemDescription = metadata($item, array('Dublin Core', 'Description'), array('snippet'=>250));
      $itemTags = tag_string($item, 'items/browse', '');
    ?>
    <div class="exhibit-item" onclick="window.location='<?php echo $itemLink ?>'">
      <?php echo $itemImageTag; ?>
      <h1><?php echo $itemTitle; ?></h1>
      <p><?php echo $itemDescription; ?></p>
      <div class="tags"><?php echo $itemTags; ?></div>
    </div>
  <?php endforeach ?>
</div>

<script type="text/javascript">
  jQuery(document).ready(function () {
    // init Masonry
    var $grid = $('.gallery').masonry({
      itemSelector: '.exhibit-item',
      columnWidth: '.exhibit-item',
      gutter: 30
    });
    // layout Isotope after each image loads
    $grid.imagesLoaded().progress( function() {
      $grid.masonry();
    }); 
    
  });
</script>

<!-- close div wrappers in exhibit/show.php -->
<div>
  <article>
    <div>
      <div>
