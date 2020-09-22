<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>lARAVEL</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="../assets/admin/vendors/iconfonts/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../assets/admin/vendors/iconfonts/ionicons/dist/css/ionicons.css">
    <link rel="stylesheet" href="../assets/admin/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="../assets/admin/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="../assets/admin/vendors/css/vendor.bundle.addons.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/admin/css/shared/style.css">
    <link rel="stylesheet" href="../assets/admin/css/demo_1/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="../assets/admin/images/favicon.ico" />
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_navbar.html -->
      @include('include.adminnav')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        @include('include.adminsidebar')
        <!-- partial -->
        @yield('content')
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="../assets/admin/vendors/js/vendor.bundle.base.js"></script>
    <script src="../assets/admin/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="../assets/admin/js/shared/off-canvas.js"></script>
    <script src="../assets/admin/js/shared/misc.js"></script>
    <script src="../assets/admin/js/demo_1/dashboard.js"></script>
    <!-- endinject -->
  </body>
</html>