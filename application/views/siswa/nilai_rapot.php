                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                    <div class="row">

                        <div class="col-lg-12">
                           <div class="card">
                                        <div class="card-body">
                                            <h3 class="text-center"> Laporan Nilai <?= $user['nis'];?> <?= $user['nama'];?> </h3>
											<h2><a href="<?= base_url('siswa/cetak/') .$user['nis']; ?>" class="badge badge-warning" target="_blank"> Cetak</a></h2>
                                        </div>
										
                               </div>
                              
                                    <table class="table table-hover mt-3">
                                        <thead>
                                            <tr>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">UTS</th>
                                                <th scope="col">UAS</th>
                                                <th scope="col">RATA-RATA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php foreach ($tampil->result_array() as $ct) : ?>
                                                <?php if($user['nis'] === $ct['nis']): ?>
                                            <tr>
                                                <td><?= $ct['mapel'];?> </td>
                                                <td><?= $ct['nilai_uts'];?> </td>
                                                <td><?= $ct['nilai_uas'];?> </td>
                                                <td><?= $ct['rerata'];?> </td>
                                                <?php endif; ?>
                                                <?php endforeach; ?>
                                            </tr>
                                            </tbody>
                                    </table>
                        </div>
                    </div>
                    </div>
				
                </div>
                <!-- End of Main Content -->
                </div>
                </div>