<?php

$sql = "SELECT * FROM siswa ORDER BY id_siswa ASC;";
$query = mysqli_query($db_conn, $sql);

$sql_count = "SELECT id_siswa FROM siswa;";
$query_count = mysqli_query($db_conn, $sql_count);
$row = $query->num_rows;
?>

<section id="list-student">
    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <table class="table table-responsive-sm table-hover table-striped">
                    <thead class="bg-secondary-custom text-white text-center">
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Alamat</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Sekolah Asal</th>
                            <th>Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if ($row > 0) {
                            $i = 1;
                            while ($data = mysqli_fetch_array($query)) {
                        ?>
                                <tr>
                                    <td class="text-center"><?= $i++; ?></td>
                                    <td><?= $data['nama_siswa']; ?></td>
                                    <td><?= $data['alamat']; ?></td>
                                    <td><?= $data['jenis_kelamin']; ?></td>
                                    <td><?= $data['agama']; ?></td>
                                    <td><?= $data['sekolah_asal']; ?></td>
                                    <td class="text-center">
                                        <a href="index.php?p=update-student&id=<?= $data['id_siswa']; ?>" class="btn btn-sm btn-primary" data-toggle="tooltip" data-placement="top" title="Edit">Edit</a>
                                        <a href="index.php?p=delete-student&id=<?= $data['id_siswa']; ?>" class="btn btn-sm btn-danger confirm" data-toggle="tooltip" data-placement="top" title="Hapus">Hapus</a>
                                    </td>
                                </tr>
                            <?php
                            }
                        } else { ?>
                            <tr>
                                <td colspan="7" class="text-center">Data tidak tersedia di database</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
</section>