    <!-- ============================
        Slider
    ============================== -->
    <section id="slider1" class="slider slider-1">
      <div class="carousel owl-carousel carousel-arrows carousel-dots" data-slide="1" data-slide-md="1"
        data-slide-sm="1" data-autoplay="true" data-nav="true" data-dots="true" data-space="0" data-loop="true"
        data-speed="1000" data-transition="fade" data-animate-out="fadeOut" data-animate-in="fadeIn">

        <?php foreach($slider as $row) : ?>
        <div class="slide-item align-v-h bg-overlay bg-overlay-3">
          <div class="bg-img"><img src="<?= base_url(); ?>assets/contents/images/slider/<?= $row->GAMBAR; ?>" alt="slide img"></div>
          <div class="container">
            <div class="row">
              <div class="col-sm-12 col-md-12 col-lg-12 col-xl-8">
                <div class="slide__content">
                  <h2 class="slide__title"><?= $row->JUDUL; ?></h2>
                  <p class="slide__desc"><?= $row->ISI; ?></p>
                  <a href="#" class="btn btn__primary mr-30"><?= $this->lang->line('text_learn_more'); ?></a>
                </div><!-- /.slide-content -->
              </div><!-- /.col-xl-8 -->
            </div><!-- /.row -->
          </div><!-- /.container -->
        </div><!-- /.slide-item -->
        <?php endforeach; ?>
        
      </div><!-- /.carousel -->
    </section><!-- /.slider -->

    <!-- ========================
        Services Carousel
    =========================== -->
    <section id="servicesCarousel" class="services services-layout2 services-carousel pt-0 mt-120">
      <div class="bg-img"><img src="<?= base_url(); ?>assets/images/backgrounds/pattern/2.png" alt="background"></div>
      <div class="container">
        <div class="row heading mb-40">
          <div class="col-sm-12 col-md-12 col-lg-6">
            <span class="heading__subtitle">Selamat Datang di PAN ERA GROUP</span>
            <h2 class="heading__title">Kami adalah organisasi yang berdedikasi pada alam, berorientasi pada kualitas.</h2>
          </div><!-- /.col-lg-6 -->
          <div class="col-sm-12 col-md-12 col-lg-6">
            <p class="heading__desc">Kondisi virus Covid-19 membuat beberapa distributor kami harus menyesuaikan jam operasional. Namun kami tetap berkomitmen untuk memenuhi kebutuhan Anda, silahkan untuk menghubungi nomor telepon kami agar mendapatkan contact distributor produk plastik kami.</p>
            <div class="d-flex">
              <a href="http://loco.co.id:1100" target="_blank" class="btn btn__primary mt-30 mr-30">Selengkapnya</a>
              <div class="contact-chip mt-30">
                <div class="contact__chip-img">
                  <img src="<?= base_url(); ?>assets/images/testimonials/thumbs/4.png" alt="avatar">
                </div><!-- /.contact__chip-ig -->
                <div class="contact__chip-info">
                  <h6>0817-248-999 (Whatsapp)</h6>
                  <span>Fast Response</span>
                </div><!-- /.contact__chip-info -->
              </div><!-- /.contact-chip -->
            </div>
          </div><!-- /.col-lg-6 -->
        </div><!-- /.row -->
        <div class="col-sm-12 col-md-12 col-lg-12">
          <div class="carousel owl-carousel carousel-dots" data-slide="3" data-slide-md="2" data-slide-sm="1"
            data-autoplay="true" data-nav="false" data-dots="true" data-space="30" data-loop="true" data-speed="800">
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                  <!-- <i class="icon-tank-2"></i> -->
                  <img src="<?= base_url(); ?>assets/images/services/building.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Profil<br> Perusahaan</h4>
                <p class="service__desc">Pengenalan perusahaan - perusahaan yang tergabung dalam Pan Era Group</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <img src="<?= base_url(); ?>assets/images/services/idea.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Visi & <br>Misi</h4>
                <p class="service__desc">Ambisi kami yang kemudian menjadi daya dorong untuk terus maju dan berkembang</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <img src="<?= base_url(); ?>assets/images/services/recycle.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Biji Plastik <br> Daur Ulang</h4>
                <p class="service__desc">Produk ramah lingkungan yang menjadi inti dan asal identitas kami</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <img src="<?= base_url(); ?>assets/images/services/reusable.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Kantong <br> Plastik</h4>
                <p class="service__desc">LOCO, kantong plastik kebanggaan besar kami yang kami kembangkan</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <img src="<?= base_url(); ?>assets/images/services/hired.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Manajemen <br> SDM</h4>
                <p class="service__desc">Filosofi manajemen sumber daya manusia kami untuk berkembang bersama</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
            <div class="service-item">
              <div class="service__content">
                <div class="service__icon">
                <img src="<?= base_url(); ?>assets/images/services/job-search.svg" style="width: 80px;" alt="">
                </div><!-- /.service__icon -->
                <h4 class="service__title">Kesempatan <br> Berkarir</h4>
                <p class="service__desc">Daftar lowongan posisi yang sedang tersedia beserta instruksi pelamaran</p>
                <a href="#" class="btn btn__secondary btn__link">
                  <i class="icon-arrow-right arrow-rounded"></i>
                  <span>Read More</span>
                </a>
              </div><!-- /.service-content -->
            </div><!-- /.service-item -->
          </div><!-- /.carousel -->
        </div><!-- /.col-lg-12 -->
      </div><!-- /.row -->
  </div><!-- /.container -->
  </section><!-- /.Services Carousel -->


  <!-- =========================
           Banner 2
     =========================== -->
  <section id="banner2" class="banner banner-2 bg-overlay bg-overlay-theme-2 bg-parallax pt-120 pb-0">
    <div class="bg-img"><img src="<?= base_url(); ?>assets/images/banners/5.jpeg" alt="background"></div>
    <div class="container">
          <div class="text-center">
            <img src="<?= base_url(); ?>assets/images/logo/panera.png" alt="" width="600px">
          </div>
          <div class="b-divider"></div>
    </div><!-- /.container -->
  </section><!-- /. Banner 2 -->

  <!-- ======================
      Blog Grid
    ========================= -->
  <section id="blogGrid" class="blog blog-grid pt-120 pb-70">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-6 offset-lg-3">
          <div class="heading text-center mb-50">
            <span class="heading__subtitle">Media dan Informasi</span>
            <h2 class="heading__title">Berita dan Informasi Terbaru</h2>
            <p class="heading__desc">Follow our latest news and thoughts which focuses exclusively on insight,
              industry trends, top news headlines.</p>
          </div><!-- /.heading -->
        </div><!-- /.col-lg-6 -->
      </div><!-- /.row-->
      <div class="row">
        <!-- Blog Item #1 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog-item">
            <div class="blog__img">
              <a href="#">
                <img src="<?= base_url(); ?>assets/images/blog/grid/1.jpg" alt="blog image">
              </a>
            </div><!-- /.entry-img -->
            <div class="blog__content">
              <div class="blog__meta">
                <div class="blog__meta-cat">
                  <a href="#">Oil & Gas</a><a href="#">Insights</a>
                </div><!-- /.blog-meta-cat -->
                <span class="blog__meta-date">Jan 20, 2019</span>
              </div><!-- /.blog-meta -->
              <h4 class="blog__title"><a href="#">Importers achieve cost savings through the First Sale rule!</a></h4>
              <a href="#" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right arrow-rounded"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.entry-content -->
          </div><!-- /.blog-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #2 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog-item">
            <div class="blog__img">
              <a href="#">
                <img src="<?= base_url(); ?>assets/images/blog/grid/2.jpg" alt="blog image">
              </a>
            </div><!-- /.entry-img -->
            <div class="blog__content">
              <div class="blog__meta">
                <div class="blog__meta-cat">
                  <a href="#">Industry</a><a href="#">Construction</a>
                </div><!-- /.blog-meta-cat -->
                <span class="blog__meta-date">Oct 18, 2019</span>
              </div><!-- /.blog-meta -->
              <h4 class="blog__title"><a href="#">Cargo flow through better supply chain visibility, control.</a></h4>
              <a href="#" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right arrow-rounded"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.entry-content -->
          </div><!-- /.blog-item -->
        </div><!-- /.col-lg-4 -->
        <!-- Blog Item #3 -->
        <div class="col-sm-12 col-md-6 col-lg-4">
          <div class="blog-item">
            <div class="blog__img">
              <a href="#">
                <img src="<?= base_url(); ?>assets/images/blog/grid/3.jpg" alt="blog image">
              </a>
            </div><!-- /.entry-img -->
            <div class="blog__content">
              <div class="blog__meta">
                <div class="blog__meta-cat">
                  <a href="#">Engineering</a><a href="#">Distribution</a>
                </div><!-- /.blog-meta-cat -->
                <span class="blog__meta-date">Jan 20, 2019</span>
              </div><!-- /.blog-meta -->
              <h4 class="blog__title"><a href="#">Importance of specialized focus in portfolio, Oil & Gas
                  Logistics?</a></h4>
              <a href="#" class="btn btn__secondary btn__link">
                <i class="icon-arrow-right arrow-rounded"></i>
                <span>Read More</span>
              </a>
            </div><!-- /.entry-content -->
          </div><!-- /.blog-item -->
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row-->
    </div><!-- /.container -->
  </section><!-- /.blog Grid -->