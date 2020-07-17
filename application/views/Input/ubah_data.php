                <!-- Begin Page Content -->
                <div class="container">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>
                    <?= $this->session->flashdata('message'); ?>
                    <div class="row">
                    <div class="container">
                    <?php foreach ($guru as $g) :?>
                    
                        <?php endforeach?>
                    <form action="<?=base_url('input/submit/');?><?=$g['id']?>" method="post">
                    <div class="form-group">
                                            <input type="hidden" name="id" value="<?= $g['id'];?>">
                                            <input type="text" class="form-control" id="nama" name="nama" value="<?=$g['nama'];?>">
                                            <?= form_error('nama', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?=$g['email'];?>">
                                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="alamat" name="alamat" placeholder="Masukan Alamat"value="<?=$g['alamat'];?>">
                                            <?= form_error('alamat', '<small class="text-danger pl-3">', '</small>') ?>
                                        </div>
                                        <div class="form-group">
                                        <select name="mapel" id="menu_id" class="form-control">
                                            <option value="<?=$g['mapel'];?>"><p class="text-secondary"><?=$g['mapel'];?></p></option>
                                            <option value="Matematika" name="mapel"> Matematika</option>
                                            <option value="Bahasa Inggris" name="mapel"> Bahasa Inggris</option>
                                            <option value="Bahasa Indonesia" name="mapel"> Bahasa Indonesia</option>
                                        </select>
                                        <br>
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    <!-- /.container-fluid -->
                </div>
            </div>
        </div>
   </div>
</div>
                <!-- End of Main Content -->