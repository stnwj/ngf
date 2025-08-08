<?php
// Section Case Study
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/case-study-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
<div id="case-study" class="case-study-wrapper scroll-margin-top-25">
  <div class="case-study-image-container">
    <img src="assets/images/img_case_study.png" alt="Case Study" class="case-study-img" />
  </div>
  <div class="case-study-content ml-55 mt-70 mr-70">
    <?php $badgeText = getByDot($strings, 'body.case_study.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
    <div class="mt-20">
      <?php
        $judulUtama = getByDot($strings, 'body.case_study.judul_utama');
        $judulStrip = getByDot($strings, 'body.case_study.judul_strip');
        $judulTebal = getByDot($strings, 'body.case_study.judul_tebal');
        $noGradient = true; // tambahkan flag khusus
        include 'assets/php/komponen/judul_produk.php';
      ?>
    </div>
    <div class="case-study-subtitle mt-4">
      <?php echo getByDot($strings, 'body.case_study.subtitle'); ?>
    </div>
    <div class="caption-keterangan mt-50">
      <?php
        $description = getByDot($strings, 'body.case_study.deskripsi');
        $paragraphs = explode("\n\n", $description);
        foreach ($paragraphs as $paragraph) {
          echo '<p>' . htmlspecialchars($paragraph) . '</p>';
        }
      ?>
    </div>
  </div>
</div> 