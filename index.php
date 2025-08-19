<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>SIMPEG - SIGI</title>

  <!-- Global stylesheets -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>/public/global_assets/css/icons/icomoon/styles.min.css" rel="stylesheet" type="text/css">
  <link href="<?php echo base_url() ?>/public/assets/css/all.min.css" rel="stylesheet" type="text/css">
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="<?php echo base_url() ?>/public/global_assets/js/main/jquery.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/plugins/extensions/jquery_ui/widgets.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/main/bootstrap.bundle.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/plugins/forms/validation/validate.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/plugins/buttons/ladda.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/plugins/visualization/d3/d3.min.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/plugins/uploaders/dropzone.min.js"></script>
  <!-- /core JS files -->

  <!-- Theme JS files -->
  <script src="<?php echo base_url() ?>/public/assets/js/app.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/demo_pages/login_validation.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/demo_pages/widgets_content.js"></script>
  <script src="<?php echo base_url() ?>/public/global_assets/js/demo_pages/components_buttons.js"></script>
  <!-- /theme JS files -->

  <link rel="shortcut icon" href="<?php echo base_url() ?>/public/sigi32.ico" />

</head>

<body style="background-image: url('public/image/pk04.jpg');background-repeat: no-repeat;background-attachment: fixed;
  background-size: 100% 100%;">

  <?php
  $db = db_connect();
  $row = $db->query("SELECT * FROM tb_pemda");
  if ($row->getNumRows() <> 0) {
    $vrow = $row->getRowArray();
    $logo = $vrow['logo'];
    $nmpemda = $vrow['nama_pemda'];
  } else {
    $logo = 'placeholder.jpg';
    $nmpemda = '';
  } ?>

  <!-- Page content -->
  <div class="page-content login-cover">

    <!-- Main content -->
    <div class="content-wrapper">

      <!-- Inner content -->
      <div class="content-inner">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center pt-5">

          <!-- Login form -->
          <form class="login-form" action="<?= base_url('Auth/login') ?>" method="post">
            <?= csrf_field(); ?> 
            <div class="card mb-0">
              <div class="card-header border-bottom p-1 bg-light">
                <div class="text-center">
                  <img src="<?php echo base_url('/public/image/' . $logo) ?>" class="img-fluid circle" width="80" height="80" alt="">
                  <h6 class="mb-0" style="font-size:small;">Pemerintah Kabupaten <?= $nmpemda ?></h6>
                  <span class="d-block">Sistem Informasi Pelayanan Cuti Pegawai</span>
                </div>

              </div>
              <div class="card-body p-1">
                <div class="form-group form-group-feedback form-group-feedback-left mb-1">
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                  <div class="form-control-feedback">
                    <i class="icon-user text-muted"></i>
                  </div>
                </div>

                <div class="form-group form-group-feedback form-group-feedback-left mb-0">
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <div class="form-control-feedback">
                    <i class="icon-lock2 text-muted"></i>
                  </div>
                </div>

              </div>
              <div class="card-footer p-1">
                <button type="submit" class="btn btn-primary btn-block text-capitalize" name="submit">Sign in</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
