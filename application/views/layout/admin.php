<!DOCTYPE html>
<html>
<head>
  <title><?= $title; ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8">
  <meta name="theme-color" content="#2980ba">
	<meta name="msapplication-TileColor" content="#2980ba">
	<meta name="msapplication-navbutton-color" content="#2980ba">
	<meta name="apple-mobile-web-app-status-bar-style" content="#2980ba">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" href="<?= base_url(); ?>assets/images/favicon/p.png" type="image/png" sizes="16x16">
    <!-- Select2 -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Noto+Sans&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->
  <!-- <link href="https://fonts.googleapis.com/css2?family=Dosis:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap" rel="stylesheet">


  <!-- adminLTE -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/dist/css/adminlte.css">
  <!-- Datetimepicker -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datetimepicker/build/jquery.datetimepicker.min.css">
  <!-- Summernote -->
  <!-- <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/summernote/summernote-bs4.css"> -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.css">
  <!-- Sweetalert -->
  <script type="text/javascript" src="<?= base_url(); ?>assets/admin/plugins/sweetalert/sweetalert2.all.min.js"></script>
  <!-- Ion Slider -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/ion-rangeslider/css/ion.rangeSlider.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="<?= base_url(); ?>assets/admin/plugins/fancybox/dist/jquery.fancybox.min.css">
  <!-- Jquery UI -->
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

   <style>
   .navigasi {
     font-size: 15px;
   }
   .date-picker-wrapper{z-index:1151 !important;}
    th {font-size: 15px;}
    td {font-size: 15px; }

    input::-ms-reveal, input::-ms-clear {
       display: none;
    }

    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
      color: #bebebe;
      opacity: 1; /* Firefox */
    }

    :-ms-input-placeholder { /* Internet Explorer 10-11 */
      color: #bebebe;
    }

    ::-ms-input-placeholder { /* Microsoft Edge */
      color: #bebebe;
    }

    .prosedur::-webkit-scrollbar {  display: none;  }

    #overlay {
      background: #ffffff;
      color: #666666;
      position: fixed;
      height: 100%;
      width: 100%;
      z-index: 5000;
      top: 0;
      left: 0;
      float: left;
      text-align: center;
      padding-top: 25%;
      opacity: .80;
    }
    .spinner {
        margin: 0 auto;
        height: 64px;
        width: 64px;
        animation: rotate 0.8s infinite linear;
        border: 5px solid teal;
        border-right-color: transparent;
        border-radius: 50%;
    }

    .float{
        position:fixed;
        width:60px;
        height:60px;
        bottom:30px;
        right:30px;
        background-color:#f05446;
        font-weight: 700;
        color:#FFF;
        border-radius:50px;
        text-align:center;
        font-size: 37px;
        box-shadow: 2px 2px 3px #999;
    }
    .my-float{
        margin-top:6px;
    }
     

    @keyframes flickerAnimation {
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-o-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-moz-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    @-webkit-keyframes flickerAnimation{
      0%   { opacity:1; }
      50%  { opacity:0; }
      100% { opacity:1; }
    }
    .animate-flicker {
      -webkit-animation: flickerAnimation 1s infinite;
      -moz-animation: flickerAnimation 1s infinite;
      -o-animation: flickerAnimation 1s infinite;
        animation: flickerAnimation 1s infinite;
    }
    @keyframes rotate {
        0% {
            transform: rotate(0deg);
        }
        100% {
            transform: rotate(360deg);
        }
    }

    .logo-nav{
      display:none;
    }


    @media only screen and (max-width: 700px) {
      .logo-nav{
        display:block;
      }
      .my-float{
        margin-top:9px;
      }
    }
   </style>
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
<!-- Notification Sweet Alert -->
<div class="success-data" data-success="<?= $this->session->flashdata('success'); ?>"></div> 
<div class="warning-data" data-warning="<?= $this->session->flashdata('warning'); ?>"></div> 
<div class="error-data" data-error="<?= $this->session->flashdata('error'); ?>"></div> 
<?php $url = $this->uri->segment(1); $url2 = $this->uri->segment(2); ?>
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-light navbar-white">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link text-white bg-green" style="border-radius:10%;" data-widget="pushmenu" href="#"><i class="fas fa-align-left"></i></a>
      </li>
    </ul>
    <a class="logo-nav text-bold text-success text-lg ml-2" href="<?= site_url('dashboard'); ?>">PAN ERA GROUP</a>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <a class="nav-link text-success tombol-keluar" href="<?= site_url('auth/logout'); ?>" title="Logout"><span data-toggle="tooltip" data-placement="bottom" title="Logout">
          <i class="fas fa-sign-out-alt"></i></span>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-green elevation-4">
    <!-- Brand Logo -->
    <a href="<?= site_url('home'); ?>" id="home" class="brand-link navbar-green">
      <img src="<?= base_url(); ?>assets/images/favicon/p.png"
           alt="AdminLTE Logo"
           class="brand-image"
           style="opacity: 1.0">
      <!-- <span class="fas fa-file-signature" style="margin-left: 20px; color:#fff; font-size: 24px;"></span> -->
      <span class="brand-text text-bold text-white">CMS Pan Era Group</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar" id="side-bar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url(); ?>assets/admin/dist/img/user.png" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" id="tes" class="d-block text-bold">
            Admin
          </a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2 navigasi">
        <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-legacy nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manajemen Konten
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview menu-open">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-building nav-icon"></i>
                  <p>Profil Perusahaan
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-child nav-icon"></i>
                  <p>Visi & Misi
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-box-open nav-icon"></i>
                  <p>Produk
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-newspaper nav-icon"></i>
                  <p>Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-tags nav-icon"></i>
                  <p>Kategori Berita
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-photo-video nav-icon"></i>
                  <p>Galeri
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-images nav-icon"></i>
                  <p>Slider
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-user-tie nav-icon"></i>
                  <p>Karir
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-address-book nav-icon"></i>
                  <p>Info Kontak
                  </p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-columns nav-icon"></i>
                  <p>Menu
                  </p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Manajemen Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview menu-open">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fa fa-columns nav-icon"></i>
                  <p>Menu
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="fas fa-border-all nav-icon"></i>
                  <p>Sub-Menu
                  </p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-globe"></i>
              <p>
                Website Pan Era Group
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview menu-open">
                <?php $menu = $this->Menu_m->getmenubyLang('indonesia')->result(); 
                foreach($menu as $row) : ?>
                    <?php if($row->HAVE_SUB == 0) : ?>
                        <li class="nav-item">
                            <a href="<?= $row->URL; ?>" target="_blank" class="nav-link">
                                <i class="fas fa-link nav-icon"></i>
                                <p><?= strtoupper($row->MENU); ?>
                                </p>
                            </a>
                        </li>
                    <?php else : ?>
                        <li class="nav-item has-treeview">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-link"></i>
                                <p>
                                    <?= strtoupper($row->MENU); ?>
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <?php $submenu = $this->Menu_m->getsubbylangIdMenu('indonesia', $row->ID_MENU)->result(); 
                                foreach($submenu as $sub) : ?>
                                <li class="nav-item">
                                    <a href="<?= $sub->URL; ?>" target="_blank" class="nav-link">
                                        <i class="fas fa-link nav-icon"></i>
                                        <p><?= strtoupper($sub->SUB_MENU); ?></p>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?= site_url('users'); ?>" class="nav-link <?= $url == 'users' ? 'active text-bold' : ''; ?>">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Manajemen User
              </p>
            </a>
          </li>
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>
                Manajemen Profil
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <div class="content-wrapper">    
    <!-- load view content  -->
    <?= $contents; ?>
    <!-- end load content -->
  </div>
  
  <footer class="main-footer text-sm">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 2.0
    </div>
    <strong>Copyright &copy; <?= date('Y'); ?><a href="http://paneragroup.com"> PAN ERA  Group</a>.</strong> All rights
    reserved.
  </footer>

</div>

<!-- Bootstrap 4 -->
<script src="<?= base_url(); ?>assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Chart JS -->
<script src="<?= base_url(); ?>assets/admin/plugins/chart.js/Chart.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url(); ?>assets/admin/plugins/select2/js/select2.full.min.js"></script>
<!-- Datetimepicker -->
<script src="<?= base_url(); ?>assets/admin/plugins/datetimepicker/build/jquery.datetimepicker.full.min.js"></script>
 <!-- InputMask -->
<script src="<?= base_url(); ?>assets/admin/plugins/moment/moment.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url(); ?>assets/admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url(); ?>assets/admin/dist/js/adminlte.min.js"></script>
<!-- Ion Slider -->
<script src="<?= base_url(); ?>assets/admin/plugins/ion-rangeslider/js/ion.rangeSlider.min.js"></script>
<!-- FancyBox -->
<script src="<?= base_url(); ?>assets/admin/plugins/fancybox/dist/jquery.fancybox.min.js"></script>
<!-- DataTables -->
<script src="<?= base_url(); ?>assets/admin/plugins/datatables/jquery.dataTables.js"></script>
<script src="<?= base_url(); ?>assets/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url(); ?>assets/admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- Custom -->
<script src="<?= base_url(); ?>assets/admin/custom/js/script.js"></script>

<script>
//custom script

$(function() {

    $('.select2').select2();

    $('[data-toggle="tooltip"]').tooltip();

    $('#table1').DataTable({
        language: {
            "url":"//cdn.datatables.net/plug-ins/1.10.9/i18n/Indonesian.json",
            "sEmptyTable" : "Tidads"
      },
      pageLength: 10,
      lengthChange: true
    });

});

</script>
</body>
</html>
