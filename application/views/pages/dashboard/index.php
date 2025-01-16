<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <!-- card1 start -->
                        <?php foreach ($mata_kuliah as $mk): ?>
                            <div class="col-md-6 col-xl-3">
                                <div class="card widget-card-1">
                                    <div class="card-block-small">
                                        <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                        <h4><?= $mk->nama ?></h4>
                                        <span class="text-c-blue f-w-600">Jumlah Mahasiswa</span>
                                        <h4><?= $mk->jumlah_mahasiswa ?></h4>
                                        <button class="btn btn-primary" data-bs-toggle="modal"
                                            data-bs-target="#<?= $mk->id ?>">Komponen Penilaian
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="modal fade" id="<?= $mk->id ?>" tabindex="-1" aria-labelledby="<?= $mk->id ?>Label"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?= $mk->id ?>Label">Komponen Penilaian -
                                                <?= $mk->nama ?>
                                            </h5>

                                        </div>
                                        <div class="modal-body">
                                            <ul>
                                                <li>Diskusi: <?= $mk->jml_diskusi ?> x <?= $mk->persentase_diskusi ?>% </li>
                                                <li>Praktikum: <?= $mk->jml_praktikum ?> x <?= $mk->persentase_praktikum ?>%
                                                </li>
                                                <li>Responsi: <?= $mk->jml_responsi ?> x <?= $mk->persentase_responsi ?>%
                                                </li>
                                                <li>UTS : <?= $mk->jml_uts ?> x <?= $mk->persentase_uts ?>%</li>
                                                <li>UAS : <?= $mk->jml_uas ?> x <?= $mk->persentase_uas ?>%</li>
                                            </ul>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!-- card1 end -->

                        <!-- table Start -->
                        <div class="col-md-12 col-xl-8">
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
                                            <tr>
                                                <td>Tiger Nixon</td>
                                                <td>System Architect</td>
                                                <td>Edinburgh</td>
                                                <td>61</td>
                                                <td>2011-04-25</td>
                                            </tr>
                                        </tbody>
                                        <!-- <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                            </tr>
                                        </tfoot> -->
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