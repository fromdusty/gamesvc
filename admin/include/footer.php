<!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer text-center text-muted">
          All Rights Reserved by Adnan Maulana.
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
      </div>
      <!-- ============================================================== -->
      <!-- End Page wrapper  -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Main Wrapper -->
    <!-- ============================================================== -->

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/libs/jquery/jquery.min.js"></script>
    <script src="assets/libs/popper.js/umd/popper.min.js"></script>
    <script src="assets/libs/bootstrap/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="assets/js/app-style-switcher.js"></script>
    <script src="assets/js/feather.min.js"></script>
    <script src="assets/libs/perfect-scrollbar/perfect-scrollbar.jquery.min.js"></script>
    <script src="assets/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="assets/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="assets/extra-libs/c3/d3.min.js"></script>
    <script src="assets/extra-libs/c3/c3.min.js"></script>

    <!-- Grafik di dashboard -->
    <script src="assets/libs/chartist/chartist.min.js"></script>
    <script src="assets/libs/chartist-plugin-tooltips/chartist-plugin-tooltip.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/js/pages/dashboards/dashboard.js"></script>

    <!-- Cetak struk -->
    <script>
      function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;

        document.body.innerHTML = printContents;

        window.print();

        document.body.innerHTML = originalContents;
      }
    </script>

    <!-- Tabel inventory pakai data table -->
  </body>
</html>
