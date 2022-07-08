<section id="home-section">

    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4 title-header text-bold">Selamat Datang Calon Peserta Digital Talent </h1>
            <?php
            if (isset($_SESSION['message'])) {
            ?>
                <p class="lead"><?= $_SESSION['message'] ?></p>
            <?php } else { ?>
                <p class="lead">Silakan pilih <a href="<?= base_url(); ?>?p=register-student" class="text-decoration-none"><b>Menu Daftar Baru</b></a> untuk melakukan pendaftaran</p>
            <?php
            }
            ?>
        </div>
    </div>




</section>