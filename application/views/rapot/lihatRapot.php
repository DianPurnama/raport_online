                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">

                        <div class="col-lg-12">
                            <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

                            <?= $this->session->flashdata('message'); ?>

                            <a href="" class="btn btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#cariRapot"> Cari Rapot Siswa<a>
                                    <div class="card">
                                        <div class="card-body">
                                            <h3 class="text-center"> Laporan Nilai Kelas 10</h3>
                                        </div>
                                    </div>
                                    <table class="table table-hover mt-3">
                                        <thead>
                                        <tr>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">UTS</th>
                                                <th scope="col">UAS</th>
                                                <th scope="col">RATA-RATA</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($tampil as $ct) : ?>
                                            <tr>
                                                <td><?= $ct['mapel'];?> </td>
                                                <td><?= $ct['nilai_uts'];?> </td>
                                                <td><?= $ct['nilai_uas'];?> </td>
                                                <td><?= $ct['rerata'];?> </td>
                                                <td> <a href="<?= base_url('rapot/rapotsiswa') ?>" class="badge badge-warning" target="_blank"> Cetak</a></td>
                                                <?php endforeach; ?>
                                            </tr>
                                        </tbody>
                                    </table>
                        </div>
                    </div>

                    <!-- /.container-fluid -->
                    <div class="modal fade" id="cariRapot" tabindex="-1" role="dialog" aria-labelledby="cariRapot" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title " id="cariRapot">Tambah Siswa Baru</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('rapot/lihatRapot') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukan NIS">
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="inputState">Kelas</label>
                                            <select id="inputState" class="form-control">
                                                <option>10</option>
                                                <option>11</option>
                                                <option>12</option>
                                            </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-success">Cari</button>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
                <!-- End of Main Content -->
                </div>
                </div>