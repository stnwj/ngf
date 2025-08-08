<?php
// Include helper untuk akses strings (gunakan include_once untuk mencegah redeclare)
include_once 'assets/php/dotNotationHelper.php';
$strings = json_decode(file_get_contents('assets/values/strings.json'), true);
?>

<!-- About Section -->
<div id="about-us" class="about-badge-container scroll-margin-top-25">
  <?php $badgeText = getByDot($strings, 'body.about.badge_text'); include 'assets/php/komponen/badge_layout.php'; ?>
</div>

<div class="about-content">
  <div class="row align-items-center">
    <div class="col-12 col-lg-6">
      <div class="about-title-container">
        <span class="judul-tebal about-title"><?php echo getByDot($strings, 'body.about.title_line1'); ?></span>
        <span class="about-title-gradient"><?php echo getByDot($strings, 'body.about.title_line2'); ?></span>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <div class="about-image-container">
        <div class="about-image"></div>
        <div class="caption-keterangan about-description">
          <?php echo getByDot($strings, 'body.about.description'); ?>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Accordion Section -->
<div class="accordion-section">
  <div class="row">
    <div class="col-12 col-lg-6">
      <!-- Accordion Items -->
      <div class="accordion-container">
        <?php 
        $accordionItems = getByDot($strings, 'body.about.accordion_items');
        foreach ($accordionItems as $index => $item): 
        ?>
        <div class="collapse-item-clik collapse-item-style">
          <div>
            <div class="judul-collapse-item-style"><?php echo $item['title']; ?></div>
            <div class="custom-accordion-content caption-keterangan"><?php echo $item['content']; ?></div>
          </div>
          <button class="custom-accordion-toggle icon-plus-minus-style">
            <img src="assets/images/ic_circle_<?php echo $index === 0 ? 'minus' : 'plus'; ?>.svg" alt="<?php echo $index === 0 ? 'minus' : 'plus'; ?>" class="custom-accordion-icon" />
          </button>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="col-12 col-lg-6">
      <!-- Accordion Image -->
      <div class="accordion-image-container">
        <img src="assets/images/dummy_image2.jpg" alt="dummy besar" class="accordion-image" />
      </div>
    </div>
  </div>
</div> 