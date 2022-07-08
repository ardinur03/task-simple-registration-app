<?php

if (!isset($_POST['update'])) {
    if (isset($_GET['id'])) { // memperoleh id_siswa
        $id_siswa = $_GET['id'];

        if (!empty($id_siswa)) {
            // Query
            $sql = "SELECT * FROM siswa WHERE id_siswa = '{$id_siswa}';";
            $query = mysqli_query($db_conn, $sql);
            $row = $query->num_rows;

            if ($row > 0) {
                $data = mysqli_fetch_array($query); // memperoleh data siswa
            } else {
                echo "<script>alert('ID Siswa tidak ditemukan!');</script>";

                // mengalihkan halaman
                echo "<meta http-equiv='refresh' content='0; url=index.php?p=siswa'>";
                exit;
            }
        } else {
            echo "<script>alert('ID siswa kosong!');</script>";

            // mengalihkan halaman
            echo "<meta http-equiv='refresh' content='0; url=index.php?p=siswa'>";
            exit;
        }
    } else {
        echo "<script>alert('ID siswa tidak didefinisikan!');</script>";

        // mengalihkan halaman
        echo "<meta http-equiv='refresh' content='0; url=index.php?p=siswa'>";
        exit;
    }
?>
    <section id="regis-student">
        <div class="container">
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header text-center">
                            <h4>Edit Pendaftaran Siswa</h4>
                        </div>
                        <div class="card-body">
                            <form class="needs-validation" action="" method="POST" novalidate>
                                <input type="hidden" name="id_siswa" value="<?= $data['id_siswa']; ?>">
                                <div class="form-row mb-3">
                                    <div class="col-md-7">
                                        <label for="input-nama">Nama Lengkap Siswa</label>
                                        <input type="text" name="nama_siswa" class="form-control" value="<?= $data['nama_siswa']; ?>" id="input-nama" placeholder="Masukkan nama ..." required>
                                        <div class="invalid-feedback">
                                            Nama Lengkap tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="input-alamat-anda">Alamat</label>
                                        <textarea class="form-control" name="alamat" id="input-alamat-anda" placeholder="Masukkan alamat anda ..." required><?= $data['alamat']; ?></textarea>
                                        <div class="invalid-feedback">
                                            Alamat tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row mb-1">
                                    <div class="col-md-6">
                                        <label for="input-jenis">Jenis Kelamin</label>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" value="L" class="custom-control-input" id="validasi-input-laki" <?= ($data['jenis_kelamin'] == 'L') ? 'checked' : ''; ?> name="jenis_kelamin" required>
                                            <label class="custom-control-label" for="validasi-input-laki">Laki - Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio mb-3">
                                            <input type="radio" value="P" class="custom-control-input" id="validasi-input-perem" <?= ($data['jenis_kelamin'] == 'P') ? 'checked' : ''; ?> name="jenis_kelamin" required>
                                            <label class="custom-control-label" for="validasi-input-perem">Perempuan</label>
                                            <div class="invalid-feedback">Jenis Kelamin tidak boleh kosong</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="input-agama">Agama</label>
                                        <select id="input-agama" name="agama" class="custom-select" required>
                                            <!-- untuk memudahkan dalam selected -->
                                            <?php
                                            $data_agama = [
                                                'Islam', 'kristen', 'Buddha', 'Hindu'
                                            ];
                                            foreach ($data_agama as $nilai) {
                                                if ($nilai == $data['agama']) {
                                                    echo "<option value='$nilai' selected>$nilai</option>";
                                                } else {
                                                    echo "<option value='$nilai'>$nilai</option>";
                                                }
                                            }
                                            ?>
                                        </select>
                                        <div class="invalid-feedback">
                                            Agama tidak boleh kosong
                                        </div>
                                    </div>

                                </div>
                                <div class="form-row">
                                    <div class="col-md-7">
                                        <label for="input-asel">Asal Sekolah</label>
                                        <input type="text" name="asal_sekolah" class="form-control" value="<?= $data['sekolah_asal']; ?>" id="input-asel" placeholder="Masukkan Asal Sekolah ..." required>
                                        <div class="invalid-feedback">
                                            Nama Sekolah tidak boleh kosong
                                        </div>
                                    </div>
                                </div>
                                <div class="btn-group btn-block mt-3" role="group" aria-label="Button group">
                                    <input class="btn btn-primary py-2 px-4 mt-2 btn-kirim" type="submit" name="update" value="Update">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
} else {

    if (isset($_POST['update'])) {

        $id_siswa   = $_POST['id_siswa'];
        $nama_siswa   = $_POST['nama_siswa'];
        $alamat       = $_POST['alamat'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $agama        = $_POST['agama'];
        $sekolah_asal = $_POST['asal_sekolah'];

        $sql = "UPDATE siswa 
            SET  
            siswa.nama_siswa = '{$nama_siswa}',
            siswa.alamat = '{$alamat}', 
            siswa.jenis_kelamin = '{$jenis_kelamin}', 
            siswa.agama = '{$agama}',
            siswa.sekolah_asal = '{$sekolah_asal}'
            WHERE id_siswa = '{$id_siswa}'";

        $query = mysqli_query($db_conn, $sql);

        echo "<script>alert('Data Siswa berhasil di tambahkan');</script>";
        echo "<meta http-equiv='refresh' content='0; url=index.php?p=list-student'>";
    }
}
?>