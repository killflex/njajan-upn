<form action="" method="post">
    <div class="modal fade" id="DeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Hapus Admin</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah anda yakin? Anda tidak akan dapat mengembalikan data!</p>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id_admin" class="id_admin">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" name="delete" class="btn btn-danger">Hapus</button>
                </div>
            </div>
        </div>
    </div>
</form>

    <script>
        //delete data
        $(document).ready(function(){
            $('#mytable').on('click', '.delete', function() {
                var role = $(this).data("role");
                var username = $(this).data("username");
                var id_admin = $(this).data("id_admin");
                
                $("#DeleteModal").modal("show");
                $(".role").val(role);
                $(".username").val(username);
                $(".id_admin").val(id_admin);
            });
        });
    </script>

    <?php
    if (isset($_POST['delete'])) {
        $id_admin = $_POST['id_admin'];
        $query_delete_admin = "DELETE FROM admin WHERE id_admin = '$id_admin'";
        $wes2 = mysqli_query($koneksi, $query_delete_admin);


        if ($wes2) {
            echo "<script>
            swal('Berhasil!', 'Data Admin berhasil dihapus', 'success').then((value) => {
                document.location.href = 'kelola-admin.php';
            }) ;
            </script>";
        }else{
            echo "<script>
            swal('Maaf!', 'Data Admin gagal dihapus!', 'error').then((value) => {
                document.location.href = 'kelola-admin.php'';
            }) ;
            </script>";
        }
    }

