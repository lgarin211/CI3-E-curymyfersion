<div class="container">
    <div>
        <button class="btn btn-primary" onclick="dos()">Cek Permintaan baru</button>
        <button class="btn btn-danger" onclick="das()">Cek Parmintaan Di tolak</button>
        <button class="btn btn-warning" onclick="dis()">Cek Parmintaan Di terima</button>
    </div>
    <div id="mas">
    </div>
    <div id="neet">
        <h1>Butuh tindakan</h1>
        <? if (empty($neet)) { ?><div class="card pt-1">
                <h1>tidak ada Request baru</h1>
            </div><? } else { ?>
            <? foreach ($neet as $key => $value) : ?>
                <div class="card pt-1 bg-outline-warning">
                    <div class="row text-center">
                        <div class="col-md-6">
                            <p>email pengaju :<?= $value->email ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>tgl aju :<?= $value->tgl_mulai ?></p>
                        </div>
                        <div class="col-md-6">
                            <p>lama aju :<?= $value->lama ?></p>
                        </div>
                        <div class="col-md-6">
                            <p><a href="<?= base_url('/Cuti/detail?id=' . $value->id) ?>">tindak</a></p>
                        </div>
                    </div>
                </div>
        <? endforeach;
                } ?>
    </div>
    <div id="not">
        <? if (empty($not)) { ?><div class="card pt-1">
                <h1>tidak ada Request baru</h1>
            </div><? } else { ?>
            <h1>Tidak Di Terima</h1>
            <table class="table table-hover table-primary">
                <thead>
                    <tr>
                        <th class="text-danger" scope="col">ID</th>
                        <th class="text-danger" scope="col">email pengaju</th>
                        <th class="text-danger" scope="col">tgl mulai</th>
                        <th class="text-danger" scope="col">lama</th>
                    </tr>
                </thead>
                <tbody>

                    <? foreach ($not as $key => $value) : ?>
                        <tr>
                            <th class="text-danger" scope="row"><?= $value->id ?></th>
                            <td class="text-danger"><?= $value->email ?></td>
                            <td class="text-danger"><?= $value->tgl_mulai ?></td>
                            <td class="text-danger"><?= $value->lama ?></td>
                        </tr>

                <? endforeach;
                } ?>
                </tbody>
            </table>
    </div>
    <div id="yes">
        <h1>Di Terima</h1>
        <table class="table table-hover table-warning text-center">
            <thead>
                <tr>
                    <th class="text-primary" scope="col">#</th>
                    <th class="text-primary" scope="col">email pengaju</th>
                    <th class="text-primary" scope="col">tgl mulai</th>
                    <th class="text-primary" scope="col">lama</th>
                    <th class="text-primary" scope="col">tgl masuk</th>
                    <th class="text-primary" scope="col">Print Surat</th>
                </tr>
            </thead>
            <tbody>
                <? if (empty($yes)) { ?><div class="card pt-1">
                        <h1>tidak ada Request baru</h1>
                    </div><? } else { ?>
                    <? foreach ($yes as $key => $value) : ?>
                        <tr>
                            <th class="text-primary" scope="row"><?= $value->id ?></th>
                            <td class="text-primary"><?= $value->email ?></td>
                            <td class="text-primary"><?= $value->tgl_mulai ?></td>
                            <td class="text-primary"><?= $value->lama ?></td>
                            <td class="text-primary"><?= $value->tgl_masuk ?></td>
                            <td class="text-primary"><a href="<?=base_url('PrintS/print?id=').$value->id?>" target="_BLANK">Print Surat</a></td>
                        </tr>
                <? endforeach;
                        } ?>
            </tbody>
        </table>
    </div>
</div>
</div>
<script>
    var a = document.getElementById('neet').innerHTML;
    var b = document.getElementById('not').innerHTML;
    var c = document.getElementById('yes').innerHTML;
    document.getElementById('not').innerHTML = '';
    document.getElementById('yes').innerHTML = '';

    function leng() {
        document.getElementById('neet').innerHTML = '';
        document.getElementById('not').innerHTML = '';
        document.getElementById('yes').innerHTML = '';
    }

    function dos() {
        leng()
        document.getElementById('mas').innerHTML = a;
    }

    function das() {
        leng()
        document.getElementById('mas').innerHTML = b;
    }

    function dis() {
        leng()
        document.getElementById('mas').innerHTML = c;
    }
</script>