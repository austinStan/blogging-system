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
        <div class="card card-default">
          <div class="card-header card-header-border-bottom">
            <h2>Add A Category</h2>
          </div>
          <form action ='includes/functions.php' method='post'>
          <div class="card-body">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="fname">Name</label>
                    <input type="text" class="form-control" name='cat_title' placeholder="">
                  </div>
                </div>
              </div>
          </div>
          <div class="form-footer pt-5 m-4 border-top">
            <button type="submit" class="btn btn-success btn-default" name='cat_add'>Save</button>
          </div>
          </form>
          <div class='col-sm-6'>
            <table class="table table-bordered table-striped table-hover"> 
              <thead>
                <th>CategoryID</th>
                <th>Category title</th>
                <th>Action</th>
              </thead>
              <tbody>
               <?php show_category(); ?>
             </tbody>
            </table>
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