<!DOCTYPE html>
<html lang="en"><head>
<title>Cetak berdasarkan id</title>
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
No: ........./........./..........
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
<td colspan="12">Yang bertanda tangan dibawah ini adalah Kepala Desa <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?>, dengan ini menerangkan bahwa :
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
<td colspan="3">Nama</td>
<td colspan="9">: <?= $ex->nama_anak; ?></td>
</tr>
<tr>
<td colspan="3">Tempat, Tanggal Lahir</td>
<td colspan="9">: <?= $ex->tempat_lahir_anak; ?>, <?= $ex->tanggal_lahir_anak; ?></td>
</tr>
<tr>
<td colspan="3">Jenis Kelamin</td>
<td colspan="9">: <?= $ex->jenis_kelamin_anak; ?></td>
</tr>
<tr>
<td colspan="3">Anak Ke</td>
<td colspan="9">: <?= $ex->anak_ke; ?></td>
</tr>
<tr>
<td colspan="3">Nama Ayah</td>
<td colspan="9">: <?= $ex->nama_kepala_keluarga; ?></td>
</tr>
<tr>
<td colspan="3">No KK</td>
<td colspan="9">: <?= $ex->no_kk; ?></td>
</tr>
<tr>
<td colspan="3">Nik Ayah</td>
<td colspan="9">: <?= $ex->nik_kepala_keluarga; ?></td>
</tr>
<tr>
<td colspan="3">Nama Ibu</td>
<td colspan="9">: <?= $ex->nama_istri; ?></td>
</tr>
<tr>
<td colspan="3">Alamat</td>
<td colspan="9">: <?= $ex->alamat; ?> Rt.<?= $ex->no_rt; ?> Rw.<?= $ex->no_rw; ?> Kode Pos <?= $ex->kode_pos; ?> Kelurahan <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?> Provinsi <?= $ex->provinsi; ?> </td>
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
&emsp;&emsp;&emsp;Demikian <b>Surat Keterangan Kelahiran</b> ini dibuat untuk dapat digunakan seperlunya.
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
<td></td>
<td colspan="2" align="left"><?= $ex->kabupaten; ?>,........................</td>
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
<td colspan="2" align="center">(<u><?= $ex->nama_kepala_keluarga; ?></u>)</td>
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