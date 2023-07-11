<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Purple Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css-admin/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css-admin/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css-admin/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/css-admin/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="content-wrapper d-flex align-items-center auth">
          <div class="row flex-grow">
            <div class="col-lg-4 mx-auto">
              <div class="auth-form-light text-left p-5">
                <div class="brand-logo">
                  <img src="<?php echo base_url(); ?>assets/css-admin/images/logo.svg">
                </div>
                <h4>New here?</h4>
                <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                <form class="pt-3">
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Nom">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputUsername1" placeholder="Prénom">
                  </div>
                  <div class="form-group">
                    <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control form-control-lg" id="exampleInputEmail1" placeholder="Mot de passe">
                  </div>
                  <div class="form-group">
                    <label class="col-sm-3 col-form-label">Genre</label>
                    <div class="col-sm-4">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios1" value="" checked> Feminin </label>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="membershipRadios" id="membershipRadios2" value="option2"> Masculin </label>
                        </div>
                    </div>
                    </div>
                  <div class="form-group">
                    <select class="form-control form-control-lg" id="exampleFormControlSelect2">
                      <option>Country</option>
                      <option>United States of America</option>
                      <option>United Kingdom</option>
                      <option>India</option>
                      <option>Germany</option>
                      <option>Argentina</option>
                    </select>
                  </div>
                  <div class="mt-3">
                    <a class="btn btn-block btn-gradient-primary btn-lg font-weight-medium auth-form-btn" href="<?php echo base_url(); ?>index.php/welcome/inscri">SIGN UP</a>
                  </div>
                  <div class="text-center mt-4 font-weight-light"> Already have an account? <a href="<?php echo base_url(); ?>index.php/welcome/index" class="text-primary">Login</a>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url(); ?>assets/css-admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>assets/css-admin/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/misc.js"></script>
    <!-- endinject -->
  </body>
</html>