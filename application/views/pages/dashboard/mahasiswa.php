<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">

                        <!-- <?php var_dump($mahasiswa); ?> -->

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
                                                <th>Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($mahasiswa as $mhs): ?>
                                                <tr>
                                                    <td><?= $mhs->nama ?></td>
                                                    <td><?= $mhs->nim ?></td>
                                                    <td><?= $mhs->prodi ?></td>
                                                    <td><?= $mhs->jenis_kelamin ?></td>
                                                    <td>
                                                        <a href="#" class="btn hor-grd btn-grd-primary btn-sm">Detail</a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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