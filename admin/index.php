
  <?php include 'includes/header.php';?>
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  <div class="mobile-sticky-body-overlay"></div>

  <div class="wrapper">

    <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
   
     <?php include 'includes/sidebar.php';?>


    <div class="page-wrapper">
      <!-- Header -->
     <?php include 'includes/topnav.php';?>


      <div class="content-wrapper">
        <div class="content">
          <!-- Top Statistics -->
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body">
                  <h2 class="mb-1">Posts</h2>
                  <p>Online Signups</p>
                  <div class="chartjs-wrapper">
                    <canvas id="barChart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini  mb-4">
                <div class="card-body">
                  <h2 class="mb-1">Comments</h2>
                  <p>New Visitors Today</p>
                  <div class="chartjs-wrapper">
                    <canvas id="dual-line"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body">
                  <h2 class="mb-1">Categories</h2>
                  <p>Monthly Total Order</p>
                  <div class="chartjs-wrapper">
                    <canvas id="area-chart"></canvas>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="card card-mini mb-4">
                <div class="card-body">
                  <h2 class="mb-1">Users</h2>
                  <p>Total Revenue This Year</p>
                  <div class="chartjs-wrapper">
                    <canvas id="line"></canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>




      </div>

     <?php include 'includes/footer.php'; ?>

    </div>
  </div>


  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
  <script src="assets/plugins/jquery/jquery.min.js"></script>
  <script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/plugins/toaster/toastr.min.js"></script>
  <script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
  <script src="assets/plugins/charts/Chart.min.js"></script>
  <script src="assets/plugins/ladda/spin.min.js"></script>
  <script src="assets/plugins/ladda/ladda.min.js"></script>
  <script src="assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
  <script src="assets/plugins/select2/js/select2.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
  <script src="assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
  <script src="assets/plugins/daterangepicker/moment.min.js"></script>
  <script src="assets/plugins/daterangepicker/daterangepicker.js"></script>
  <script src="assets/plugins/jekyll-search.min.js"></script>
  <script src="assets/js/sleek.js"></script>
  <script src="assets/js/chart.js"></script>
  <script src="assets/js/date-range.js"></script>
  <script src="assets/js/map.js"></script>
  <script src="assets/js/custom.js"></script>



</body>

</html>