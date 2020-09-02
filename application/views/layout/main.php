<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="theme-color" content="#3c97e2">
	<meta name="msapplication-TileColor" content="#3c97e2">
	<meta name="msapplication-navbutton-color" content="#3c97e2">
	<meta name="apple-mobile-web-app-status-bar-style" content="#3c97e2">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <!-- <meta name="description" content="Axima - Factory and Manufacturing Html Template"> -->
  <link href="<?= base_url(); ?>assets/images/favicon/p.png" rel="icon">
  <title><?= $this->lang->line('text_title'); ?></title>
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Heebo:400,500,700%7cRajdhani:400,500,600,700&display=swap">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/libraries.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/css/style.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/plugins/lightbox/simple-lightbox.min.css">
  <style>
    .b-divider{
      padding-top:120px;
    }

    @media only screen and (max-width: 700px) {
      .b-divider{
        padding-top:40px;
      }
    }
  </style>

</head>

<body>
  <div class="wrapper">
    <!-- =========================
        Header
    =========================== -->
    <header id="header" class="header header-layout1">
      <!-- <div class="header__promo-text text-center">
        <strong>Need Help:</strong><span>Providing Innovative and Sustainable Solutions, Call (002) 01061245741</span>
      </div> -->
      <nav class="navbar navbar-expand-lg sticky-navbar">
        <div class="container-fluid px-0">
          <a class="navbar-brand" href="<?= site_url(); ?>">
            <img src="<?= base_url(); ?>assets/images/logo/panera-light2.png" class="logo-light" style="width: 200px;" alt="logo">
            <img src="<?= base_url(); ?>assets/images/logo/panera.png" class="logo-dark" width="180px" alt="logo">
          </a>
          <button class="navbar-toggler" type="button">
            <span class="menu-lines"><span></span></span>
          </button>
          <div class="collapse navbar-collapse" id="mainNavigation">
            <ul class="navbar-nav">
              <?php $menu = $this->Menu_m->getmenubyLang($this->lang->line('text_nation'))->result(); 
              foreach($menu as $row) : ?>
                <?php if($row->HAVE_SUB == 0) : ?>
                <li class="nav__item">
                  <a href="<?= $row->URL; ?>" class="nav__item-link"><?= $row->MENU; ?></a>
                </li>
                <?php else : ?>
                <li class="nav__item with-dropdown">
                  <a href="javascript:void(0)" class="dropdown-toggle nav__item-link"><?= $row->MENU; ?></a>
                  <i class="fa fa-angle-right" data-toggle="dropdown"></i>
                  <ul class="dropdown-menu">
                    <?php $submenu = $this->Menu_m->getsubbylangIdMenu($this->lang->line('text_nation'), $row->ID_MENU)->result(); 
                    foreach($submenu as $sub) : ?>
                    <li class="nav__item"><a href="<?= $sub->URL; ?>" class="nav__item-link"><?= $sub->SUB_MENU; ?></a></li>
                    <?php endforeach; ?>
                  </ul>
                </li>
                <?php endif; ?>
              <?php endforeach; ?>
            </ul><!-- /.navbar-nav -->
          </div><!-- /.navbar-collapse -->
          <div class="navbar-modules">
            <ul class="list-unstyled d-flex align-items-center modules__btns-list">
              <li>
                <div class="dropdown dropdown__lang">
                  <button class="dropdown-toggle" id="langDrobdown" data-toggle="dropdown">
                    <img src="<?= base_url(); ?>assets/images/flags/<?= $this->lang->line('text_code'); ?>.png" width="32px" alt="<?= $this->lang->line('text_code'); ?>" style="margin-right: 0;"><span></span>
                  </button>
                  <div class="dropdown-menu" aria-labelledby="langDrobdown">
                    <a class="dropdown-item" onClick="javascript:window.location.href='<?= site_url(); ?>language/switch/english'" href="#" <?= $this->lang->line('text_code') == 'en' ? 'style="display:none;"' : ''; ?> title="English">
                      <img src="<?= base_url(); ?>assets/images/flags/en.png" alt="en" width="32px"><span></span>
                    </a>
                    <a class="dropdown-item" onClick="javascript:window.location.href='<?= site_url(); ?>language/switch/indonesia'" href="#" <?= $this->lang->line('text_code') == 'id' ? 'style="display:none;"' : ''; ?> title="Indonesia">
                      <img src="<?= base_url(); ?>assets/images/flags/id.png" alt="id" width="32px"><span></span>
                    </a>
                  </div>
                </div>
              </li>
              <!-- <li class="d-none d-lg-block">
                <a href="request-quote.html" class="btn btn__secondary module__btn-request">
                  <span>Request A Quote</span><i class="icon-arrow-right"></i>
                </a>
              </li> -->
              <li class="d-none d-lg-block">
                <!-- <form class="header__search-form">
                  <input type="text" class="search__input" placeholder="Search...">
                  <button><i class="fa fa-search"></i></button>
                </form> -->
              </li>
            </ul><!-- /.modules-wrapper -->
          </div><!-- /.navbar-modules -->
        </div><!-- /.container -->
      </nav><!-- /.navabr -->
    </header><!-- /.Header -->

  <?= $contents; ?>

  <!-- ========================
      Footer
    ========================== -->
  <footer id="footer" class="footer">
    <div class="footer-top" style="padding-bottom: 10px; padding-top: 50px;">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-3 footer__widget footer__widget-about mb-30">
            <div class="footer__widget-content">
              <img src="<?= base_url(); ?>assets/images/logo/panera.png" alt="logo" style="background-color: white; padding: 5px; width: 200px; border-radius: 10px;">
              <!-- <a href="tel:00123968574" class="phone-link">
                <i class="icon-phone"></i><span>(002) 123968574</span>
              </a> -->
              <p>Jalan Kapuk Raya No. 88 E, F, G Penjaringan Jakarta Utara DKI Jakarta 14460 Indonesia</p>
              <a href="#" class="btn btn__primary btn__link btn__hover2">
                <i class="icon-arrow-right arrow-rounded"></i>
                <span><?= $this->lang->line('text_contact_us'); ?></span>
              </a>
            </div>
          </div><!-- /.col-lg-4 -->
          <div class="col-sm-6 col-md-6 col-lg-3 footer__widget footer__widget-text">
            <h6 class="footer__widget-title">Quick Contact</h6>
            <div class="footer__widget-content">
              <p>If you have any questions or need help, feel free to contact with our team.</p>
              <!-- <a href="tel:00123968574" class="phone-link">
                <i class="icon-phone"></i><span>(002) 123968574</span>
              </a> -->
              <p>2307 Beverley Rd Brooklyn, New York 11226 United States.</p>
              <ul class="social__icons list-unstyled mt-30 mb-30">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
              </ul>
            </div><!-- /.footer-widget-content -->
          </div><!-- /.col-lg-3 -->
          <div class="col-sm-6 col-md-6 col-lg-2 footer__widget footer__widget-nav">
            <h6 class="footer__widget-title">Company</h6>
            <div class="footer__widget-content">
              <nav>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Meet Our Team</a></li>
                  <li><a href="#">News & Media</a></li>
                  <li><a href="#">Case Studies</a></li>
                  <li><a href="#">Contacts</a></li>
                  <li><a href="#">Careers</a></li>
                </ul>
              </nav>
            </div><!-- /.footer-widget-content -->
          </div><!-- /.col-lg-2 -->
          <div class="col-12 col-sm-12 col-md-12 col-lg-4 footer__widget footer__widget-newsletter">
            <div class="footer__widget-content">
              <p>Sign up for industry alerts, our latest news, thoughts, and insights from Axima. You may withdraw
                your consent at any time!</p>
              <form class="widget__newsletter-form">
                <div class="form-group mb-0">
                  <input type="text" class="form-control" placeholder="Your Email Address">
                  <button type="submit" class="btn">
                    <i class="icon-arrow-right arrow-rounded"></i>
                  </button>
                </div>
              </form>
            </div><!-- /.footer-widget-content -->
            <nav>
              <ul class="footer__sitemap-links list-unstyled d-flex justify-content-end flex-wrap">
                <li><a href="#">Terms & Conditions </a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Sitemap</a></li>
              </ul><!-- /.footer__sitemap-links -->
            </nav>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </div><!-- /.footer-top -->
    <div class="footer-bottom">
        <div class="container">
          <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12">
              <div class="footer__copyright text-center">
                <span> &copy; 2020 PAN ERA GROUP, Made with ❤️ by IT Team
                </span>
              </div><!-- /.Footer-copyright -->
            </div><!-- /.col-lg-12 -->
          </div><!-- /.row -->
        </div><!-- /.container -->
      </div><!-- /.Footer-bottom -->
  </footer><!-- /.Footer -->
  <button id="scrollTopBtn"><i class="fa fa-long-arrow-up"></i></button>
  </div><!-- /.wrapper -->

  <script src="<?= base_url(); ?>assets/js/jquery-3.3.1.min.js"></script>
  <script src="<?= base_url(); ?>assets/js/plugins.js"></script>
  <script src="<?= base_url(); ?>assets/js/main.js"></script>
  <script src="<?= base_url(); ?>assets/plugins/lightbox/simple-lightbox.jquery.min.js"></script>

  <script>
    $('.gallery a').simpleLightbox();
  </script>
</body>

</html>