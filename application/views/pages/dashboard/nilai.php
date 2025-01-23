<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <a class="btn hor-grd btn-grd-primary mb-4 btn " data-bs-toggle="modal"
                        data-bs-target="#tambahNilaiModal">
                        <i class="ti-plus text-white"></i>
                        <span class="text-white">Tambah Nilai</span>
                    </a>

                    <div class="modal fade" id="tambahNilaiModal" tabindex="-1" aria-labelledby="tambahNilaiModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="tambahNilaiModalLabel">Tambah Penilaian</h5>
                                    <button type="button" data-bs-dismiss="modal" aria-label="Close">
                                        <i class="ti-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="<?= base_url('nilai/tambah-nilai') ?>">
                                        <input type="hidden" class="form-control" id="mahasiswa_id" name="mahasiswa_id"
                                            value="<?= $detail_mahasiswa[0]->id ?>">
                                        <input type="hidden" class="form-control" id="mata_kuliah_id"
                                            name="mata_kuliah_id" value="<?= $detail_mata_kuliah[0]->id ?>">
                                        <div class="mb-3">
                                            <label for="nilai" class="form-label">Nilai</label>
                                            <input type="number" class="form-control" id="nilai" name="nilai">
                                        </div>
                                        <div class="mb-3">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <textarea class="form-control" id="keterangan" name="keterangan"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="type" class="form-label">Type</label>
                                            <select name="type" id="type" class="form-control">
                                                <option value="diskusi">Diskusi</option>
                                                <option value="praktikum">Praktikum</option>
                                                <option value="responsi">Responsi</option>
                                                <option value="uts">UTS</option>
                                                <option value="uas">UAS</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Tutup</button>
                                            <button type="submit" class="btn btn-primary" name="submit">Simpan</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

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

                                                                <div class="modal fade" id="editNilaiModal<?= $record['id'] ?>"
                                                                    tabindex="-1"
                                                                    aria-labelledby="editNilaiLabel<?= $record['id'] ?>"
                                                                    aria-hidden="true">
                                                                    <div class="modal-dialog">
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <h5 class="modal-title"
                                                                                    id="editNilaiLabel<?= $record['id'] ?>">Edit
                                                                                    Penilaian</h5>
                                                                                <button type="button" data-bs-dismiss="modal"
                                                                                    aria-label="Close">
                                                                                    <i class="ti-close"></i>
                                                                                </button>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <form method="POST"
                                                                                    action="<?= base_url('nilai/edit-nilai') ?>">

                                                                                    <input type="hidden" class="form-control"
                                                                                        id="mahasiswa_id" name="mahasiswa_id"
                                                                                        value="<?= $detail_mahasiswa[0]->id ?>">
                                                                                    <input type="hidden" class="form-control"
                                                                                        id="mata_kuliah_id" name="mata_kuliah_id"
                                                                                        value="<?= $detail_mata_kuliah[0]->id ?>">
                                                                                    <input type="hidden" class="form-control"
                                                                                        id="nilai_id" name="nilai_id"
                                                                                        value="<?= $record['id'] ?>">
                                                                                    <div class="mb-3">
                                                                                        <label for="nilai<?= $record['id'] ?>"
                                                                                            class="form-label">Nilai</label>
                                                                                        <input type="number" class="form-control"
                                                                                            id="nilai<?= $record['id'] ?>"
                                                                                            name="nilai"
                                                                                            value="<?= $record['nilai'] ?>"
                                                                                            required>
                                                                                    </div>
                                                                                    <div class="mb-3">
                                                                                        <label for="keterangan<?= $record['id'] ?>"
                                                                                            class="form-label">Keterangan</label>
                                                                                        <textarea class="form-control"
                                                                                            id="keterangan<?= $record['id'] ?>"
                                                                                            name="keterangan" rows="3"
                                                                                            required><?= $record['keterangan'] ?></textarea>
                                                                                    </div>
                                                                                    <div class="modal-footer">
                                                                                        <button type="button"
                                                                                            class="btn btn-secondary"
                                                                                            data-bs-dismiss="modal">Tutup</button>
                                                                                        <button type="submit"
                                                                                            class="btn btn-primary">Simpan</button>
                                                                                    </div>
                                                                                </form>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <tr>
                                                                    <td><?= $record['nilai'] ?></td>
                                                                    <td><?= $record['keterangan'] ?></td>
                                                                    <td>
                                                                        <a href="#" class="btn hor-grd btn-grd-warning btn-sm mr-2"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#editNilaiModal<?= $record['id'] ?>">
                                                                            <i class="ti-pencil-alt"></i><span>Edit</span>
                                                                        </a>
                                                                        <a href="<?= base_url('nilai/delete-nilai/' . $detail_mata_kuliah[0]->id . '/' . $detail_mahasiswa[0]->id . '/' . $record['id']) ?>"
                                                                            class="btn hor-grd btn-grd-danger btn-sm tombol-hapus">
                                                                            <i class="ti-trash"></i><span>Hapus</span>
                                                                        </a>
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