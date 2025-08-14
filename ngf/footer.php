<?php
// Load strings.json
$strings = json_decode(file_get_contents('assets/values/strings.json'), true);
require_once 'assets/php/dotNotationHelper.php';
?>
<footer class="footer-ngf" style="background: #fff;">
  <div class="footer-main">
    <div class="footer-logo">
      <img src="assets/images/logo_ngf.svg" alt="NGF Logo" />
    </div>
    <nav class="footer-menu">
      <a href="#about-us"><?php echo getByDot($strings, 'footer.menu.about'); ?></a>
      <a href="#case-study"><?php echo getByDot($strings, 'footer.menu.case_study'); ?></a>
      <a href="#"><?php echo getByDot($strings, 'footer.menu.faq'); ?></a>
      <a href="#reach-us"><?php echo getByDot($strings, 'footer.menu.contact_us'); ?></a>
    </nav>
    <div class="footer-socmed">
      <a href="#" target="_blank"><img src="assets/images/ic_facebook.svg" alt="<?php echo getByDot($strings, 'footer.social_media.facebook'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_twitter.svg" alt="<?php echo getByDot($strings, 'footer.social_media.twitter'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_instagram.svg" alt="<?php echo getByDot($strings, 'footer.social_media.instagram'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_github.svg" alt="<?php echo getByDot($strings, 'footer.social_media.github'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_linkedIn.svg" alt="<?php echo getByDot($strings, 'footer.social_media.linkedin'); ?>" /></a>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="footer-copyright">
      <?php echo getByDot($strings, 'footer.copyright'); ?>
    </div>
    <div class="footer-socmed">
      <a href="#" target="_blank"><img src="assets/images/ic_facebook.svg" alt="<?php echo getByDot($strings, 'footer.social_media.facebook'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_twitter.svg" alt="<?php echo getByDot($strings, 'footer.social_media.twitter'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_instagram.svg" alt="<?php echo getByDot($strings, 'footer.social_media.instagram'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_github.svg" alt="<?php echo getByDot($strings, 'footer.social_media.github'); ?>" /></a>
      <a href="#" target="_blank"><img src="assets/images/ic_linkedIn.svg" alt="<?php echo getByDot($strings, 'footer.social_media.linkedin'); ?>" /></a>
    </div>
  </div>
</footer> 