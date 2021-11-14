<?php
header('Pragma: public');
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");                  // Date in the past   
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');     // HTTP/1.1
header('Cache-Control: pre-check=0, post-check=0, max-age=0', false);    // HTTP/1.1
header("Pragma: no-cache");
header("Expires: 0", false);
// header("Cache-Control: max-age=31536000");
$data = require_once('languages.php');
$ru = $data['ru'];
$en = $data['en'];
$lang = $_GET['lang'] === 'ru' ? $ru : $en;
?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $lang['title'] ?></title>
  <link href="./css/style.css" rel="preload" as="style" onload="this.rel='stylesheet'">
  <link rel="preload" href="./fonts/ValueSansPro-Regular.woff" as="font" type="font/woff" crossorigin>
  <link rel="preload" href="./fonts/ValueSansPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <!-- <noscript>
    <link rel="stylesheet" href="./css/style.css">
  </noscript> -->
</head>

<body>
  <header class="header" id="top-arrow">
    <div class="wrapper">
      <a href="https://timoshenkokseniia.ru/" class="header-logo">
        <svg width="42" height="41" viewBox="0 0 42 41" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M0 20.4466C0 9.40094 8.9543 0.329102 20 0.329102H41.2288V20.5642C41.2288 31.6099 32.2745 40.5642 21.2288 40.5642H20C8.95431 40.5642 0 31.4923 0 20.4466Z" fill="#8643DC" />
          <path d="M16.4915 10.3291C16.4915 4.80625 20.9687 0.329102 26.4915 0.329102H41.2288V13.4643C41.2288 18.9871 36.7516 23.4643 31.2288 23.4643H16.4915V10.3291Z" fill="#FF59C1" />
          <path d="M19.4165 22.0854L16.5965 25.0254V30.3354H11.7665V9.33545H16.5965V19.1454L25.8965 9.33545H31.2965L22.5965 18.6954L31.8065 30.3354H26.1365L19.4165 22.0854Z" fill="white" />
        </svg>
      </a>
      <nav class="nav">
        <ul class="nav-bar">
          <?php foreach ($lang['nav-link'] as $key => $value) { ?>
            <li><a href="#<?= $en['nav-link'][$key] ?>" class="nav-link"><?= $value ?></a></li>
          <?php } ?>
        </ul>
      </nav>
      <div class="lang">
        <a href="" data-lang="ru" class="lang-item"><span>ru</span></a>
        <a href="" data-lang="en" class="lang-item"><span>en</span></a>
      </div>
      <button class="menu-mobile-btn">
        <span class="menu-mobile-container">
          <span class="menu-mobile-item"></span>
          <span class="menu-mobile-item"></span>
          <span class="menu-mobile-item"></span>
        </span>
      </button>
    </div>
    <!-- /.wrapper -->
    <div class="menu-mobile">
      <nav>
        <ul class="nav-bar-mobile">
          <?php foreach ($lang['nav-link'] as $key => $value) { ?>
            <li data-menu="<?= $en['nav-link'][$key] ?>">
              <a href="#<?= $en['nav-link'][$key] ?>" class="nav-link-mobile"><?= $value ?></a>
            </li>
          <?php } ?>
        </ul>
      </nav>
    </div>
    <!-- /.menu-mobile -->
  </header>
  <!-- /.header -->
  <main class="welcome-section" id="about">
    <div class="wrapper">
      <h2 class="welcome-title"><?= $lang['welcome-title'] ?></h2>
      <!-- /.welcome-title -->
      <div class="welcome-content"><?= $lang['welcome-content'] ?></div>
      <!-- /.welcome-content -->
      <div class="pseudo-group">
        <div class="pseudo-group-item pseudo_01">
          <img src="./img/pseudo_01.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_02">
          <img src="./img/pseudo_02.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_03">
          <img src="./img/pseudo_03.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_04">
          <img src="./img/pseudo_04.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_05">
          <img src="./img/pseudo_05.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_06">
          <img src="./img/pseudo_06.svg" alt="" class="pseudo-img">
        </div>
        <div class="pseudo-group-item pseudo_07">
          <img src="./img/pseudo_07.svg" alt="" class="pseudo-img">
        </div>
      </div>
      <!-- /.pseudo-group -->
    </div>
    <!-- /.wrapper -->
  </main>
  <!-- /.welcome-section -->
  <section class="experience" id="experience">
    <div class="wrapper">
      <div class="experience-header">
        <div class="experience-header-info">
          <h2 class="experience-header-title"><?= $lang['experience-title'] ?></h2>
          <!-- /.experience-header-title -->
          <div class="experience-header-description"><?= $lang['experience-description'] ?></div>
          <!-- /.experience-header-description -->
        </div>
        <!-- /.experience-header-info -->
        <div class="experience-header-achievements">
          <span class="experience-header-achievements-text"><?= $lang['experience-achievement'] ?></span>
          <a href="#" class="experience-header-achievements-button">
            <img src="./img/education.svg" alt="More: my education" id="experience-header-achievements-button">
          </a>
        </div>
        <!-- /.experience-header-achievements -->
      </div>
      <!-- /.experience-header -->
      <div class="experience-content">
        <a href="#" class="experience-stack css3">
          <img src="./img/css.svg" alt="CSS3" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack html5">
          <img src="./img/html.svg" alt="HTML5" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack js">
          <img src="./img/javascript.svg" alt="JavaScript" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack git">
          <img src="./img/github.svg" alt="GitHub" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack bootstrap">
          <img src="./img/bootstrap.svg" alt="Bootstrap" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack figma">
          <img src="./img/figma.svg" alt="Figma" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack avocode">
          <img src="./img/avocode.svg" alt="Avocode" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack jq">
          <img src="./img/jquery.svg" alt="jQuery" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack jq-ui">
          <img src="./img/jquery-ui.svg" alt="jQuery UI" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack php">
          <img src="./img/php.svg" alt="PHP" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack psd">
          <img src="./img/photoshop.svg" alt="PhotoShop" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack sass">
          <img src="./img/sass.svg" alt="Sass" class="experience-stack-img">
        </a>
        <a href="#" class="experience-stack webpack">
          <img src="./img/webpack.svg" alt="Webpack" class="experience-stack-img">
        </a>
      </div>
      <!-- /.experience-content -->
    </div>
    <!-- /.wrapper -->
    <div class="modal-experience">
      <div class="overlay">
        <div class="container">
          <div class="content">
            <img src="./img/certificate.png" alt="certificate" class="content-slide">
            <img src="./img/diploma.png" alt="diploma" class="content-slide">
            <img src="./img/jq.png" alt="jq" class="content-slide">
            <img src="./img/web.png" alt="web" class="content-slide">
            <img src="./img/fcc_web.png" alt="fcc_web" class="content-slide">
            <img src="./img/js.png" alt="js" class="content-slide">
            <img src="./img/fcc_js.png" alt="fcc_js" class="content-slide">
          </div>
          <div class="sub-content">
            <div class="sub-content-slide sub-active" data-info="certificate" style="background-image: url('./img/certificate.png');"></div>
            <div class="sub-content-slide" data-info="diploma" style="background-image: url('./img/diploma.png');"></div>
            <div class="sub-content-slide" data-info="jq" style="background-image: url('./img/jq.png');"></div>
            <div class="sub-content-slide" data-info="web" style="background-image: url('./img/web.png');"></div>
            <div class="sub-content-slide" data-info="fcc_web" style="background-image: url('./img/fcc_web.png');"></div>
            <div class="sub-content-slide" data-info="js" style="background-image: url('./img/js.png');"></div>
            <div class="sub-content-slide" data-info="fcc_js" style="background-image: url('./img/fcc_js.png');"></div>
          </div>
        </div>
        <button class="overlay-btn">
          <span class="overlay-container">
            <span class="overlay-item overlay-item-first"></span>
            <span class="overlay-item overlay-item-second"></span>
          </span>
        </button>
      </div>
    </div>
    <!-- /.modal-experience -->
  </section>
  <!-- /.experience -->
  <section class="experience-extra">
    <div class="experience-extra-bg"></div>
    <div class="wrapper">
      <h2 class="experience-extra-title"><?= $lang['experience-extra-title'] ?></h2>
      <div class="experience-extra-container">
        <?php foreach ($lang['experience-extra-content'] as $key => $value) { ?>
          <div class="experience-extra-container-item <?= $key ?>">
            <img src="./img/<?= $key ?>.png" alt="" class="experience-extra-img">
            <div class="experience-extra-text"><?= $value ?></div>
          </div>
        <?php } ?>
        <!-- /.experience-extra-container-item -->
      </div>
      <!-- /.experience-extra-container -->
    </div>
    <!-- /.wrapper -->
  </section>
  <!-- /.experience-extra -->
  <section class="projects" id="projects">
    <div class="wrapper">
      <h2 class="projects-title"><?= $lang['projects-title'] ?></h2>
      <div class="projects-container">
        <div class="slider">
          <?php foreach ($lang['projects-content'] as $key => $value) { ?>
            <div class="slide slide-<?= $key + 1 ?>">
              <img src="./img/<?= $value['img'] ?>.png" alt="">
              <div class="projects-content-description">
                <a href="https://github.com/KsyTim/<?= $value['git-link'] ?>" class="projects-content-description__github" target="_blank" rel="noopener noreferrer">
                  <img src="./img/footer-github.svg" alt="Github">
                </a>
                <a href="#" class="projects-content-title"><?= $value['projects-content-title'] ?></a>
                <div class="projects-content-text">
                  <div class="projects-content-technologies"><?= $value['projects-content-technologies'] ?></div>
                  <div class="projects-content-more"><?= $value['projects-content-more'] ?></div>
                </div>
                <!-- /.projects-content-text -->
                <a href="https://timoshenkokseniia.ru/<?= $value['img'] ?>/" class="projects-content-button" target="_blank" rel="noopener noreferrer"><?= $value['projects-content-button'] ?></a>
              </div>
              <!-- /.projects-content-description -->
            </div>
          <?php } ?>
        </div>
      </div>
      <!-- /.slider -->
    </div>
    <!-- /.projects-container -->
  </section>
  <!-- /.projects -->
  <section class="contact" id="contacts">
    <div class="experience-extra-bg"></div>
    <div class="wrapper">
      <h2 class="experience-header-title contact-title"><?= $lang['contact-title'] ?></h2>
      <p class="contact-info"><?= $lang['contact-info'] ?></p>
      <form action="./sendMail.php" method="POST" class="contact-form">
        <?php foreach ($lang['contact-form-input'] as $key => $value) { ?>
          <input type="<?= $key ?>" name="<?= $value['name'] ?>" id="<?= $value['id'] ?>" placeholder="<?= $value['placeholder'] ?>" class="contact-form-item">
        <?php } ?>
        <textarea name="<?= $lang['contact-form-textarea']['name'] ?>" id="<?= $lang['contact-form-textarea']['id'] ?>" cols="30" rows="10" placeholder="<?= $lang['contact-form-textarea']['placeholder'] ?>" class="contact-form-item"></textarea>
        <div class="contact-form-fill"></div>
        <button class="contact-form-button" type="submit"><?= $lang['contact-form-button'] ?></button>
      </form>
    </div>
  </section>
  <!-- /.contact -->
  <footer class="footer">
    <div class="wrapper footer-container">
      <div class="footer-item footer-links">
        <a href="https://github.com/KsyTim" class="footer-link" target="_blank" rel="noopener noreferrer">
          <img src="./img/footer-github.svg" alt="Footer: GitHub" class="footer-link-pic">
        </a>
        <a href="mailto:timoshenko.ksenia.1998@gmail.com?subject=<?= $lang['email-subject'] ?>" class="footer-link" target="_blank" rel="noopener noreferrer">
          <img src="./img/footer-email.svg" alt="Footer: Email" class="footer-link-pic">
        </a>
        <a href="https://wa.me/79873576440?text=<?= $lang['whatsup'] ?>" class="footer-link" target="_blank" rel="noopener noreferrer">
          <img src="./img/footer-whatsup.svg" alt="Footer: What'sUp" class="footer-link-pic">
        </a>
        <!-- <a href="" class="footer-link" target="_blank" rel="noopener noreferrer">
          <img src="./img/footer-headhunter.svg" alt="Footer: HeadHunter" class="footer-link-pic">
        </a> -->
      </div>
      <!-- /.footer-item footer-links -->
      <div class="footer-item footer-copyright">
        <span class="footer-copyright-item footer-copyright-left"><?= $lang['footer-copyright-left'] ?></span>
        <span class="footer-copyright-item footer-copyright-right"><?= $lang['footer-copyright-right'] ?></span>
      </div>
      <!-- /.footer-item footer-copyright -->
    </div>
  </footer>
  <!-- /.footer -->
  <a href="#top-arrow" id="totop"></a>
  <script async src="./js/main.min.js"></script>
</body>

</html>