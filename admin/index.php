<?php 
    include "connect.php";

    $query = "SELECT * FROM data_product";
    $sql = mysqli_query($conn, $query);
?>

<?php 
    include "include/header.php"
?>
      <!-- ============================================================== -->
      <!-- End Topbar header -->
      <!-- ============================================================== -->
      <!-- End Navbar -->

      <!-- Sidebar -->
      <!-- ============================================================== -->
      <!-- Left Sidebar - style you can find in sidebar.scss  -->
      <!-- ============================================================== -->
      <?php include "include/sidebar.php" ?>
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
        <?php include "include/breadcrumb.php" ?>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->

        <!-- Content -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
          <div class="card-group">
            <div class="card border-right m-1">
              <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                    <div class="d-inline-flex align-items-center">
                      <h2 class="text-dark mb-1 font-weight-medium">8</h2>
                    </div>
                    <h6
                      class="text-muted font-weight-normal mb-0 w-100 text-truncate"
                    >
                      Users
                    </h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"
                      ><i data-feather="users"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-right m-1">
              <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                    <h2
                      class="text-dark mb-1 w-100 text-truncate font-weight-medium"
                    >
                      <sup class="set-doller overflow-auto">Rp.</sup>180.900
                    </h2>
                    <h6
                      class="text-muted font-weight-normal mb-0 w-100 text-truncate"
                    >
                      Pendapatan hari ini
                    </h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"
                      ><i data-feather="dollar-sign"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card border-right m-1">
              <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                    <div class="d-inline-flex align-items-center">
                      <h2 class="text-dark mb-1 font-weight-medium">21</h2>
                    </div>
                    <h6
                      class="text-muted font-weight-normal mb-0 w-100 text-truncate"
                    >
                      Penjualan hari ini
                    </h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"
                      ><i data-feather="shopping-cart"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
            <div class="card bordeer-right m-1">
              <div class="card-body">
                <div class="d-flex d-lg-flex d-md-block align-items-center">
                  <div>
                    <h2 class="text-dark mb-1 font-weight-medium">8</h2>
                    <h6
                      class="text-muted font-weight-normal mb-0 w-100 text-truncate"
                    >
                      Pending Transaction
                    </h6>
                  </div>
                  <div class="ml-auto mt-md-3 mt-lg-0">
                    <span class="opacity-7 text-muted"
                      ><i data-feather="box"></i
                    ></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- *************************************************************** -->
          <!-- End First Cards -->
          <!-- *************************************************************** -->
          <!-- *************************************************************** -->
          <!-- Start Location and Earnings Charts Section -->
          <!-- *************************************************************** -->
          <div class="row">
            <!-- Start Aktivitas Penjualan -->
            <div class="col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Aktivitas Penjualan</h4>
                  <div class="mt-4 activity">
                    <div class="d-flex align-items-start border-left-line pb-3">
                      <div>
                        <a
                          href="sales/detail/57"
                          class="btn btn-info btn-circle mb-2 btn-item"
                        >
                          <i data-feather="shopping-cart"></i>
                        </a>
                      </div>
                      <div class="ml-3 mt-2">
                        <h5 class="text-dark font-weight-medium mb-2">
                          Penjualan INV121
                        </h5>
                        <p class="font-14 mb-2 text-muted">
                          Mobile Legends - 86 Diamonds
                          <br />
                          Rp.19.500,-
                        </p>
                        <span class="font-weight-light font-14 text-muted"
                          >2022-01-14 13:46:30</span
                        >
                      </div>
                    </div>
                    <div class="d-flex align-items-start border-left-line pb-3">
                      <div>
                        <a
                          href="sales/detail/57"
                          class="btn btn-info btn-circle mb-2 btn-item"
                        >
                          <i data-feather="shopping-cart"></i>
                        </a>
                      </div>
                      <div class="ml-3 mt-2">
                        <h5 class="text-dark font-weight-medium mb-2">
                          Penjualan INV122
                        </h5>
                        <p class="font-14 mb-2 text-muted">
                          Valorant Points - 700 Points
                          <br />
                          Rp.85.000,-
                        </p>
                        <span class="font-weight-light font-14 text-muted"
                          >2022-01-14 13:46:30</span
                        >
                      </div>
                    </div>
                    <div class="d-flex align-items-start border-left-line pb-3">
                      <div>
                        <a
                          href="sales/detail/57"
                          class="btn btn-info btn-circle mb-2 btn-item"
                        >
                          <i data-feather="shopping-cart"></i>
                        </a>
                      </div>
                      <div class="ml-3 mt-2">
                        <h5 class="text-dark font-weight-medium mb-2">
                          Penjualan INV123
                        </h5>
                        <p class="font-14 mb-2 text-muted">
                          Mobile Legends - 86 Diamonds
                          <br />
                          Rp.19.500,-
                        </p>
                        <span class="font-weight-light font-14 text-muted"
                          >2022-01-14 13:46:30</span
                        >
                      </div>
                    </div>
                    <a
                      href="orders"
                      class="font-14 border-bottom pb-1 border-info"
                      >Load More</a
                    >
                  </div>
                </div>
              </div>
            </div>

            <div class="col-md-6 col-lg-6">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center">
                    <h4 class="card-title">Users</h4>
                  </div>
                  <div class="table-responsive">
                    <table class="table no-wrap v-middle mb-0">
                      <thead>
                        <tr class="border-0">
                          <th
                            class="border-0 font-14 font-weight-medium text-muted px-2"
                          >
                            Nama
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted px-2"
                          >
                            Email
                          </th>

                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                          >
                            Status
                          </th>
                          <th
                            class="border-0 font-14 font-weight-medium text-muted text-center"
                          >
                            No HP
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td class="border-top-0 px-2 py-4">Adnan Maulana</td>
                          <td class="border-top-0 text-muted px-2 py-4 font-14">
                            adnanmaulana@naver.com
                          </td>
                          <td class="border-top-0 text-center px-2 py-4">
                            <i
                              class="fa fa-circle text-success font-12"
                              data-toggle="tooltip"
                              data-placement="top"
                              title="Akun Aktif"
                            ></i>
                          </td>
                          <td
                            class="border-top-0 text-center text-muted px-2 py-4"
                          >
                            082292097600
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
                <div class="card-footer bg-white">
                  <div class="row mb-3">
                    <div class="col-md-12 col-sm-12 mb-2">
                      <a
                        href="users"
                        class="font-14 border-bottom mr-2 border-info float-right"
                        >Load More</a
                      >
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Aktivitas Penjualan -->
          </div>
          <!-- *************************************************************** -->
          <!-- End Location and Earnings Charts Section -->
          <!-- *************************************************************** -->
          <!-- *************************************************************** -->
          <!-- Start List Users -->
          <!-- *************************************************************** -->

          <!-- *************************************************************** -->
          <!-- End List Users -->
          <!-- *************************************************************** -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- End Content -->

        <?php include "include/footer.php" ?>