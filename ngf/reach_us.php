<?php
// Section Reach Us
// Load strings dari JSON
$strings = json_decode(file_get_contents(__DIR__ . '/assets/values/strings.json'), true);
require_once __DIR__ . '/assets/php/dotNotationHelper.php';
?>
<link rel="stylesheet" href="assets/css/reach-us-style.css" />
<link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />

<div id="reach-us" class="ml-70 scroll-margin-top-25">
  <div class="reach-us-content">
    <?php $badgeText = getByDot($strings, 'body.reach_us.oval_text'); include 'assets/php/komponen/badge_layout.php'; ?>
    <div class="mt-20">
      <?php
        $judulUtama = getByDot($strings, 'body.reach_us.judul_utama');
        $judulStrip = getByDot($strings, 'body.reach_us.judul_strip');
        // Custom judul dua baris khusus reach_us.php
      ?>
      <div class="produk-judul-besar">
        <div class="judul-baris-pertama">
          <span class="judul-strip" style="color:#141522;"><?php echo htmlspecialchars($judulUtama); ?></span>
        </div>
        <div class="judul-baris-kedua">
          <span class="judul-strip with-gradient"><?php echo htmlspecialchars($judulStrip); ?></span>
        </div>
      </div>
    </div>
    <form class="contact-form" method="POST" action="#">
      <div class="textfield-group mt-50">
        <div class="textfield-row">
          <?php
            $placeholder = 'Your Name';
            $name = 'name';
            $id = 'name';
            include 'assets/php/komponen/textfield.php';
          ?>
          <?php
            $placeholder = 'Email Address';
            $name = 'email';
            $id = 'email';
            include 'assets/php/komponen/textfield.php';
          ?>
          <?php
            $placeholder = 'Phone Number (optional)';
            $name = 'phone';
            $id = 'phone';
            include 'assets/php/komponen/textfield.php';
          ?>
        </div>
      </div>
      <div class="textarea-section mt-50">
        <?php
          $placeholder = 'Message';
          $name = 'message';
          $id = 'message';
          $rows = 4;
          include 'assets/php/komponen/textarea.php';
        ?>
      </div>
      <div class="button-section mt-48">
        <button type="submit" class="btn btn-demo">Contact Us</button>
      </div>
    </form>
  </div>
</div> 