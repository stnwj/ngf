<?php
// Include helper untuk akses strings (gunakan include_once untuk mencegah redeclare)
include_once 'assets/php/dotNotationHelper.php';
$strings = json_decode(file_get_contents('assets/values/strings.json'), true);
?>

<!-- Ecosystem Section -->
<div id="ecosystem" class="ml-70 mr-70 scroll-margin-top-25">
  <span class="judul-tebal ecosystem-title"><?php echo getByDot($strings, 'body.ecosystem.title'); ?></span>
  <div class="ecosystem-subtitle">
    <span class="text-gradient-red-purple" style="font-weight:700;"><?php echo getByDot($strings, 'body.ecosystem.subtitle'); ?></span>
  </div>
  <div class="caption-keterangan ecosystem-description">
    <?php echo getByDot($strings, 'body.ecosystem.description'); ?>
  </div>
  
  <!-- Ecosystem Features -->
  <div class="row mt-40 mb-40">
    <?php 
    $features = getByDot($strings, 'body.ecosystem.features');
    $icons = ['ic_layer.svg', 'ic_star.svg', 'ic_status_up.svg'];
    foreach ($features as $index => $feature): 
    ?>
    <div class="col-md-4 ecosystem-feature gap-16">
      <img src="assets/images/<?php echo $icons[$index]; ?>" alt="<?php echo $feature['title']; ?>" class="ecosystem-feature-icon w-40 h-40 mt-2" />
      <div class="ecosystem-feature-content">
        <div class="subjudul-ecosystem ecosystem-feature-title mb-4"><?php echo $feature['title']; ?></div>
        <div class="caption-keterangan ecosystem-feature-description mt-8"><?php echo $feature['description']; ?></div>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
</div> 