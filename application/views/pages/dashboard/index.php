<!-- CONTENT -->
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <!-- card1 start -->
                        <?php var_dump($mata_kuliah); ?>
                        <?php foreach ($mata_kuliah as $mk): ?>
                        <div class="col-md-6 col-xl-3">
                            <div class="card widget-card-1">
                                <div class="card-block-small">
                                    <i class="icofont icofont-pie-chart bg-c-blue card1-icon"></i>
                                    <h4><?= $mk->nama ?></h4>
                                    <span class="text-c-blue f-w-600">Jumlah Mahasiswa</span>
                                    <h4><?= $mk->jumlah_mahasiswa ?></h4>
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