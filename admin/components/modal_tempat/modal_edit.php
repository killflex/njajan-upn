<form action="" method="post">
        <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Username</label>
                                    <input type="text" name="username" class="form-control username">
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label>Role</label>
                                    <input type="text" name="role" class="form-control role">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id_admin" class="id_admin">
                        <button type="submit" name="update" class="btn btn-success">Edit</button>
                    </div>
                </div>
            </div>
        </div>
</form>

<script>
    $(document).ready(function(){
        $('#mytable').on('click', '.edit', function() {
            var username = $(this).data("username");
            var role = $(this).data("role");
            var id_admin = $(this).data("id_admin");
            
            $("#EditModal").modal("show");
            $(".username").val(username);
            $(".role").val(role);
            $(".id_admin").val(id_admin);
        });
    });
</script>

<?php 
    if (isset($_POST['update'])) {
        $role = $_POST['role'];
        $username = $_POST['username'];
        $id_admin = $_POST['id_admin'];

        $query_edit_admin = "UPDATE admin SET 
            role = '$role',
            username = '$username'

            WHERE id_admin = '$id_admin'
        ";

    $wes1 = mysqli_query($koneksi, $query_edit_admin);

    if ($wes1 > 0) {
        echo "<script>
        swal('Berhasil!', 'Data Admin berhasil diedit!', 'success').then((value) => {
            document.location.href = 'kelola-admin.php';
        }) ;
        </script>";
    }else{
        echo "<script>
        swal('Maaf!', 'Data Admin gagal diedit!', 'error').then((value) => {
            document.location.href = 'kelola-admin.php';
        }) ;
        </script>";
    }
// return mysqli_affected_rows($koneksi);
} 
?>