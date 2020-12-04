<div class="container">
    <h1 class="text-center">harap lengkapi data</h1>
    <form method="POST" action="<?= base_url('/Cuti/validate'); ?>">
        <div class="row">
            <div class="col-md-6">
                <label for="country">ID Pekerja Anda</label>
                <input class="form-control d-block w-100 col-md-12" type="text" required name="id_pekerja">
            </div>
            <div class="col-md-6">
                <label for="country">Anda Bekerja Sebagai</label>
                <input class="form-control d-block w-100 col-md-12" type="text" placeholder="Teknisi/Supir" required name="Jenis_Pekerjaan">
            </div>
            <div class="col-md-6">
                <label for="country">Alamat Tempat Tinggal</label>
                <input class="form-control d-block w-100 col-md-12" type="text" required name="Alamat">
            </div>
            <div class="col-md-6">
                <label for="country">Tanggal Lahir</label>
                <input class="form-control d-block w-100 col-md-12" type="date" required name="TGL_Lahir">
            </div>
            <div class="col-md-6">
                <label for="country"><small>Perkiraan</small> Tanggal Mulai Bekerha</label>
                <input class="form-control d-block w-100 col-md-12" type="date" required name="TGL_Diterima">
            </div>
            <div class="col-md-6">
                <label for="country">Tolong masukan Posisi anda</label>
                <input class="form-control d-block w-100 col-md-12" placeholder="Kontrak/Karyawan" type="text" required name="Jabatan">
            </div>
            <div class="col-md-12">
            <hr class="mb-4">
                <button class="btn btn-primary col-md-12" type="submit">kirim</button>
            </div>
        </div>
    </form>
</div>
</div>