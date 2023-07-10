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
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          
        </div>
      </div>
      <!-- partial:partials/_navbar.html -->
      <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
          <a class="navbar-brand brand-logo" href="#"><img src="<?php echo base_url(); ?>assets/css-admin/images/logo.svg" alt="logo" /></a>
          <a class="navbar-brand brand-logo-mini" href="#"><img src="<?php echo base_url(); ?>assets/css-admin/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="nav-profile-img">
                  <img src="<?php echo base_url(); ?>assets/css-admin/images/faces/face1.jpg" alt="image">
                  <span class="availability-status online"></span>
                </div>
                <div class="nav-profile-text">
                  <p class="mb-1 text-black">Bertha Benz</p>
                </div>
              </a>
              <div class="dropdown-menu navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href="<?php echo base_url(); ?>index.php/welcome/index">
                  <i class="mdi mdi-logout me-2 text-primary"></i> Signout </a>
              </div>
            </li>
            <li class="nav-item d-none d-lg-block full-screen-link">
              <a class="nav-link">
                <i class="mdi mdi-fullscreen" id="fullscreen-button"></i>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
          <ul class="nav">
            <li class="nav-item nav-profile">
              <a href="#" class="nav-link">
                <div class="nav-profile-image">
                  <img src="<?php echo base_url(); ?>assets/css-admin/images/faces/face1.jpg" alt="profile">
                  <span class="login-status online"></span>
                  <!--change to offline or busy as needed-->
                </div>
                <div class="nav-profile-text d-flex flex-column">
                  <span class="font-weight-bold mb-2">Bertha Benz</span>
                  <span class="text-secondary text-small">User</span>
                </div>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/user/index">
                <span class="menu-title">Accueil</span>
                <i class="mdi mdi-home menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url(); ?>index.php/user/porte_monnaie">
                <span class="menu-title">Change purse</span>
                <i class="mdi mdi-coin menu-icon"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">
                <span class="menu-title">Code</span>
                <i class="mdi mdi-calculator menu-icon"></i>
              </a>
            </li>
          </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
            <h3 class="page-title"> Suggestion selectionné</h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p>Objectif : Augmenter le poids</p>
                        <p>Regime : Regime 1</p>
                        <p>Description : ...</p>
                        <p>Duree : 15 jours</p>
                        <p>Intervalle poids : <span class="text-success">Entre 3 et 5 KG <i class="mdi mdi-arrow-up"></i></span></p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="page-header">
            <h3 class="page-title"> Détails du régime alimentaire </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                  <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>Nom Plat</th>
                          <th>Image Plat</th>
                          <th>Nb de Jours</th>
                          <th>Prix Unitaire</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Pates</td>
                          <td>...</td>
                          <td>2 jours</td>
                          <td>20 000 AR</td>
                        </tr>
                        <tr>
                          <td>Frites</td>
                          <td>...</td>
                          <td>5 jours</td>
                          <td>15 000 AR</td>
                        </tr>
                        <tr>
                          <td>Legumes</td>
                          <td>...</td>
                          <td>3 jours</td>
                          <td>20 000 AR</td>
                        </tr>
                        <tr>
                          <td> </td>
                          <td> </td>
                          <td></td>
                          <td>55 000 AR</td>
                        </tr>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            </div>

            <div class="page-header">
            <h3 class="page-title"> Activité(s) sportive(s) </h3>
            </div>
            <div class="row">
              <div class="col-md-12 grid-margin">
                <div class="card">
                  <div class="card-body">
                    <div class="row">
                      <div class="col-md-6">
                        <p>Activite : Musculation</p>
                        <p>Duree : 15 jours</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <a class="btn btn-dark btn-fw" href="<?php echo base_url(); ?>index.php/user/index">Retour</a>
            <a class="btn btn-success btn-fw" href="<?php echo base_url(); ?>index.php/user/index">Choisir le régime</a>

          </div>
          <!-- content-wrapper ends -->
          <!-- partial:../../partials/_footer.html -->
          <footer class="footer">
            <div class="container-fluid d-flex justify-content-between">
              <span class="text-muted d-block text-center text-sm-start d-sm-inline-block">Copyright © bootstrapdash.com 2021</span>
              <span class="float-none float-sm-end mt-1 mt-sm-0 text-end"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin template</a> from Bootstrapdash.com</span>
            </div>
          </footer>
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="<?php echo base_url(); ?>assets/css-admin/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="<?php echo base_url(); ?>assets/css-admin/vendors/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/jquery.cookie.js" type="text/javascript"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="<?php echo base_url(); ?>assets/css-admin/js/off-canvas.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/hoverable-collapse.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="<?php echo base_url(); ?>assets/css-admin/js/dashboard.js"></script>
    <script src="<?php echo base_url(); ?>assets/css-admin/js/todolist.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>