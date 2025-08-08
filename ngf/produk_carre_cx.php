<?php
// Section Produk Carre CX
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/produk-carre-cx-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div class="produk-bg">
  <div class="produk-carre-cx-wrapper gap-75">
    <div class="produk-carre-cx-image-container w-595 h-770">
      <img src="assets/images/img_carre_cx_background.jpg" alt="Produk Carre CX" class="produk-carre-cx-img" />
      <div class="carre-logo-overlay ml-40 mt-40">
        <img src="assets/images/ic_logo_carre.png" alt="Carre Logo" class="carre-logo" />
      </div>
    </div>
    <!-- Kolom kanan untuk konten -->
    <div class="produk-carre-cx-content-kanan mt-70 mr-70">
      <?php $badgeText = getByDot($strings, 'produk.carre_cx.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
      <div class="mt-12">
        <?php
          $judulUtama = getByDot($strings, 'produk.carre_cx.judul_utama');
          $judulStrip = getByDot($strings, 'produk.carre_cx.judul_strip');
          $judulTebal = getByDot($strings, 'produk.carre_cx.judul_tebal');
          include 'assets/php/komponen/judul_produk.php';
        ?>
      </div>
      <div class="caption-keterangan mt-50">
        <?php echo getByDot($strings, 'produk.carre_cx.deskripsi'); ?>
      </div>
      <div class="fitur-list mt-50">
        <?php foreach (getByDot($strings, 'produk.carre_cx.list_fitur') as $fitur): ?>
          <div class="fitur-list-item">
            <img src="assets/images/ic_story.svg" alt="icon" class="fitur-list-icon" />
            <span class="caption-keterangan"><?php echo htmlspecialchars($fitur); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-50">
        <?php
          $visitText = getByDot($strings, 'produk.carre_cx.visit_text');
          $visitHref = '#';
          include 'assets/php/komponen/link_visit.php';
        ?>
      </div>
    </div>
  </div>
</div> 