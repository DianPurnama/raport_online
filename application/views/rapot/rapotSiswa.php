<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">

        <div class="col-lg-12">
            <?php if (validation_errors()) : ?>
                <div class="alert alert-danger">
                    <?= validation_errors(); ?>
                </div>
            <?php endif; ?>

            <?= $this->session->flashdata('message'); ?>
            <div class="container-fluid">
                <div class="card">
                    <div class="card-body">
                    <?php foreach ($nama as $ct) : ?>
                        <h4 class="text-center"> Rapot Siswa</h4>
                        <div class="col-6 float-left"> Nama : <?= $ct['nama'];?> </div>
                        <div class="col-6 float-right text-right"> <?= $ct['nis'];?> </div>
                        <div class="col-6 float-left"> Kelas : <?= $ct['kelas'];?></div>
                    <?php endforeach ?>
                    </div>
                </div>
                <table class="table table-hover mt-3">
                    <tbody>
                    <tr>
                    <tr>
                                                <th scope="col">Mata Pelajaran</th>
                                                <th scope="col">UTS</th>
                                                <th scope="col">UAS</th>
                                                <th scope="col">RATA-RATA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                    <?php foreach ($tampil as $ct) : ?>
                                            <tr>
                                                <td><?= $ct['mapel'];?> </td>
                                                <td><?= $ct['nilai_uts'];?> </td>
                                                <td><?= $ct['nilai_uas'];?> </td>
                                                <td><?= $ct['rerata'];?> </td>
                                                <?php endforeach; ?>
                                            </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- /.container-fluid -->
    <script>
        window.print();
    </script>
</div>
<!-- End of Main Content -->
</div>