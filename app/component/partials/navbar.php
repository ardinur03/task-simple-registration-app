<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <a class="navbar-brand" href="<?= base_url(); ?>">DIGITAL TALENT</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item" id="nav-link-active">
                <a class="nav-link <?= $_GET['p'] == 'list-student' ? 'active' : ''; ?>" href="<?= base_url(); ?>?p=list-student">Calon Peserta</a>
            </li>
            <li class="nav-item <?= $_GET['p'] == 'register-student' ? 'active' : ''; ?>" id="nav-link-active">
                <a class="nav-link" href="<?= base_url(); ?>?p=register-student">Daftar Baru</a>
            </li>
        </ul>
    </div>
</nav>