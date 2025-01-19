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

                    </div>
                </div>
            </div>

            <div id="styleSelector">

            </div>
        </div>
    </div>
</div>