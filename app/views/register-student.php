<section id="regis-student">
    <div class="container">
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Pendaftaran Peserta</h4>
                    </div>
                    <div class="card-body">
                        <form class="needs-validation" action="" method="POST" novalidate>
                            <div class="form-row mb-3">
                                <div class="col-md-7">
                                    <label for="input-nama">Nama Lengkap Siswa</label>
                                    <input type="text" name="nama_siswa" class="form-control" id="input-nama" placeholder="Masukkan nama ..." required>
                                    <div class="invalid-feedback">
                                        Nama Lengkap tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-12 mb-3">
                                    <label for="input-alamat-anda">Alamat</label>
                                    <textarea class="form-control" name="alamat" id="input-alamat-anda" placeholder="Masukkan alamat anda ..." required></textarea>
                                    <div class="invalid-feedback">
                                        Alamat tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="form-row mb-1">
                                <div class="col-md-6">
                                    <label for="input-jenis">Jenis Kelamin</label>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" value="L" class="custom-control-input" id="validasi-input-laki" name="jenis_kelamin" required>
                                        <label class="custom-control-label" for="validasi-input-laki">Laki - Laki</label>
                                    </div>
                                    <div class="custom-control custom-radio mb-3">
                                        <input type="radio" value="P" class="custom-control-input" id="validasi-input-perem" name="jenis_kelamin" required>
                                        <label class="custom-control-label" for="validasi-input-perem">Perempuan</label>
                                        <div class="invalid-feedback">Jenis Kelamin tidak boleh kosong</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="col-md-3 mb-3">
                                    <label for="input-agama">Agama</label>
                                    <select id="input-agama" name="agama" class="custom-select" required>
                                        <option value="">Pilih Salah Satu</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Kristen">Kristen</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Hindu">Hindu</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        Agama tidak boleh kosong
                                    </div>
                                </div>

                            </div>
                            <div class="form-row">
                                <div class="col-md-7">
                                    <label for="input-asel">Asal Sekolah</label>
                                    <input type="text" name="asal_sekolah" class="form-control" id="input-asel" placeholder="Masukkan Asal Sekolah ..." required>
                                    <div class="invalid-feedback">
                                        Nama Sekolah tidak boleh kosong
                                    </div>
                                </div>
                            </div>
                            <div class="btn-group btn-block mt-3" role="group" aria-label="Button group">
                                <input class="btn btn-success py-2 px-4 mt-2 btn-kirim" type="submit" name="simpan" value="Simpan">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php

if (isset($_POST['simpan'])) {

    $nama_siswa   = $_POST['nama_siswa'];
    $alamat       = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $agama         = $_POST['agama'];
    $sekolah_asal = $_POST['asal_sekolah'];

    $sql = "INSERT INTO siswa (nama_siswa, alamat, jenis_kelamin, agama, sekolah_asal)
    VALUES('{$nama_siswa}', '{$alamat}', '{$jenis_kelamin}', '{$agama}', '{$sekolah_asal}')";

    $query = mysqli_query($db_conn, $sql);

    //saya menggunakan session karena ingin melemparkan pesan session ini di simpan di file connection
    $_SESSION['message'] = "Pendaftaran Berhasil";


    echo "<script>alert('Data Registrasi berhasil di tambahkan');</script>";
    echo "<meta http-equiv='refresh' content='0; url=index.php'>";
}
?>