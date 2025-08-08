<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>NGF Project - Bootstrap Demo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/button-bootstrap.css" />
    <link rel="stylesheet" href="assets/css/global-font.css" />
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Plus Jakarta Sans Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;700&display=swap" rel="stylesheet">
    <!-- jQuery (LOAD SEBELUM CSS) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Custom Style CSS (PASTIKAN INI PALING BAWAH) -->
    <link rel="stylesheet" href="assets/css/general-style.css" />
    <link rel="stylesheet" href="assets/css/footer-ngf.css" />
    <link rel="stylesheet" href="assets/css/clients-slider.css" />
    <link rel="stylesheet" href="assets/css/dimens-style-optimized.css" />
    <!-- Badge Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/badge-bootstrap.css" />
    <!-- NGF Ecosystem CSS -->
    <link rel="stylesheet" href="assets/css/ngf-ecosystem-style.css" />
    <!-- About Us CSS -->
    <link rel="stylesheet" href="assets/css/about-us-style.css" />
    <!-- Mobile Responsive CSS -->
    <link rel="stylesheet" href="assets/css/mobile-responsive.css" />
  </head>
  <body class="body-bg-white">
    <?php 
    include_once 'assets/php/dotNotationHelper.php';
    $strings = json_decode(file_get_contents('assets/values/strings.json'), true);
    include 'header.php'; 
    ?>
    <!-- Garis bawah header -->
    <div class="container container-full-width">
      <div class="header-bottom-line"></div>
    </div>
    <div class="header-spacer"></div>
    <!-- END Header  -->

    <!-- Hero Section -->
    <section class="hero-section-custom py-5">
      <div class="container container-full-width">
        <div class="row align-items-start">
          <div class="col-12 col-lg-5 mb-4 mb-lg-0">
            <!-- Hero Badge -->
            <div class="hero-badge-container mb-3">
              <?php $badgeText = getByDot($strings, 'body.hero.badge_text'); include 'assets/php/komponen/badge_layout.php'; ?>
            </div>
            
            <!-- Hero Title -->
            <h1 class="fw-bold mb-3 judul-tebal hero-title">
              <?php echo getByDot($strings, 'body.hero.title_line1'); ?> <?php echo getByDot($strings, 'body.hero.title_line2'); ?> <span class="hero-title-gradient"><?php echo getByDot($strings, 'body.hero.title_gradient'); ?></span>.
            </h1>
            
            <!-- Hero Description -->
            <div class="hero-description">
              <img src="assets/images/arrow_right.svg" alt="arrow right" class="hero-arrow-icon" />
              <span class="caption-keterangan hero-description-text"><?php echo getByDot($strings, 'body.hero.description'); ?></span>
            </div>
            
            <!-- Hero Buttons -->
            <div class="hero-buttons d-flex flex-column flex-sm-row gap-3">
              <button class="btn btn-demo"><?php echo getByDot($strings, 'body.hero.button_primary'); ?></button>
              <button class="btn btn-outline-custom"><?php echo getByDot($strings, 'body.hero.button_secondary'); ?></button>
            </div>
          </div>
          
          <div class="col-12 col-lg-7 d-flex align-items-start justify-content-center justify-content-lg-end">
            <div class="hero-cards-container w-100">
              <!-- Card 1 dengan Waveform -->
              <div class="card-column">
                <!-- Waveform -->
                <div class="waveform-container">
                  <img src="assets/images/dummy_image1.jpg" alt="profile" class="waveform-profile" />
                  <img src="assets/images/sound1.svg" alt="waveform" class="waveform-sound" />
                </div>
                
                <!-- Card 1 -->
                <div class="card shadow-sm mb-3 mb-lg-0 custom-card-bg card-1">
                  <div class="card-body">
                    <div class="card-1-header">
                      <div class="card-1-title">
                        <?php echo getByDot($strings, 'body.hero.card1_title'); ?>
                      </div>
                      <div class="card-1-icon-container">
                        <img src="assets/images/arrow_right.svg" alt="arrow" class="card-1-arrow" />
                      </div>
                    </div>
                    <img src="assets/images/frame1.png" alt="Mockup 1" class="img-fluid card-1-image" />
                  </div>
                  <div class="card-1-bottom">
                    <img src="assets/images/piringan_hitam.png" alt="piringan hitam" class="card-1-disc" />
                    <img src="assets/images/sound2.png" alt="waveform" class="card-1-sound" />
                  </div>
                </div>
              </div>
              
              <!-- Card 2 -->
              <div class="card shadow-sm card-2">
                <div class="card-body card-2-body">
                  <!-- Background Image -->
                  <img src="assets/images/frame2.png" alt="avatar" class="card-2-background-image" />
                  
                  <div class="card-2-badges-top">
                    <div class="card-2-badge">
                      <img src="assets/images/ic_cpu.svg" alt="cpu" class="card-2-badge-icon" />
                      <?php echo getByDot($strings, 'body.hero.card2_badge1'); ?>
                    </div>
                    <div class="card-2-badge">
                      <img src="assets/images/ic_heart_circle.svg" alt="heart" class="card-2-badge-icon" />
                      <?php echo getByDot($strings, 'body.hero.card2_badge2'); ?>
                    </div>
                  </div>
                </div>
                
                <!-- Card 2 Bottom Badges -->
                <div class="card-2-badges-bottom">
                  <?php 
                  $badges = getByDot($strings, 'body.hero.card2_badges_bottom');
                  $chunks = array_chunk($badges, 3);
                  foreach ($chunks as $chunk): 
                  ?>
                  <div class="card-2-badges-row">
                    <?php foreach ($chunk as $badge): ?>
                    <div class="card-2-badge-green">
                      <span class="card-2-badge-text"><?php echo $badge; ?></span>
                    </div>
                    <?php endforeach; ?>
                  </div>
                  <?php endforeach; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <div class="mt-100"></div>
    <?php include 'our_clients.php'; ?>
    <div class="mt-150"></div>
    <?php include 'about_us.php'; ?>
    <div class="mt-120"></div>
    <?php include 'ngf_ecosystem.php'; ?>
    <div class="mt-150"></div>
    <?php include 'produk.php'; ?>
    <div class="mt-100"></div>
    <?php include 'case_study.php'; ?>
    <div class="mt-75"></div>
    <?php include 'reach_us.php'; ?>
    <div class="mt-75"></div>
    <script src="assets/js/accordion-custom.js"></script>
    <script src="assets/js/smooth-scroll.js"></script>
    <?php include 'footer.php'; ?>
  </body>
</html>
