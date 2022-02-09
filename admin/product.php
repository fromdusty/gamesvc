<?php 

  include "connect.php";
  include "include/header.php";
  include "include/sidebar.php"; 

  $query = "SELECT * FROM data_product";
  $sql = mysqli_query($conn, $query);

  $no = 0;

  

?>
      <!-- ============================================================== -->
      <!-- End Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <!-- End Sidebar -->

      <!-- ============================================================== -->
      <!-- Page wrapper  -->
      <!-- ============================================================== -->
      <div class="page-wrapper">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <?php include "include/breadcrumb.php"?>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- Content -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <!-- <div class="container-fluid">
          <div class="row">
            <div class="col-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-4">Data Produk</h4>
                  <form
                    action="http://localhost/yourkasir/register"
                    method="POST"
                  >
                    <div class="form-body">
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Nama Produk</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="text"
                                  name="nama"
                                  value=""
                                  class="form-control"
                                  required="1"
                                  placeholder="Nama Produk"
                                />
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Kode (API)</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="email"
                                  name="email"
                                  value=""
                                  class="form-control"
                                  placeholder="Masukan alamat email aktif"
                                  required="1"
                                />
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Deskripsi</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="text"
                                  name="description"
                                  value=""
                                  class="form-control"
                                  placeholder="Deskripsi"
                                />
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Mode Transaksi</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <select
                                  class="form-control"
                                  name="trxmode"
                                  id="trxmode"
                                >
                                  <option value="AUTO">AUTO</option>
                                  <option value="MANUAL">MANUAL</option>
                                </select>
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Thumbnail</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <input
                                  type="file"
                                  name="thumbnail"
                                  value=""
                                  class="form-control"
                                  accept="image/png, image/jpg, image/jpeg"
                                />
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="row">
                          <label class="col-lg-2">Status</label>
                          <div class="col-lg-10">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <select
                                    class="form-control"
                                    name="status"
                                    id="status"
                                  >
                                    <option value="active">Active</option>
                                    <option value="inactive">Inactive</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="row mt-1">
                              <div class="col-md-12"></div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-actions">
                      <div class="text-right">
                        <button type="submit" class="btn btn-info">
                          Tambah Produk
                        </button>
                        <a href="product.html" class="btn btn-dark">Reset</a>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div> -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Data Produk</h4>
                  </div>
                  <a href="manage.php" class="btn btn-outline-primary">
                    <i class="fa fa-plus"></i> Tambah Data</a>
                  <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                      <thead>
                        <tr class="border-0">
                          <th
                            class="border-0 font-14 font-weight-medium text-muted px-2"
                          >
                            No
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center px-2"
                          >
                            Nama Produk
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted px-2 text-center"
                          >
                            Kode
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                          >
                            Mode Trx
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                            width="100"
                          >
                            Thumbnail
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                          >
                            Status
                          </th>

                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                          >
                            Action
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php 
                        while($result = mysqli_fetch_assoc($sql)){
                        ?>
                        <tr>
                          <td class="border-top-0 px-2 py-4 font-weight-medium">
                            <?php echo ++$no ?>
                          </td>
                          <td class="border-top-0 text-muted px-2 py-4 font-14 text-center">
                            <?php echo $result['product_name'] ?>
                          </td>
                          <td
                            class="border-top-0 text-muted px-2 py-4 font-14 text-center"
                          >
                            <?php echo $result['product_code']?>
                          </td>
                          <td
                            class="border-top-0 text-center text-muted px-2 py-4"
                          >
                            <?php echo $result['product_type'] ?>
                          </td>
                          <td
                            class="border-top-0 text-center text-muted px-2 py-4"
                          >
                            <img
                              src="img/<?php echo $result['thumbnail'] ?>"
                              width="100%"
                              alt=""
                            />
                          </td>
                          <td
                            class="border-top-0 text-center text-muted px-2 py-4"
                          >
                            <?php echo $result['product_status'] ?>
                          </td>
                          <td
                            class="border-top-0 text-center text-muted px-2 py-4"
                          >
                            <a
                              href="manage.php?edit=<?php echo $result['id'] ?>"
                              class="btn btn-outline-primary btn-rounded"
                            >
                              <i class="fa fa-edit"></i>
                              </a
                            >

                            <a
                              href="process.php?delete=<?php echo $result['id'] ?>"
                              class="btn btn-outline-primary btn-rounded"
                              onclick="return confirm('Anda yakin ingin menghapus data ini?')"
                            >
                              <i class="fa fa-trash"></i>
                              </a
                            >
                          </td>
                        </tr>

                        <?php 
                        }
                        ?>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="row d-flex justify-content-center">
                  <nav aria-label="Page navigation example">
                    <ul class="pagination">
                      <li class="page-item active">
                        <a href="#" class="page-link"
                          >1<span class="sr-only">(current)</span></a
                        >
                      </li>
                      <li class="page-item">
                        <a
                          href="http://localhost/yourkasir/sales/2"
                          class="page-link"
                          data-ci-pagination-page="2"
                          >2</a
                        >
                      </li>
                      <li class="page-item">
                        <a
                          href="http://localhost/yourkasir/sales/3"
                          class="page-link"
                          data-ci-pagination-page="3"
                          >3</a
                        >
                      </li>
                      <li class="page-item">
                        <a
                          href="http://localhost/yourkasir/sales/2"
                          class="page-link"
                          data-ci-pagination-page="2"
                          rel="next"
                          >»</a
                        >
                      </li>
                    </ul>
                  </nav>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- End Content -->

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
