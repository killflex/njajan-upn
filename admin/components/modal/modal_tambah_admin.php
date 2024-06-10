<form action="" method="post">
        <div class="modal fade" id="AddModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control username" value="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                                <div class="form-group">
                                    <label>Password</label>
                                    <input type="text" name="password" class="form-control password" value="">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <div class="input-group mb-3">
                                        <select class="form-select" aria-label="Default select example" id="inputGroupSelect01" name="role">
                                            <option selected>Pilih...</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_admin" class="id_admin">
                        <button type="submit" name="insert" class="btn btn-success">Tambah</button>
                    </div>
                </div>
            </div>
        </div>
</form>

<script>
    $(document).ready(function(){
        $('#mytable').on('click', '.add', function() {
        });
    });

    function resetAllInput() {
    const allInput = document.querySelectorAll('input');
    allInput.forEach( input => {
        input.value = "";
    });
}
</script>

<?php 
    if (isset($_POST['insert'])) {
        $id_admin = $_POST['id_admin'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        $role = $_POST['role'];

        $query_tambah_admin = "INSERT INTO admin VALUES 
            ('',
            '$username',
            '$password',
            '$role')";

    $wes1 = mysqli_query($koneksi, $query_tambah_admin);

    if ($wes1 > 0) {
        echo "<script>
        swal('Berhasil!', 'Data Admin berhasil ditambah!', 'success').then((value) => {
            document.location.href = 'kelola-admin.php';
        }) ;
        </script>";
    }else{
        echo "<script>
        swal('Maaf!', 'Data Admin gagal ditambah!', 'error').then((value) => {
            document.location.href = 'kelola-admin.php';
        }) ;
        </script>";
    }
// return mysqli_affected_rows($koneksi);
    } 
?>