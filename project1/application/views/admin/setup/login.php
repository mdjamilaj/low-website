<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin 2 - Login</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo base_url();?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo base_url();?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                  </div>
                  <form class="user">
                    <?php if($this->session->flashdata('message')): ?>
                        <div class="form-group">
                            <a class='btn btn-google btn-user btn-block' style="color: #ffffff;"><?php echo $this->session->flashdata('message'); ?></a>
                        </div>
                    <?php endif; ?>
                    <div class="row">
                    <div class="col-lg-4 col-lg-offset-4">
                      <h1>Login</h1>
                      <?php echo form_open('',array('class'=>'form-horizontal'));?>
                        <div class="form-group">
                          <?php echo form_label('Username','identity');?>
                          <?php echo form_error('identity');?>
                          <?php echo form_input('identity','','class="form-control"');?>
                        </div>
                        <div class="form-group">
                          <?php echo form_label('Password','password');?>
                          <?php echo form_error('password');?>
                          <?php echo form_password('password','','class="form-control"');?>
                        </div>
                        <div class="form-group">
                          <label>
                            <?php echo form_checkbox('remember','1',FALSE);?> Remember me
                          </label>
                        </div>
                        <?php echo form_submit('submit', 'Log in', 'class="btn btn-primary btn-lg btn-block"');?>
                      <?php echo form_close();?>
                    </div>
                  </div>
                                      
                  <!-- <hr>
                  <div class="text-center">
                    <a class="small" href="forgot-password.html">Forgot Password?</a>
                  </div>
                  <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo base_url();?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo base_url();?>assets/vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="<?php echo base_url();?>assets/js/sb-admin-2.min.js"></script>

</body>

</html>
