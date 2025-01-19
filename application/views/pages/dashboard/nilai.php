<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <a class="btn btn-primary mb-4" href="#">
                        <i class="ti-plus"></i>
                        <span>Tambah Nilai</span>
                    </a>
                    <div class="row">


                        <?php foreach ($detail_mahasiswa as $mhs): ?>

                            <div class="col-sm-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Data Mahasiswa</h5>
                                        <span>Detail Data Mahasiswa</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="card-block table-border-style">
                                            <div class="table-responsive">
                                                <table class="table table-hover">
                                                    <tbody>
                                                        <tr>
                                                            <td>Nama</td>
                                                            <td>:</td>
                                                            <td><?= $mhs->nama ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>NIM</td>
                                                            <td>:</td>
                                                            <td><?= $mhs->nim ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Prodi</td>
                                                            <td>:</td>
                                                            <td><?= $mhs->prodi ?></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Jenis Kelamin</td>
                                                            <td>:</td>
                                                            <td><?= $mhs->jenis_kelamin ?></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <?php foreach ($detail_nilai_mahasiswa as $t => $records): ?>
                            <?php if (empty($records)): ?>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Nilai <?= $t ?></h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Nilai</th>
                                                                <th>Keterangan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Belum ada nilai</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            <?php else: ?>
                                <div class="col-sm-6">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Nilai <?= $t ?></h5>
                                        </div>
                                        <div class="card-block">
                                            <div class="card-block table-border-style">
                                                <div class="table-responsive">
                                                    <table class="table table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Nilai</th>
                                                                <th>Keterangan</th>
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($records as $record): ?>
                                                                <tr>
                                                                    <td><?= $record['nilai'] ?></td>
                                                                    <td><?= $record['keterangan'] ?></td>
                                                                    <td>-</td>
                                                                </tr>
                                                            <?php endforeach; ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            <?php endif; ?>

                        <?php endforeach; ?>


                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>