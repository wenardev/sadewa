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
<p align="center"> <u> <b> SURAT PENGANTAR EKTP </b></u>
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
<td colspan="12">Yang bertanda tangan dibawah ini Kepala Desa <?= $ex->kelurahan; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw?> Desa <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?> ,dengan ini menerangkan bahwa :
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
<td colspan="9">: <?= $ex->nama; ?></td>
</tr>
<tr>
<td colspan="3">Tempat, Tanggal Lahir</td>
<td colspan="9">: <?= $ex->tempat_lahir; ?>, <?= $ex->tanggal_lahir; ?></td>
</tr>
<tr>
<td colspan="3">Jenis Kelamin</td>
<td colspan="9">: <?= $ex->jenis_kelamin; ?></td>
</tr>
<tr>
<td colspan="3">Pekerjaan</td>
<td colspan="9">: <?= $ex->pekerjaan; ?></td>
</tr>
<tr>
<td colspan="3">Agama</td>
<td colspan="9">: <?= $ex->agama; ?></td>
</tr>
<tr>
<td colspan="3">Status</td>
<td colspan="9">: <?= $ex->status; ?></td>
</tr>
<tr>
<td colspan="3">Warga Negara</td>
<td colspan="9">: <?= $ex->warga_negara; ?></td>
</tr>
<tr>
<td colspan="3">Alamat</td>
<td colspan="9">: <?= $ex->alamat; ?></td>
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
&emsp;&emsp;&emsp;Orang tersebut diatas, adalah benar - benar warga RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> Desa <?= $ex->kelurahan; ?> Kecamatan <?= $ex->kecamatan; ?> Kabupaten <?= $ex->kabupaten; ?> Surat pengantar ini dibuat sebagai kelengkapan pengurusan <b>EKTP (Elektornik Kartu Tanda Penduduk)</b>.
<p><br>Demikian surat pengantar ini kami buat, untuk dapat dipergunakan sebagaimana mestinya.</br></p>
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
<td colspan="2" align="center"><?= $instansi['nama_pimpinan']; ?></td>
</tr>


</table>
<?php endforeach; ?>
</body></html>