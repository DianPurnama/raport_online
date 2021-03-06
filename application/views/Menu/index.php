                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


                    <div class="row">

                        <div class="col-lg-12">
                            <div class="col-lg-12">
                                <?php if (validation_errors()) : ?>
                                    <div class="alert alert-danger">
                                        <?= validation_errors(); ?>
                                    </div>
                                <?php endif; ?>
                                <?= $this->session->flashdata('message'); ?>

                                <a href="" class="btn btn-success mb-3 shadow-lg" data-toggle="modal" data-target="#menuBaru"> Tambahkan Menu Baru <a>

                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th scope="col">#</th>
                                                    <th scope="col">Menu</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($menu as $m) : ?>
                                                    <tr>
                                                        <th scope="row"><?= $i; ?></th>
                                                        <td><?= $m['menu']; ?></td>
                                                        <td>
                                                            <a href="<?= base_url('menu/hapusMenu/');
                                                                            echo $m['menu']; ?>" class="badge badge-danger" onclick="return confirm('Anda yakin ingin menghapus menu ?<?= $m['menu']; ?>');"> Delete</a>
                                                        </td>
                                                    </tr>
                                                    <?php $i++; ?>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="menuBaru" tabindex="-1" role="dialog" aria-labelledby="menuBaru" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="menuBaru">Tambah Menu Baru</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form action="<?= base_url('menu') ?>" method="post">
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu">
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
                </div>
                <!-- End of Main Content -->