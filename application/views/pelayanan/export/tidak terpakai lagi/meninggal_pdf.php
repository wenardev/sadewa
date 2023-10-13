<!DOCTYPE html>
<html lang="en"><head>
<title>Cetak Surat Keterangan Meninggal</title>
</head><body>
<?php foreach ($export as $ex) : ?>
<table>
<tr>
<td colspan="12" align="center">PEMERINTAH DESA <?= $ex->kelurahan; ?></td>
</tr>
<tr>
<td colspan="12" align="center">KETUA RT.<?= $ex->no_rt; ?> KETUA RW.<?= $ex->no_rw; ?></td>
</tr>
<tr>
<td colspan="12" align="center">KELURAHAN <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> <hr color="black" /></td>
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
<td colspan="12" align="center">
<div align="center">
<font face="Arial" color="black">
<p align="center"> <u> <b> SURAT KETERANGAN MENINGGAL </b></u>
</font><br>
<font face="Arial" color="black">
NO: <?= $ex->no_meninggal; ?>/<?= $ex->id; ?>/<?= date('Y', $ex->date_created); ?>
</p>
</font>
</div></td>
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
<td colspan="12">YANG BERTANDA TANGAN DIBAWAH INI ADALAH KEPALA DESA <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?>, DENGAN INI MENERANGKAN BAHWAHSANNYA:
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
<td colspan="3">NAMA</td>
<td colspan="9">: <?= $ex->nama; ?></td>
</tr>
<tr>
<td colspan="3">NIK</td>
<td colspan="9">: <?= $ex->nik; ?></td>
</tr>
<tr>
<td colspan="3">TEMPAT, TANGGAL LAHIR</td>
<td colspan="9">: <?= $ex->tempat_lahir; ?>, <?= $ex->tanggal_lahir; ?></td>
</tr>
<tr>
<td colspan="3">JENIS KELAMIN</td>
<td colspan="9">: <?= $ex->jenis_kelamin; ?></td>
</tr>
<tr>
<td colspan="3">ALAMAT</td>
<td colspan="9">: <?= $ex->alamat; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> KODE POS <?= $ex->kode_pos; ?> KELURAHAN <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> PROVINSI <?= $ex->provinsi; ?> </td>
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
&emsp;&emsp;&emsp;DEMIKIAN <b>SURAT KETERANGAN MENINGGAL</b> INI DIBUAT UNTUK DAPAT DIGUNAKAN SEPERLUNYA.
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
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="3" align="left"><?= $ex->kabupaten; ?>,<?= date('d F Y', $ex->date_created); ?></td>
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
<td colspan="2" align="center"></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="3" align="center">(<u><?= $instansi['nama_pimpinan']; ?></u>)</td>
</tr>
</table>
<?php endforeach; ?>
</body></html>