<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>Surat CUTI</title>
    <meta name="generator" content="LibreOffice 6.4.6.2 (Linux)" />
    <meta name="author" content="Microsoft" />
    <meta name="created" content="2020-11-27T19:04:00" />
    <meta name="changed" content="2020-11-28T09:34:20.979608013" />
    <meta name="AppVersion" content="15.0000" />
    <meta name="Company" content="Microsoft" />
    <meta name="DocSecurity" content="0" />
    <meta name="HyperlinksChanged" content="false" />
    <meta name="LinksUpToDate" content="false" />
    <meta name="ScaleCrop" content="false" />
    <meta name="ShareDoc" content="false" />
    <style type="text/css">
        @page {
            margin: 1in
        }

        p {
            margin-bottom: 0.1in;
            direction: ltr;
            text-align: left;
            orphans: 2;
            widows: 2
        }
    </style>
</head>

<body lang="id-ID" dir="ltr">
    <p style="margin-bottom: 0.11in; line-height: 108%">
        Surat Permohonan Cuti</p>
    <p align="right" style="margin-bottom: 0.11in; line-height: 108%"><a name="_GoBack"></a>
        <?= date('d / M / y'); ?>,Bogor.</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Perihal :
        Permohonan Izin Cuti</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Lampiran : -</p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><br />


    </p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Kepada,</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Yth.
        HRD.</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">PT.
        X</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Di tempat</p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><br />


    </p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Dengan Hormat,</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Saya selaku <?= $user->Jabatan ?>,Bidang Pekerjaan
         <?= $user->Jenis_Pekerjaan ?>
    </p>

    <p style="margin-bottom: 0.11in; line-height: 108%">Dengan ini saya
        bermaksud untuk mengajukan surat keterangan izin cuti kerja pada
        tanggal <strong><?= $detail->tgl_mulai ?></strong> sampai dengan
        <strong><?= $detail->tgl_masuk ?></strong> dikarenakan ada keperluan
        <strong><?= $detail->alasan ?></strong> yang bersifat penting
        dan tidak bisa ditinggal.</p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><br />


    </p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Demikian surat
        izin cuti ini saya sampaikan, atas segala pengertian dan perhatiannya
        saya ucapkan terima kasih.</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">


    </p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><br />


    </p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><?= date('d / M / y'); ?>,
        Bogor</p>
    <p style="margin-bottom: 0.11in; line-height: 108%">Hormat saya,</p>
    <p style="margin-bottom: 0.11in; line-height: 108%"><?= $user->name ?></p>

    <script>
        window.print();
    </script>
</body>

</html>