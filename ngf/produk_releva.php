<?php
// Section Produk Releva
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/produk-releva-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div class="produk-bg">
  <div class="produk-releva-wrapper gap-75">
    <div class="produk-releva-image-container w-595 h-770">
      <img src="assets/images/img_produk_releva.png" alt="Produk Releva" class="produk-releva-img" />
    </div>
    <div class="produk-releva-content-kanan mt-70 mr-70">
      <?php $badgeText = getByDot($strings, 'produk.releva.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
      <div class="mt-12">
        <?php
          $judulUtama = getByDot($strings, 'produk.releva.judul_utama');
          $judulStrip = getByDot($strings, 'produk.releva.judul_strip');
          $judulTebal = getByDot($strings, 'produk.releva.judul_tebal');
          include 'assets/php/komponen/judul_produk.php';
        ?>
      </div>
      <div class="caption-keterangan mt-50">
        <?php echo getByDot($strings, 'produk.releva.deskripsi'); ?>
      </div>
      <div class="fitur-list mt-50">
        <?php foreach (getByDot($strings, 'produk.releva.list_fitur') as $fitur): ?>
          <div class="fitur-list-item">
            <img src="assets/images/ic_story.svg" alt="icon" class="fitur-list-icon" />
            <span class="caption-keterangan"><?php echo htmlspecialchars($fitur); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-50">
        <?php
          $visitText = getByDot($strings, 'produk.releva.visit_text');
          $visitHref = '#';
          include 'assets/php/komponen/link_visit.php';
        ?>
      </div>
    </div>
  </div>
</div> 