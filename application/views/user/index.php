<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

    <div class="row">
        <div class="col-lg-8">
            <?= $this->session->flashdata('message'); ?>
        </div>
    </div>

    <div class="card mb-3 col-lg-12">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= 'nama : ' . $user['name']; ?></h5>
                    <div class="row">
                        <div class="col-md-12 row">
                            <div class="col-md-6">
                                <p class="card-text"><?= 'email : ' . $user['email']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"><?= 'Alamat : ' . $user['Alamat']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"><?= 'Jenis Pekerjaan : ' . $user['Jenis_Pekerjaan']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"><?= 'TGL Lahir : ' . $user['TGL_Lahir']; ?></p>
                            </div>
                            <div class="col-md-6">
                                <p class="card-text"><?= 'Mulai sekerja sejak : ' . $user['TGL_Diterima']; ?></p>
                            </div>
                        </div>
                        <div class="col-md-12 mx-auto card  btn-outline-success">

                            <p class="card-text text-center ">Status : <? if ($user['Pensiun'] == 0) {
                                                                            echo 'Active';
                                                                        } elseif ($user['Pensiun'] == 1) {
                                                                            echo "pensiun";
                                                                        } ?>
                            </p>
                        </div>
                    </div>
                    <p class="card-text text-right"><small class="text-muted">Member since <?= date('d F Y', $user['date_created']); ?>,id : <?= $user['id_Pekerja']; ?></small></p>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->