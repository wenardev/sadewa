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
                                <p align="center"> <u> <b> SURAT KEMATIAN </b></u>
                            </font><br>
                            <font face="Arial" color="black">
                                No: ........./........./..........
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
                        Yang bertanda tangan dibawah ini Kepala Desa <?= $ex->kelurahan; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> Desa <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?> ,dengan ini menerangkan bahwa :
                    </td>
                    <td></td>
                </tr>
                <tr>
                    <td colspan="2" rowspan="2"></td>
                    <td colspan="8" rowspan="2">
                        <table>
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td colspan="5">: <?= $ex->nama_anak; ?></td>
                                </tr>
                                <tr>
                                    <td>Tempat, Tanggal Lahir</td>
                                    <td colspan="5">: <?= $ex->tempat_lahir_anak; ?>, <?= $ex->tanggal_lahir_anak; ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td colspan="5">: <?= $ex->jenis_kelamin_anak; ?></td>
                                </tr>
                                 <tr>
                                    <td>Anak Ke</td>
                                    <td colspan="5">: <?= $ex->anak_ke; ?></td>
                                </tr>
                                 <tr>
                                    <td>Nama Ayah</td>
                                    <td colspan="5">: <?= $ex->nama_kepala_keluarga; ?></td>
                                </tr>
                                 <tr>
                                    <td>No KK</td>
                                    <td colspan="5">: <?= $ex->no_kk; ?></td>
                                </tr>
                                 <tr>
                                    <td>Nik Ayah</td>
                                    <td colspan="5">: <?= $ex->nik_kepala_keluarga; ?></td>
                                </tr>
                                 <tr>
                                    <td>Nama Ibu</td>
                                    <td colspan="5">: <?= $ex->nama_istri; ?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td colspan="5">: <?= $ex->alamat; ?> Rt.<?= $ex->no_rt; ?> Rw.<?= $ex->no_rw; ?> Kelurahan <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?> Provinsi <?= $ex->provinsi; ?> </td>
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
                       Demikian <b>Surat Keterangan Kelahiran</b> ini dibuat untuk dapat digunakan seperlunya.
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
                            <u><?= $ex->kabupaten; ?>,..............................</u>
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