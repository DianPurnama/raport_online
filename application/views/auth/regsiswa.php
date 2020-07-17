<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="card o-hidden border-0 shadow-lg my-5 mx-auto col-lg-7">
        <div class="card-body p-0 col-lg-12">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <h1 class="h4 text-900 mb-4 text-success">Tambah Akses Web!</h1>
                        </div>
                        <form class="user" method="post" action="<?= base_url('auth/regsiswa') ?>">
                            <div class="form-group row">
                                <div class="col-sm-12 mb-3 mb-sm-0">
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Email" value="<?= set_value('email'); ?>">
                                        <?= form_error('email', '<small class="text-danger pl-3">', '</small>') ?>
                                    </div>
                                    <input type="text" class="form-control form-control-user" id="name" name="fullname" placeholder="Full Name" value="<?= set_value('fullname'); ?>">
                                    <?= form_error('fullname', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <input type="password" class="form-control form-control-user" id="Password0" name="password0" placeholder="Password">
                                    <?= form_error('password0', '<small class="text-danger pl-3">', '</small>') ?>
                                </div>
                                <div class="col-sm-6">
                                    <input type="password" class="form-control form-control-user" id="password1" name="password1" placeholder="Repeat Password">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success btn-user btn-block">
                                Registrasi Siswa
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>