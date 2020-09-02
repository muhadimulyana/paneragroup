 <!-- ========================= 
            Google Map
    =========================  -->
    <section id="googleMap" class="google-map p-0">
      <div id="map" style="height: 100%;"></div>
      <script src="assets/js/google-map.js"></script>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6671.510510058844!2d106.77242140033735!3d-6.14361144532225!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5c004544c9fd85fa!2sPan%20Era%20Group!5e0!3m2!1sid!2sid!4v1591947111297!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      <!-- CLICK HERE (https://developers.google.com/maps/documentation/embed/get-api-key) TO  LERAN MORE ABOUT GOOGLE MAPS API KEY -->
    </section><!-- /.GoogleMap -->

    <!-- ==========================
        contact 
    =========================== -->
    <section id="contact" class="contact pt-120 pb-110">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-8">
            <form class="contact__form-panel mb-40">
              <div class="row">
                <div class="col-sm-12 contact__form-panel-header">
                  <h4><?= $this->lang->line('text_contact_us'); ?></h4>
                  <p><?= $contact->INFORMASI; ?></p>
                </div>
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group"><input type="text" class="form-control" placeholder="<?= $this->lang->line('placeholder_name'); ?>"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="<?= $this->lang->line('placeholder_position'); ?>"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="<?= $this->lang->line('placeholder_company'); ?>"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="email" class="form-control" placeholder="<?= $this->lang->line('placeholder_mail'); ?>"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-6 col-md-6 col-lg-6">
                  <div class="form-group"><input type="text" class="form-control" placeholder="<?= $this->lang->line('placeholder_phone'); ?>"></div>
                </div><!-- /.col-lg-6 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <div class="form-group">
                    <textarea class="form-control" placeholder="<?= $this->lang->line('placeholder_message'); ?>"></textarea>
                  </div>
                </div><!-- /.col-lg-12 -->
                <div class="col-sm-12 col-md-12 col-lg-12">
                  <button type="submit" class="btn btn__primary"><?= $this->lang->line('text_submit'); ?></button>
                </div><!-- /.col-lg-12 -->
              </div><!-- /.row -->
            </form>
          </div><!-- /.col-lg-8 -->
          <div class="col-sm-10 col-md-6 col-lg-4">
            <div class="contact-panel mb-40">
              <h6 class="contact__panel-title"><?= $this->lang->line('text_det_contact'); ?></h6>
              <ul class="contact__panel-list list-unstyled">
                <li><i class="fa fa-map-marker"></i><span><?= $det_contact->ALAMAT; ?></span></li>
                <li><i class="fa fa-envelope"></i><span><?= $det_contact->EMAIL; ?></span></li>
                <li><i class="fa fa-phone"></i><span><?= $det_contact->TELP; ?></span></li>
                <li><i class="fa fa-fax"></i><span><?= $det_contact->FAX; ?></span></li>
                <li><i class="fa fa-globe"></i><span><?= $det_contact->WEBSITE; ?></span></li>
              </ul>
            </div>
            <!-- <div class="contact-panel mb-40">
              <h6 class="contact__panel-title"><?= $this->lang->line('text_open_hour'); ?></h6>
              <ul class="contact__panel-list contact__panel-list-2 list-unstyled">
                <li><span>Monday-Friday</span><span>10:00 - 18:00</span></li>
                <li><span>Saturday</span><span>10:00 - 14:00</span></li>
                <li><span>Sunday</span><span>Closed</span></li>
              </ul>
            </div> -->
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.contact  -->