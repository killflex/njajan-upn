<?php
    include '../koneksi.php';
    include 'components/session.php';
    $data = mysqli_query($koneksi, "SELECT * FROM admin")
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
                            <a class="nav-link" href="dashboard.php">
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
                            <a class="nav-link active" href="kelola-admin.php">
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
                        <h1 class="mt-4">Kelola Admin</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Kelola Admin</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="d-flex justify-content-end align-items-center card-header">
                                <a class="btn btn-success btn-sm add" data-bs-toggle="modal" data-bs-target="#AddModal" href="javascript:void(0);" onclick="resetAllInput()"><i class="fas fa-plus fa-sm fa-fw"></i> Tambah Admin</a>
                            </div>                            
                            <div class="card-body">    
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th>Username</th>
                                            <th>Role</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1;
                                        foreach ($data as $tabel) : ?>
                                        <tr>
                                            
                                            <td><?= $no ?></td>
                                            <td><?= $tabel['username'] ?></td>
                                            <td><?= $tabel['role'] ?></td>
                                            <td>
                                                <a class="text-warning edit" data-bs-toggle="modal" data-bs-target="#EditModal" data-id_admin="<?= $tabel['id_admin'] ?>" data-username="<?= $tabel['username'] ?>" data-role="<?= $tabel['role'] ?>" href="javascript:void(0) edit;"><i class='bx bxs-edit bx-sm'></i></a>
                                                <a class="text-danger delete" data-bs-toggle="modal" data-bs-target="#DeleteModal" data-id_admin="<?= $tabel['id_admin'] ?>" data-username="<?= $tabel['username'] ?>" data-role="<?= $tabel['role'] ?>" href="javascript:void(0) delete;"><i class='bx bxs-trash bx-sm' ></i></a>
                                            </td>
                                            
                                        </tr>
                                        <?php $no++;
                                        endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

                <?php include 'components/footer.php' ?>

            </div>
        </div>

        <?php 
            include 'components/script.php';
            include 'components/modal/modal_tambah_admin.php';
            include 'components/modal/modal_edit_admin.php';
            include 'components/modal/modal_delete_admin.php'; 
        ?>
    </body>
</html>
