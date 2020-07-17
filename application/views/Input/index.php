                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 float-center"><?= $title; ?></h1>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="card-group my-5">
                        <div class="card">
                            <img src="<?= base_url('assets/img/kelas10.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-success">Input Siswa Kelas 10</h3>
                                <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa"> Input <a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('assets/img/kelas11.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-success">Input Siswa Kelas 11</h3>
                                <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa2"> Input <a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('assets/img/kelas12.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-success">Input Siswa Kelas 12</h3>
                                <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa3"> Input <a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <!-- input siswa kelas 10-->
                <div class="modal fade" id="inputSiswa" tabindex="-1" role="dialog" aria-labelledby="inputSiswa" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="inputSiswa">Tambah Siswa Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form method="post" action="<?= base_url('input') ?>" >
                                <div class="modal-body">
              
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Siswa">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
									 <div class="form-group">
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input" checked name="kelas" value="10">
                                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="10">
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
                <!-- input siswa kelas 11-->
                <div class="modal fade" id="inputSiswa2" tabindex="-1" role="dialog" aria-labelledby="inputSiswa2" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="inputSiswa">Tambah Siswa Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('input') ?>" method="post">
                                <div class="modal-body">
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Siswa">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
									 <div class="form-group">
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input" checked name="kelas" value="11">
                                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="11">
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
                <!-- input siswa kelas 12-->
                <div class="modal fade" id="inputSiswa3" tabindex="-1" role="dialog" aria-labelledby="inputSiswa3" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="inputSiswa">Tambah Siswa Baru</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('input') ?>" method="post">
                                <div class="modal-body">
                                   
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Siswa">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
									 <div class="form-group">
                                        <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="Tanggal Lahir">
                                        <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                        <input type="checkbox" aria-label="Checkbox for following text input" checked name="kelas" value="12">
                                        <?= form_error('kelas', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Text input with checkbox" placeholder="12">
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