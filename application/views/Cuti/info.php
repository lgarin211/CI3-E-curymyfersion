<div class="container">
    <form action="<?= base_url('/Cuti/libur'); ?>" method="post">
        <div id="tgl_aju">
            <p>masukan tanggal pengajuan cuti</p>
            <input class="form-control" type="date" name="mulai" onchange="dos()">
        </div>
        <div id="alasan_aju" class="container">
            <p>masukan alasan pengajuan cuti</p>
            <div class="row">
                <textarea class="form-control col-md-12" oninput="das()" name="alasan" cols="30" rows="10"></textarea>
            </div>
        </div>
        <div id="lama_aju">
            <p>masukan lama pengajuan cuti</p>
            <input class="form-control" type="number" name="lama">
            <button type="submit">submit</button>
        </div>
    </form>
</div>

<script>
    var a = document.getElementById('tgl_aju').innerHTML;
    var b = document.getElementById('alasan_aju').innerHTML;
    var c = document.getElementById('lama_aju').innerHTML;
    document.getElementById('alasan_aju').innerHTML = '<div id="alasan_aju"></div>';
    document.getElementById('lama_aju').innerHTML = '<div id="lama_aju"></div>';

    function dos() {
        document.getElementById('alasan_aju').innerHTML = b;
    }

    function das() {
        document.getElementById('lama_aju').innerHTML = c;
    }
</script>
</div>