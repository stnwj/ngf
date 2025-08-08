<?php
// Section Hera
// Load strings from JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<div class="produk-bg">
  <div class="produk-hera-wrapper gap-75">
    <div class="produk-hera-image-container">
      <img src="assets/images/ic_logo_hera.svg" alt="Logo Hera" class="logo-hera-absolute" />
      <img src="assets/images/img_robot.png" alt="Robot Hera" class="robot-hera-img" />
      <img src="assets/images/img_dashboard.svg" alt="Dashboard Hera" class="dashboard-img" />
      <img src="assets/images/background_hera.svg" alt="Produk Hera" class="produk-hera-img" />
    </div>
    <div class="produk-hera-content-kanan mt-70 mr-70">
      <div>
        <?php $badgeText = getByDot($strings, 'produk.hera.oval_text'); include __DIR__ . '/assets/php/komponen/badge_layout.php'; ?>
      </div>
      <?php
        $judulUtama = getByDot($strings, 'produk.hera.judul_utama');
        $judulStrip = getByDot($strings, 'produk.hera.judul_strip');
        $judulTebal = getByDot($strings, 'produk.hera.judul_tebal');
        include __DIR__ . '/assets/php/komponen/judul_produk.php';
      ?>
      <!-- Section Accordion Slicing -->
      <div class="mt-40">
        <div class="collapse-item-clik collapse-item-style produk-hera-accordion-item">
          <div>
            <div class="judul-collapse-item-style"><?php echo getByDot($strings, 'produk.hera.accordion.0.title'); ?></div>
            <div class="custom-accordion-content caption-keterangan"><?php echo getByDot($strings, 'produk.hera.accordion.0.content'); ?></div>
          </div>
          <button class="custom-accordion-toggle icon-plus-minus-style">
            <img src="assets/images/ic_circle_minus.svg" alt="minus" class="custom-accordion-icon" />
          </button>
        </div>
        <div class="collapse-item-clik collapse-item-style produk-hera-accordion-item">
          <div>
            <div class="judul-collapse-item-style"><?php echo getByDot($strings, 'produk.hera.accordion.1.title'); ?></div>
            <div class="custom-accordion-content caption-keterangan"><?php echo getByDot($strings, 'produk.hera.accordion.1.content'); ?></div>
          </div>
          <button class="custom-accordion-toggle icon-plus-minus-style">
            <img src="assets/images/ic_circle_plus.svg" alt="plus" class="custom-accordion-icon" />
          </button>
        </div>
      </div>
      <div class="mt-40">
        <?php
          $visitText = getByDot($strings, 'produk.hera.visit_text');
          $visitHref = '#';
          include __DIR__ . '/assets/php/komponen/link_visit.php';
        ?>
      </div>
    </div>
  </div>
</div> 