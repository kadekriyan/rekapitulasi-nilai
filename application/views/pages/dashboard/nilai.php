<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <a class="btn btn-primary" href="#">
                        <i class="ti-plus"></i>
                        <span>Tambah Nilai</span>
                    </a>
                    <div class="row">

                        <?php
                        echo json_encode($detail_nilai_mahasiswa); ?>


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



                        <?php foreach ($detail_nilai_mahasiswa as $nilai): ?>

                            <div class="col-sm-6">
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Komponen Penilaian</h5>
                                        <span>Komponen Penilaian mata kuliah "x"</span>
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
                                                            <td>Diskusi</td>
                                                            <td>"x"</td>
                                                            <td>"x"</td>
                                                        </tr>
                                                    </tbody>
                                                    <tbody>
                                                        <tr>
                                                            <td>Belum ada nilai</td>
                                                            <td>"-"</td>
                                                            <td>"-"</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>



                        <div class="col-sm-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Komponen Penilaian</h5>
                                    <span>Komponen Penilaian mata kuliah "x"</span>
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
                                                        <td>Diskusi</td>
                                                        <td>"x"</td>
                                                        <td>"x"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Praktikum</td>
                                                        <td>"x"</td>
                                                        <td>"x"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Responsi</td>
                                                        <td>"x"</td>
                                                        <td>"x"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uts</td>
                                                        <td>"x"</td>
                                                        <td>"x"</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Uas</td>
                                                        <td>"x"</td>
                                                        <td>"x"</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
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