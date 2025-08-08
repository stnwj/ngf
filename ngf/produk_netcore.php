<?php
// Section Produk Netcore
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/produk-netcore-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div class="produk-bg">
  <div class="produk-netcore-wrapper gap-75">
    <!-- Kolom kiri untuk konten -->
    <div class="produk-netcore-content-kiri mt-70 ml-70 mr-75">
      <?php $badgeText = getByDot($strings, 'produk.netcore.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
      <div class="mt-12">
        <?php
          $judulUtama = getByDot($strings, 'produk.netcore.judul_utama');
          $judulStrip = getByDot($strings, 'produk.netcore.judul_strip');
          $judulTebal = getByDot($strings, 'produk.netcore.judul_tebal');
          include 'assets/php/komponen/judul_produk.php';
        ?>
      </div>
      <div class="caption-keterangan mt-50">
        <?php echo getByDot($strings, 'produk.netcore.deskripsi'); ?>
      </div>
      <div class="fitur-list mt-50">
        <?php foreach (getByDot($strings, 'produk.netcore.list_fitur') as $fitur): ?>
          <div class="fitur-list-item">
            <img src="assets/images/ic_story.svg" alt="icon" class="fitur-list-icon" />
            <span class="caption-keterangan"><?php echo htmlspecialchars($fitur); ?></span>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="mt-50">
        <?php
          $visitText = getByDot($strings, 'produk.netcore.visit_text');
          $visitHref = '#';
          include 'assets/php/komponen/link_visit.php';
        ?>
      </div>
    </div>
    <div class="produk-netcore-image-container w-595 h-770">
      <img src="assets/images/img_netcore_background.svg" alt="Produk Netcore" class="produk-netcore-img" />
      <div class="netcore-icon-overlay mt-70">
        <img src="assets/images/ic_netcore.svg" alt="Netcore Icon" class="netcore-icon" />
      </div>
      <div class="netcore-image-overlay mt-65">
        <img src="assets/images/img_netcore.png" alt="Netcore Image" class="netcore-image" />
      </div>
    </div>
  </div>
</div> 