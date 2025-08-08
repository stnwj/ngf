<?php
// Section Produk Konvergence
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/produk-konvergence-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div class="produk-bg">
  <div class="produk-konvergence-wrapper gap-75">
    <!-- Kolom kiri untuk konten -->
    <div class="produk-konvergence-content-kiri mt-70 ml-70 mr-75">
      <?php $badgeText = getByDot($strings, 'produk.konvergence.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
      <div class="mt-12">
        <?php
          $judulUtama = getByDot($strings, 'produk.konvergence.judul_utama');
          $judulStrip = getByDot($strings, 'produk.konvergence.judul_strip');
          $judulTebal = getByDot($strings, 'produk.konvergence.judul_tebal');
          include 'assets/php/komponen/judul_produk.php';
        ?>
      </div>
      <div class="caption-keterangan mt-50">
        <?php echo getByDot($strings, 'produk.konvergence.deskripsi'); ?>
      </div>
      <div class="fitur-list mt-50">
        <?php foreach (getByDot($strings, 'produk.konvergence.list_fitur') as $fitur): ?>
          <div class="fitur-list-item">
            <img src="assets/images/ic_story.svg" alt="icon" class="fitur-list-icon" />
            <span class="caption-keterangan"><?php echo htmlspecialchars($fitur); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-50">
        <?php
          $visitText = getByDot($strings, 'produk.konvergence.visit_text');
          $visitHref = '#';
          include 'assets/php/komponen/link_visit.php';
        ?>
      </div>
    </div>
    <div class="produk-konvergence-image-container w-595 h-770">
      <img src="assets/images/img_konvergence.png" alt="Produk Konvergence" class="produk-konvergence-img" />
    </div>
  </div>
</div> 