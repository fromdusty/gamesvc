<header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-md">
          <div class="navbar-header" data-logobg="skin6">
            <!-- This is for the sidebar toggle which is visible on mobile only -->
            <a
              class="nav-toggler waves-effect waves-light d-block d-md-none"
              href="javascript:void(0)"
            >
              <i class="ti-menu ti-close"></i>
            </a>
            <!-- ============================================================== -->
            <!-- Logo -->
            <!-- ============================================================== -->
            <div class="navbar-brand">
              <!-- Logo icon -->
              <a href="">
                <b class="logo-icon">
                  <!-- Dark Logo icon -->
                  <img
                    src="assets/images/svmmer.png"
                    height="40"
                    alt="homepage"
                    class="dark-logo"
                  />
                  <!-- Light Logo icon -->
                  <img
                    src="assets/images/svmmer.png"
                    height="40"
                    alt="homepage"
                    class="light-logo"
                  />
                </b>
                <!--End Logo icon -->
              </a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Toggle which is visible on mobile only -->
            <!-- ============================================================== -->
            <a
              class="topbartoggler d-block d-md-none waves-effect waves-light"
              href="javascript:void(0)"
              data-toggle="collapse"
              data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
              ><i class="ti-more"></i
            ></a>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse collapse" id="navbarSupportedContent">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
              <li class="nav-item d-none d-md-block">
                <a class="nav-link">
                  <button type="button" class="btn btn-rounded btn-light">
                    <i class="fas fa-user"></i> &nbsp;Anda sebagai admin
                  </button>
                </a>
              </li>
            </ul>
            <!-- ============================================================== -->
            <!-- Right side toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav float-right">
              <!-- ============================================================== -->
              <!-- Search -->
              <!-- ============================================================== -->
              <!-- Menu Pesan menampilkan search box -->
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle"
                  href="javascript:void(0)"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <img
                    src="assets/images/navbar/admin.png"
                    alt="user"
                    class="rounded-circle"
                    width="40"
                  />
                  <span class="ml-2 d-none d-lg-inline-block">
                    <span>Hallo,</span>
                    <span class="text-dark">Adnan Maulana</span>
                    <i data-feather="chevron-down" class="svg-icon"></i>
                  </span>
                </a>
                <div
                  class="dropdown-menu dropdown-menu-right user-dd animated flipInY"
                >
                  <a class="dropdown-item" href="user">
                    <i data-feather="user" class="svg-icon mr-2 ml-1"></i>My
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="user/edit/6">
                    <i data-feather="settings" class="svg-icon mr-2 ml-1"></i
                    >Account Setting
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="logout">
                    <i data-feather="power" class="svg-icon mr-2 ml-1"></i
                    >Logout
                  </a>
                </div>
              </li>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
            </ul>
          </div>
        </nav>
      </header>