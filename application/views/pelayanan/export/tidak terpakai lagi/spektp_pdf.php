<!DOCTYPE html>
<html lang="en"><head>
<title>Cetak Surat Spektp</title>
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
NO: <?= $ex->no_spektp; ?>/<?= $ex->id; ?>/<?= date('Y', $ex->date_created); ?>
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
<td colspan="12">YANG BERTANDA TANGAN DIBAWAH INI KEPALA DESA <?= $ex->kelurahan; ?> RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw?> DESA <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> ,DENGAN INI MENERANGKAN BAHWA:
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
<td colspan="3">TEMPAT, TANGGAL LAHIR</td>
<td colspan="9">: <?= $ex->tempat_lahir; ?>, <?= $ex->tanggal_lahir; ?></td>
</tr>
<tr>
<td colspan="3">JENIS KELAMIN</td>
<td colspan="9">: <?= $ex->jenis_kelamin; ?></td>
</tr>
<tr>
<td colspan="3">PEKERJAAN</td>
<td colspan="9">: <?= $ex->pekerjaan; ?></td>
</tr>
<tr>
<td colspan="3">AGAMA</td>
<td colspan="9">: <?= $ex->agama; ?></td>
</tr>
<tr>
<td colspan="3">STATUS</td>
<td colspan="9">: <?= $ex->status_kawin; ?></td>
</tr>
<tr>
<td colspan="3">ALAMAT</td>
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
&emsp;&emsp;&emsp;ORANG TERSEBUT DIATAS, ADALAH BENAR-BENAR WARGA RT.<?= $ex->no_rt; ?> RW.<?= $ex->no_rw; ?> DESA <?= $ex->kelurahan; ?> KECAMATAN <?= $ex->kecamatan; ?> KABUPATEN <?= $ex->kabupaten; ?> SURAT PENGANTAR INI DIBUAT SEBAGAI KELENGKAPAN PENGURUSAN <b>EKTP (ELEKTRONIK KARTU TANDA PENDUDUK)</b>.
<p><br>DEMIKIAN SURAT PENGANTAR INI KAMI BUAT, UNTUK DAPAT DIPERGUNAKAN SEBAGAIMANA MESTINYA</br></p>
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