<?php

if (isset($_GET['id'])) { // memperoleh id_siswa
    $id_siswa = $_GET['id'];

    if (!empty($id_siswa)) {
        // Query
        $sql = "DELETE FROM siswa WHERE id_siswa = '{$id_siswa}';";
        $query = mysqli_query($db_conn, $sql);
    } else {
        echo "<script>alert('ID siswa kosong!');</script>";
    }
} else {
    echo "<script>alert('ID siswa tidak didefinisikan!');</script>";
}

// mengalihkan halaman
echo "<script>alert('Data berhasil di hapus');</script>";
echo "<meta http-equiv='refresh' content='0; url=index.php?p=list-student'>";
