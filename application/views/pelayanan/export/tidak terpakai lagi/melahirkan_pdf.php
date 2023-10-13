<!DOCTYPE html>
<html lang="en"><head>
<title>Cetak Surat Keterangan Kelahiran</title>
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
<p align="center"> <u> <b> SURAT KETERANGAN KELAHIRAN </b></u>
</font><br>
<font face="Arial" color="black">
NO: <?= $ex->no_melahirkan; ?>/<?= $ex->id; ?>/<?= date('Y', $ex->date_created); ?>
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
<td colspan="12">YANG BERTANDA TANGAN DIBAWAH INI ADALAH KEPALA DESA<?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?>, DENGAN INI MENERANGKAN BAHWA:
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
<td colspan="3">NAMA ANAK</td>
<td colspan="9">: <?= $ex->nama_anak; ?></td>
</tr>
<tr>
<td colspan="3">TEMPAT, TANGGAL LAHIR</td>
<td colspan="9">: <?= $ex->tempat_lahir_anak; ?>, <?= $ex->tanggal_lahir_anak; ?></td>
</tr>
<tr>
<td colspan="3">JENIS KELAMIN</td>
<td colspan="9">: <?= $ex->jenis_kelamin_anak; ?></td>
</tr>
<tr>
<td colspan="3">NAMA AYAH</td>
<td colspan="9">: <?= $ex->nama_ayah; ?></td>
</tr>
<tr>
<td colspan="3">NAMA IBU</td>
<td colspan="9">: <?= $ex->nama_ibu; ?></td>
</tr>
<tr>
<td colspan="3">AALAMAT</td>
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
&emsp;&emsp;&emsp;DEMIKIAN <b>SURAT KETERANGAN KELAHIRAN</b> INI DIBUAT UNTUK DAPAT DIGUNAKAN.
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
<td colspan="2" align="center">(<u><?= $ex->nama_ayah; ?></u>)</td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td></td>
<td colspan="2" align="center">(<u><?= $instansi['nama_pimpinan']; ?></u>)</td>
</tr>
</table>
<?php endforeach; ?>
</body></html>