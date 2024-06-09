<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include './admin/components/style.php' ?>
    </head>
    <body class="sb-nav-fixed">
        <!-- Navbar Start -->
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand d-flex justify-content-center align-content-center" href="index.html">
                <img src="https://static.tacdn.com/img2/brand_refresh/Tripadvisor_lockup_horizontal_secondary_registered.svg" alt="" class="" width="160">
            </a>
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <ul class="navbar-nav d-inline-block ms-auto me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item disabled" href="#!">Ferry Hasan</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- Navbar End -->


        <div id="layoutSidenav">

            <!-- Sidebar Start -->
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main Page</div>
                            <a class="nav-link active" href="dashboard.html">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-dashboard py-auto bx-xs'></i>
                                </div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="kelola-tempat.html">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-store-alt py-auto bx-xs'></i>
                                </div>
                                Kelola Tempat
                            </a>
                            <a class="nav-link" href="kelola-admin.html">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-user-rectangle py-auto bx-xs' ></i>
                                </div>
                                Kelola Admin
                            </a>
                        </div>
                    </div>
                </nav>
            </div>
            <!-- Sidebar End -->

            <div id="layoutSidenav_content">

                <!-- Main Content -->
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        
                        <div class="row">
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-info">
                                    <div class="inner">
                                        <h2>150</h1>
                                        <p class="fw-semibold">New Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bxs-shopping-bag' ></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <h2>150</h1>
                                        <p class="fw-semibold">New Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bxs-shopping-bag' ></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <h2>150</h1>
                                        <p class="fw-semibold">New Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bxs-shopping-bag' ></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <h2>150</h1>
                                        <p class="fw-semibold">New Orders</p>
                                    </div>
                                    <div class="icon">
                                        <i class='bx bxs-shopping-bag' ></i>
                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </main>

                <?php include './admin/components/footer.php' ?>

            </div>
        </div>


        <?php include './admin/components/script.php' ?>
    </body>
</html>
