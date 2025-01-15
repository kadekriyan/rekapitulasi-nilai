<div class="sidebar">
    <div class="profile d-flex gap-2">
        <div class="avatar">
            <img src="<?= base_url('assets/images/profil.jpg'); ?>" alt="avatar" class="avatar">
        </div>
        <div class="sidebar-profile">
            <span class="nim"><?= $this->session->userdata('dosen_nama'); ?></span>
            <span class="nik"><?= $this->session->userdata('dosen_nik'); ?></span>
        </div>
    </div>

    <a class="active" href="<?= base_url('dashboard'); ?>">Dashboard</a>
    <a href="#mahasiswa">Mahasiswa</a>
    <div class="logout bg-danger fixed-bottom text-center">
        <a href="<?= base_url('dosen/logout'); ?>">Logout</a>
    </div>
</div>