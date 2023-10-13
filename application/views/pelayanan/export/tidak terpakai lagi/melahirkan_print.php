<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title></title>
</head>
<body onload="window.print()">
    <?php foreach ($export as $ex) : ?>
        <table class="">
            <thead>
                <tr>
                    <th colspan="12" rowspan="3">

                        <div align="center">
                            PEMERINTAH DESA <?= $ex->kelurahan; ?>
                        </div>

                        <div align="center">
                            KETUA RT.<?= $ex->no_rt; ?> KETUA RW.<?= $ex->no_rw; ?>
                        </div>
                        <div align="center">
                            DESA.<?= $ex->kelurahan; ?> KECAMATAN.<?= $ex->kecamatan; ?> KABUPATEN.<?= $ex->kabupaten; ?>
                            <hr color="black" />
                        </div>
                    </th>
                </tr>
            </thead>
            <tfoot>
            </tfoot>
            <tbody>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="4" rowspan="2"></td>
                    <td colspan="4" rowspan="2">
                        <div align="center">
                            <font face="Arial" color="black">
                                <p align="center"> <u> <b> SURAT KELAHIRAN</b></u>
                            </font><br>
                            <font face="Arial" color="black">
                                 NO: <?= $ex->no_melahirkan; ?>/<?= $ex->id; ?>/<?= date('Y', $ex->date_created); ?>
                                </p>
                            </font>
                        </div>
                    </td>
                    <td colspan="4" rowspan="2"></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="10">
                        YANG BERTANDA TANGAN DIBAWAH INI KEPALA DESA <?= $ex->kelurahan; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> DESA <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> ,DENGAN INI MENERANGKAN BAHWASANNYA TELAH LAHIR DENGAN:
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2"></td>
                    <td colspan="8" rowspan="2">
                        <table>
                            <tbody>
                                <tr>
                                    <td>NAMA ANAK</td>
                                    <td colspan="5">: <?= $ex->nama_anak; ?></td>
                                </tr>
                                <tr>
                                    <td>TEMPAT, TANGGAL LAHIR</td>
                                    <td colspan="5">: <?= $ex->tempat_lahir_anak; ?>, <?= $ex->tanggal_lahir_anak; ?></td>
                                </tr>
                                <tr>
                                    <td>JENIS KELAMIN</td>
                                    <td colspan="5">: <?= $ex->jenis_kelamin_anak; ?></td>
                                </tr>
                                 <tr>
                                    <td>NAMA AYAH</td>
                                    <td colspan="5">: <?= $ex->nama_ayah; ?></td>
                                </tr>
                                <tr>
                                    <td>NAMA IBU</td>
                                    <td colspan="5">: <?= $ex->nama_ibu; ?></td>
                                </tr>
                                <tr>
                                    <td>ALAMAT</td>
                                    <td colspan="5">: <?= $ex->alamat; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> KELURAHAN <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> PROVINSI <?= $ex->provinsi; ?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                    <td colspan="2" rowspan="2"></td>
                </tr>
                <tr>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="10">
                       DEMIKIAN <b>SURAT KETERANGAN KELAHIRAN</b> INI DIBUAT UNTUK DAPAT DIGUNAKAN SEPERLUNYA.
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12">
                        <div align="right">
                            <u><?= $ex->kabupaten; ?>,<?= date('d F Y', $ex->date_created); ?></u>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td colspan="12"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td colspan="6">
                        <div align="center">
                            <u><?= $instansi['nama_pimpinan']; ?></u>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    <?php endforeach; ?>
</body>
</html>