                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800 float-center"><?= $title; ?></h1>
                    <div class="card-group my-5">
                        <div class="card">
                            <img src="<?= base_url('assets/img/rapot1.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-success">Input Siswa Kelas 10</h3>
                                <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa"> Input <a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('assets/img/rapot2.png') ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h3 class="card-title text-success">Input Siswa Kelas 11</h3>
                                <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa2"> Input <a>
                            </div>
                        </div>
                        <div class="card">
                            <img src="<?= base_url('assets/img/rapot3.png') ?>" class="card-img-top" alt="...">
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
                                <h5 class="modal-title " id="inputSiswa">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="" method="post" action="<?= base_url('input/rapot'); ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                <div class="form-group">
                                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS">
                                    </div>
                                    <div class="form-group">
                                      <label> Nama Siswa </label>
									  <select class="form-control" name="nama" onkeyup="isi_otomatis()" id="nama">
									  <?php foreach($inputr as $s){ ?>
                                        <?php if($s['kelas'] === '10'): ?>
									  <option value="<?php echo $s['nama']; ?>"> <?php echo $s['nis']; ?> <?php echo $s['nama']; ?>  </option>
                                        <?php endif; ?>
									  <?php } ?>
									  </select>
                                    </div>

                                    <div class="form-group">
									   <label for="inputState">Mata Pelajaran</label>
                                            <select id="mapel" name="mapel" class="form-control">
												<option>--Pilih--</option>
                                                <option>Matematika</option>
                                                <option>Bahasa indonesia</option>
                                                <option>Bahasa Inggris</option>
                                            </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bind" name="uts" placeholder="Masukan Nilai UTS">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bing" name="uas" placeholder="Masukan Nilai UAS">
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
                                <h5 class="modal-title " id="inputSiswa">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('kelas/sebelas') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukan NIS">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="mtk" name="mtk" placeholder="Masukan Nilai Matematika">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bind" name="bind" placeholder="Masukan Nilai Bahasa Inggris">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bing" name="bing" placeholder="Masukan Nilai Bahasa Indonesia">
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
                                <h5 class="modal-title " id="inputSiswa">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="<?= base_url('kelas/duabelas') ?>" method="post">
                                <div class="modal-body">
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="nis" name="nis" placeholder="Masukan NIS">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="mtk" name="mtk" placeholder="Masukan Nilai Matematika">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bind" name="bind" placeholder="Masukan Nilai Bahasa Inggris">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" class="form-control" id="bing" name="bing" placeholder="Masukan Nilai Bahasa Indonesia">
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

