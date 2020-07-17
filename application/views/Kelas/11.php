                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">

                        <div class="col-lg-12">
                           <!--  <?php if (validation_errors()) : ?>
                                <div class="alert alert-danger">
                                    <?= validation_errors(); ?>
                                </div>
                            <?php endif; ?>

                            <?= $this->session->flashdata('message'); ?> -->

                            <a href="" class="btn col-md-12 btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#inputSiswa"> Input <a>
                                    <div class="container-fluid">
                                        <div class="card">
                                            <div class="card-body">
                                                <h3 class="text-center"> Laporan Nilai Kelas 11</h3>
                                            </div>
                                        </div>
                                        <table class="table table-hover mt-3">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Nama</th>
                                                    <th scope="col">NIS</th>
                                                    <th scope="col">Tanggal Lahir</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $i = 1; ?>
                                            <?php foreach ($tampil->result_array() as $ct) : ?>
                                                <?php if($ct['kelas'] === '11'): ?>
                                                <tr>
                                                    <th scope="row"><?= $i; ?></th>
                                                    <td><?= $ct['nama'];?></td>
                                                    <td><?= $ct['nis'];?></td>                              
                                                    <td><?= $ct['tgl_lahir'];?></td>                              
                                                    <td>
                                                        <a href="<?= site_url('rapot/detail_rapot/' .$ct['nis']); ?>" class="badge btn-primary" data-toggle="tooltip" data-placement="top"> Lihat Nilai 
                                                        <a>
                                                        <a href="" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus data siswa ?');"> Delete
                                                        </a>
                                                    </td>
                                                </tr>
                                                <?php endif; ?>
                                                <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    </div>
                        </div>
                    </div>

                 
                    <div class="modal fade" id="editNilai" tabindex="-1" role="dialog" aria-labelledby="editNilai" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="editNilai">Edit Nilai Siswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <form action="<?= base_url('input/guru') ?>" method="post">
                                    <div class="modal-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="90">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="90">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="kd_mp" name="kd_mp" placeholder="90">
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
                    <!-- /.container-fluid -->

                </div>
                <!-- End of Main Content -->
                </div>

                 <!-- input siswa kelas 11-->
                 <div class="modal fade" id="inputSiswa" tabindex="-1" role="dialog" aria-labelledby="inputSiswa" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="inputSiswa">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="" method="post" action="<?= base_url('kelas/simpan_nilai11'); ?>" enctype="multipart/form-data">
                                <div class="modal-body">
                                <div class="form-group">
                                        <input type="text" class="form-control" id="nis" name="nis" placeholder="NIS" readonly>
                                    </div>
                                    <div class="form-group">
                                      <label> Nama Siswa </label>
									  <select class="form-control" name="nama" id="nama">
                                      <option value="-" selected>select</option>
                                      <?php foreach ($tampil->result_array() as $ct) : ?>
                                        <?php if($ct['kelas'] === '11'): ?>
									  <option value="<?php echo $ct['nama']; ?>"><?php echo $ct['nama']; ?>  </option>
                                        <?php endif; ?>
                                        <?php endforeach; ?>
									  </select>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="kelas" name="kelas" placeholder="NIS" hidden>
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
             

                <script type="text/javascript" src="<?php echo base_url().'Assets/js/jquery.js'?>"></script>
                                <script type="text/javascript">
        $(document).ready(function(){
             $('#nama').on('input',function(){
                 
                var nama=$(this).val();
                $.ajax({
                    type : "POST",
                    url  : "<?php echo base_url('kelas/get_nama')?>",
                    dataType : "JSON",
                    data : {nama: nama},
                    cache:false,
                    success: function(data){
                        $.each(data,function(nis, nama, kelas){
                            $('[name="nis"]').val(data.nis);
                            $('[name="kelas"]').val(data.kelas);
                             
                        });
                         
                    }
                });
                return false;
           });
 
        });
    </script>