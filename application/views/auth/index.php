<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta name="theme-color" content="#3c97e2">
	<meta name="msapplication-TileColor" content="#3c97e2">
	<meta name="msapplication-navbutton-color" content="#3c97e2">
	<meta name="apple-mobile-web-app-status-bar-style" content="#3c97e2"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <!-- <meta name="description" content="Axima - Factory and Manufacturing Html Template"> -->
    <link href="<?= base_url(); ?>assets/images/favicon/p.png" rel="icon">
    <title>Login PAN ERA GROUP</title>
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>assets/login/css/iofrm-theme1.css">
    <!-- Sweetalert -->
    <script type="text/javascript" src="<?= base_url(); ?>assets/admin/plugins/sweetalert/sweetalert2.all.min.js"></script>
</head>
<body>
    <div class="form-body" class="container-fluid">
        <!-- Notification Sweet Alert -->
        <div class="success-data" data-success="<?= $this->session->flashdata('success'); ?>"></div> 
        <div class="warning-data" data-warning="<?= $this->session->flashdata('warning'); ?>"></div> 
        <div class="error-data" data-error="<?= $this->session->flashdata('error'); ?>"></div> 
        <div class="website-logo">
            <a href="index.html">
                <div class="logo-1">
                    <img class="logo-size-1" width="150px" src="<?= base_url(); ?>assets/images/logo/panera-light2.png">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login PAN ERA GROUP</h3>
                        <p>Masuk dengan akun anda</p>
                        <div class="page-links">
                            <a href="login1.html" class="active">Form Login</a>
                        </div>
                        <form id="loginForm" method="post">
                            <input class="form-control" type="text" name="username" placeholder="Username" required autocomplete="off">
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <input type="hidden" id="csrf" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>" />
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <a href="<?= site_url('home'); ?>">Home</a><a href="#">Privacy Policy</a><a href="#">Term Of Use</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="<?= base_url(); ?>assets/login/js/jquery.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/login/js/popper.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/login/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/login/js/main.js"></script>
<!-- Custom -->
<script src="<?= base_url(); ?>assets/admin/custom/js/script.js"></script>

<script>
    $(function() {
		$("#loginForm").submit(function(e) {
			e.preventDefault();
			var form = $(this);
			var username = $("#username").val();
			var password = $("#password").val();
			$.ajax({
				url: "<?= site_url('auth/login'); ?>",
				data: form.serialize(),
				dataType: "JSON",
				type: "POST",
				success: function(response){
					if (response.success == true) {
						window.location.href = "<?= site_url('dashboard'); ?>";
					}
					else {
						Swal.fire({
							title: 'Oops ',
							text: response.messages,
							type: 'error'
						});
					}
				}
			});
			return false;
		});
		
	});
</script>

</body>
</html>