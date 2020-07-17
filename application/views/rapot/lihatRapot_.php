                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">

                        <div class="col-lg-12">
                           <div class="card">
                           <?php foreach ($nama as $name) : ?>
                                        <div class="card-body">
                                            <h3 class="text-center"> Laporan Nilai <?= $name['nama'];?> </h3>
                                        </div>
                        <?php endforeach; ?>
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
                                                <td> <a href="<?= base_url('rapot/rapotsiswa/') .$ct['nis']; ?>" class="badge badge-warning" target="_blank"> Cetak</a>
                                                <a href="" class="badge badge-info" data-toggle="modal" data-target="#inputNilai<?php echo $ct['id_nilai'];?>"> Edit Nilai <a>

                                            </td>
                                                <?php endforeach; ?>
                                            </tr>
                                            </tbody>
                                    </table>
                        </div>
                    </div>
                    </div>

                </div>
                <!-- End of Main Content -->
     
                                 <!-- edit nilai-->
                                 <?php
        foreach($tampil as $ct):
            $id=$ct['id_nilai'];
            $nis=$ct['nis'];
            $nama=$ct['nama'];
            $kelas=$ct['kelas'];
            $mapel=$ct['mapel'];
            $uas=$ct['nilai_uas'];
            $uts=$ct['nilai_uts'];
        ?>


                                 <div class="modal fade" id="inputNilai<?php echo $id;?>" tabindex="-1" role="dialog" aria-labelledby="inputNilai" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title " id="inputNilai">Input Nilai</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form class="" method="post" action="<?= base_url('rapot/edit_data'); ?>">
                                <div class="modal-body">
                                <div class="form-group">
                                <input type="hidden" name="id_nilai" value="<?php echo $id; ?>">
                                        <input type="text" class="form-control" id="nis" name="nis" value="<?= $nis; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $nama; ?>" readonly>

                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="kelas" name="kelas" value="<?= $kelas; ?>" hidden>
                                    </div>

                                    <div class="form-group">
                                    <input type="text" class="form-control" id="mapel" name="mapel" value="<?= $mapel; ?>" readonly>
                                    </div>
                                    <div class="form-group">
                                        Nilai Uts
                                        <input type="number" class="form-control" id="bind" name="uts" value="<?= $uts; ?>">
                                    </div>
                                    <div class="form-group">
                                        Nilai Uas
                                        <input type="number" class="form-control" id="bing" name="uas" value="<?= $uas; ?>">
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
                <?php endforeach;?>



                

                