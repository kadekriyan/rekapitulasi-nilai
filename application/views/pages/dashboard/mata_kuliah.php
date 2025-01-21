<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <?php $mata_kuliah_id = ''; ?>
                        <?php foreach ($detail_mata_kuliah as $mk): ?>
                            <?php $mata_kuliah_id = $mk->id; ?>

                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Komponen Penilaian</h5>
                                        <span>Komponen Penilaian mata kuliah <?= $mk->nama ?></span>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Komponen</th>
                                                            <th>Jumlah</th>
                                                            <th>Persentase</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Diskusi</td>
                                                            <td><?= $mk->jml_diskusi ?></td>
                                                            <td><?= $mk->persentase_diskusi ?>%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Praktikum</td>
                                                            <td><?= $mk->jml_praktikum ?></td>
                                                            <td><?= $mk->persentase_praktikum ?>%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Responsi</td>
                                                            <td><?= $mk->jml_responsi ?></td>
                                                            <td><?= $mk->persentase_responsi ?>%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Uts</td>
                                                            <td><?= $mk->jml_uts ?></td>
                                                            <td><?= $mk->persentase_uts ?>%</td>
                                                        </tr>
                                                        <tr>
                                                            <th scope="row">1</th>
                                                            <td>Uas</td>
                                                            <td><?= $mk->jml_uas ?></td>
                                                            <td><?= $mk->persentase_uas ?>%</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>

                        <div class="col-md-12 col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Mahasiswa</h5>
                                    <div class="card-header-left ">
                                    </div>

                                </div>
                                <div class="card-block">
                                    <table id="example" class="table table-striped table-bordered" style="width:100%">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>NIM</th>
                                                <th>Prodi</th>
                                                <th>Jenis Kelamain</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($data_mahasiswa as $mhs): ?>
                                                <tr>
                                                    <td><?= $mhs->nama ?></td>
                                                    <td><?= $mhs->nim ?></td>
                                                    <td><?= $mhs->prodi ?></td>
                                                    <td><?= $mhs->jenis_kelamin ?></td>
                                                    <td>
                                                        <a href="<?= base_url('dashboard/mata-kuliah/mahasiswa/nilai/' . $mata_kuliah_id . '/' . $mhs->id) ?>"
                                                            class="btn hor-grd btn-grd-primary btn-sm">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
                                        </tbody>

                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>