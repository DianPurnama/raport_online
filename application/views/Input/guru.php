                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <?php if (validation_errors()) : ?>
                        <?= $this->session->flashdata('guru'); ?>
                            <?php endif; ?>
                            <?= $this->session->flashdata('guruB'); ?>
                    <div class="row">

                        <div class="col-lg-12">
                            <a href="" class="btn btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#tambahGuru"> Tambah Guru Baru<a>

                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">Email</th>
												<th scope="col">Tanggal Lahie</th>
                                                <th scope="col">Alamat</th>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($guru as $g) : ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $g['nama']; ?></td>
                                                    <td><?= $g['email']; ?></td>
													<td><?= $g['tgl_lahir']; ?></td>
                                                    <td><?= $g['alamat']; ?></td>
                                                    <td><?= $g['mapel']; ?></td>
                                                    <td>
                                                        <a href="<?= base_url('input/ubahData/'); echo $g['id']; ?>" class="badge badge-success"> Edit</a>
                                                        <a href="<?= base_url('input/hapusGuru/');
                                                            echo $g['id']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus menu ?<?= $g['nama']; ?>');"> Delete</a>
                                                    </td>
                                                </tr>
                                                <?php $i++; ?>
                                            <?php endforeach; ?>
                                        </tbody>
                                    </table>
                        </div>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="tambahGuru" tabindex="-1" role="dialog" aria-labelledby="menuBaru" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="menuBaru">Tambah Guru</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan nama">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
										<div class="form-group">
                                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Masukan Tanggal Lahir">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                        <select name="mapel" id="menu_id" class="form-control">
                                            <option value=""><p class="text-secondary">Pilih Mata Pelajaran</p></option>
                                            <option value="Matematika" name="mapel"> Matematika</option>
                                            <option value="Bahasa Inggris" name="mapel"> Bahasa Inggris</option>
                                            <option value="Bahasa Indonesia" name="mapel"> Bahasa Indonesia</option>
                                        </select>
                                        <?= form_error('mapel', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->