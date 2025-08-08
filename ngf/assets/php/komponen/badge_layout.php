<?php
if (!isset($badgeText)) {
  $badgeText = '';
}
?>
<div class="badge badge-layout gap-8 py-12 px-16 radius-30 w-fit">
  <span class="badge-layout-text">
    <?php 
    // Split text to put star next to "Experience" on mobile
    $text = htmlspecialchars($badgeText);
    if (strpos($text, 'Experience') !== false) {
      $parts = explode('Experience', $text);
      echo $parts[0] . '<span class="experience-wrapper">Experience<span class="badge-layout-icon-mobile"></span></span>';
      if (isset($parts[1])) {
        echo $parts[1];
      }
    } elseif (strpos($text, 'Benchmarking Excellence in Every Interaction') !== false) {
      // Special handling for "Benchmarking Excellence in Every Interaction"
      echo 'Benchmarking Excellence in Every <span class="interaction-wrapper">Interaction<span class="badge-layout-icon-mobile"></span></span>';
    } else {
      // Untuk badge lain, bintang tetap muncul di akhir text
      echo $text . '<span class="badge-layout-icon-mobile"></span>';
    }
    ?>
  </span>
  <!-- Icon star untuk versi web -->
  <span class="badge-layout-icon"></span>
</div> 