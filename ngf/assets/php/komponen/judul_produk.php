<?php
if (!isset($judulUtama)) $judulUtama = '';
if (!isset($judulStrip)) $judulStrip = '';
if (!isset($judulTebal)) $judulTebal = '';
?>
<link rel="stylesheet" href="assets/css/judul-produk.css" />
<div class="produk-judul-besar">
  <div class="judul-baris-pertama">
    <span class="<?php echo (isset($noGradient) && $noGradient) ? 'judul-gradasi no-gradient' : 'judul-gradasi'; ?>"><?php echo htmlspecialchars($judulUtama); ?></span>
    <span class="<?php echo (isset($noGradient) && $noGradient) ? 'judul-strip with-gradient' : 'judul-strip'; ?>"><?php echo htmlspecialchars($judulStrip); ?></span>
  </div>
  <div class="judul-baris-kedua">
    <span class="judul-tebal"><?php echo htmlspecialchars($judulTebal); ?></span>
  </div>
</div> 

