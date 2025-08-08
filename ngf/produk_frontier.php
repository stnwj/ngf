<?php
// Section Produk Frontier
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/produk-frontier-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div class="produk-bg">
  <div class="produk-frontier-wrapper gap-75">
    <!-- Kolom kiri untuk konten -->
    <div class="produk-frontier-content-kiri mt-70 ml-70">
      <?php $badgeText = getByDot($strings, 'produk.frontier.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
      <div class="mt-12">
        <?php
          $judulUtama = getByDot($strings, 'produk.frontier.judul_utama');
          $judulStrip = getByDot($strings, 'produk.frontier.judul_strip');
          $judulTebal = getByDot($strings, 'produk.frontier.judul_tebal');
          include 'assets/php/komponen/judul_produk.php';
        ?>
      </div>
      <div class="caption-keterangan mt-50">
        <?php echo getByDot($strings, 'produk.frontier.deskripsi'); ?>
      </div>
      <div class="fitur-list mt-50">
        <?php foreach (getByDot($strings, 'produk.frontier.list_fitur') as $fitur): ?>
          <div class="fitur-list-item">
            <img src="assets/images/ic_story.svg" alt="icon" class="fitur-list-icon" />
            <span class="caption-keterangan"><?php echo htmlspecialchars($fitur); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-50">
        <button class="btn btn-demo"><?php echo getByDot($strings, 'produk.frontier.visit_text'); ?></button>
      </div>
    </div>
    <div class="produk-frontier-image-container w-595 h-770">
      <img src="assets/images/img_background_frontier.jpg" alt="Produk Frontier" class="produk-frontier-img" />
      <div class="frontier-gradient-overlay"></div>
      <div class="frontier-logo-overlay">
        <img src="assets/images/ic_logo_frontier.svg" alt="Frontier Logo" class="frontier-logo" />
      </div>
    </div>
  </div>
</div> 