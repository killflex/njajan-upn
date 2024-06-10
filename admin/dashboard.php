<?php
    include '../koneksi.php';
    include 'components/session.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include 'components/style.php' ?>
    </head>
    <body class="sb-nav-fixed">
        <?php include 'components/navbar.php' ?>

        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Main Page</div>
                            <a class="nav-link active" href="dashboard.php">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-dashboard py-auto bx-xs'></i>
                                </div>
                                Dashboard
                            </a>
                            <a class="nav-link" href="kelola-tempat.php">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-store-alt py-auto bx-xs'></i>
                                </div>
                                Kelola Tempat
                            </a>
                            <a class="nav-link" href="kelola-admin.php">
                                <div class="sb-nav-link-icon d-flex justify-content-center">
                                    <i class='bx bxs-user-rectangle py-auto bx-xs' ></i>
                                </div>
                                Kelola Admin
                            </a>
                        </div>
                    </div>
                </nav>
            </div>

            <div id="layoutSidenav_content">
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
                                        <?php $query =  "SELECT COUNT(*) as total FROM admin;";
                                        foreach (mysqli_query($koneksi, $query) as $card): ?>
                                        <h2><?= $card['total'] ?></h1>
                                        <?php endforeach; ?>
                                        <p class="fw-semibold">Jumlah Admin</p>
                                    </div>
                                    <div class="icon">
<i class='bx bxs-user' ></i>                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-success">
                                    <div class="inner">
                                        <?php $query1 =  "SELECT COUNT(*) as total FROM tempat WHERE kategori = 'Kafe'";
                                        foreach (mysqli_query($koneksi, $query1) as $card1): ?>
                                        <h2><?= $card1['total'] ?></h1>
                                        <?php endforeach; ?>
                                        <p class="fw-semibold">Jumlah Cafe</p>
                                    </div>
                                    <div class="icon">
<i class='bx bxs-drink' ></i>                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-warning">
                                    <div class="inner">
                                        <?php $query2 =  "SELECT COUNT(*) as total FROM tempat WHERE kategori = 'Warung'";
                                        foreach (mysqli_query($koneksi, $query2) as $card1): ?>
                                        <h2><?= $card1['total'] ?></h1>
                                        <?php endforeach; ?>
                                        <p class="fw-semibold">Jumlah Warung</p>
                                    </div>
                                    <div class="icon">
<i class='bx bxs-bowl-hot' ></i>                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-danger">
                                    <div class="inner">
                                        <?php $query3 =  "SELECT COUNT(*) as total FROM tempat WHERE kategori = 'Warkop'";
                                        foreach (mysqli_query($koneksi, $query1) as $card3): ?>
                                        <h2><?= $card1['total'] ?></h1>
                                        <?php endforeach; ?>
                                        <p class="fw-semibold">Jumlah Warkop</p>
                                    </div>
                                    <div class="icon">
<i class='bx bxs-sushi' ></i>                                    </div>
                                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </div>    
                        </div>
                    </div>
                </main>

                <?php include 'components/footer.php' ?>

            </div>
        </div>


        <?php include 'components/script.php' ?>
    </body>
</html>
