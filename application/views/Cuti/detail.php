<div class="container">
    <div class="row">
        <div class="col-md-12 order-md-1">
            <h4 class="mb-3">CEK detail</h4>
            <form class="needs-validation" method="POST" action="<?= base_url('/Cuti/las') ?>">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="firstName">Nama Pengaju</label>
                        <input type="hidden" name="id" value="<?= $detail->id ?>" id="">
                        <input type="text" readonly class="form-control" id="firstName" placeholder="" value="<?= $user->name ?>" required="">
                    </div>
                </div>

                <div class="mb-3">
                    <label for="username">Email</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">@</span>
                        </div>
                        <input type="text" name="email" readonly class="form-control" id="username" placeholder="Username" required="" value="<?= $user->email ?>">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="address">Alamat</label>
                    <input type="text" readonly class="form-control" id="address" placeholder="1234 Main St" required="" <?= $user->Alamat ?>>
                </div>
                <div class="row">
                    <div class="col-md-5 mb-3">
                        <label for="country">Awal Cuti</label>
                        <input type="date" class="custom-select d-block w-100" readonly name="tgl_mulai" value="<?= $detail->tgl_mulai ?>">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="state">Lama cuti</label>
                        <input type="text" readonly class="custom-select d-block w-100" name="lama" value="<?= $detail->lama ?>">
                    </div>
                    <div class="col-md-5 mb-3">
                        <label for="country">akhir cuti</label>
                        <input type="date" class="custom-select d-block w-100" name="tgl_masuk" required value="<?= $detail->tgl_mulai ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="country">alasan cuti</label>
                        <textarea name="Alasan" id="" class="col-md-12" rows="10"><?= $detail->alasan ?></textarea>
                    </div>
                </div>
                <hr class="mb-4">
 <?if ($_SESSION['role_id']==1) :?>
                <div class="container">
                    <div class="col-md-12 mb-3">
                        <label for="state">Tindakan</label>
                        <select class="custom-select d-block w-100" id="state" name='aprof'>
                            <option value="1">Tidak Di Terima</option>
                            <option value="2">Di Terima</option>
                        </select>
                    </div>
                </div>
                <hr class="mb-4">
 <?endif;?>
                <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to Submit</button>
            </form>
        </div>
    </div>
</div>
</div>