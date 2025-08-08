<!-- Our Esteemed Clients -->
<?php
$jsonContent = file_get_contents('assets/values/strings.json');
$strings = json_decode($jsonContent, true);
$ourClientsData = $strings['body']['our_clients'];
?>
  <div class="clients-slider-wrapper">
    <div class="caption-keterangan"><?php echo $ourClientsData['judul']; ?></div>
    <div class="owl-carousel clients-carousel owl-theme">
    <div class="item"><img src="assets/images/client_bca.svg" alt="BCA" /></div>
    <div class="item"><img src="assets/images/client_adira.svg" alt="Adira" /></div>
    <div class="item"><img src="assets/images/client_permata.svg" alt="Permata" /></div>
    <div class="item"><img src="assets/images/client_commonwealth.svg" alt="Commonwealth" /></div>
    <div class="item"><img src="assets/images/client_danamon.svg" alt="Danamon" /></div>
    <div class="item"><img src="assets/images/client_jne.svg" alt="JNE" /></div>
    <div class="item"><img src="assets/images/client_tiki.svg" alt="TIKI" /></div>
    <div class="item"><img src="assets/images/client_avrist.svg" alt="Avrist" /></div>
    <div class="item"><img src="assets/images/client_aia.svg" alt="AIA" /></div>
    <div class="item"><img src="assets/images/client_bjb.svg" alt="BJB" /></div>
  </div>
</div>
<!-- Owl Carousel CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
<!-- Owl Carousel JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!-- Custom Clients Carousel JS -->
<script src="assets/js/clients-carousel.js"></script>
 