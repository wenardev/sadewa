<html>

<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:8.0pt;
	margin-left:0in;
	line-height:107%;
	font-size:11.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
@page WordSection1
	{size:841.9pt 595.3pt;
	margin:1.0in 1.0in 1.0in 1.0in;}
div.WordSection1
	{page:WordSection1;}
-->
</style>

</head>

<body lang=EN-US>

<div class=WordSection1>

<?php foreach ($export as $ex) : ?>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center'><b><u><span style='font-size:12.0pt;line-height:106%;
font-family:"Times New Roman",serif'>REGISTER KARTU KELUARGA</span></u></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center'><span style='font-size:12.0pt;line-height:106%;font-family:
"Times New Roman",serif'>Nomor. 140/<?= $ex->no_surat; ?>/DS-P/<?=  format_romawi(date('Y-m-d', strtotime($ex->date_created)));?>/<?=  date('Y');?></span></p>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:10.5pt'>
  <td width=116 style='width:107.6pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Nama
  Kepala Keluarga</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=375 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><?= ucwords($ex->nama); ?></span></p>
  </td>
  <td width=92 style='width:69.3pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Desa/Kelurahan</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=89 style='width:74.55pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Popilo</span></p>
  </td>
 </tr>
 <tr>
  <td width=116 style='width:107.6pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Alamat</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=375 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><?= ucwords($ex->alamat);?></span></p>
  </td>
  <td width=92 style='width:69.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Kecamatan</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=89 style='width:74.55pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Tobelo
  Utara</span></p>
  </td>
 </tr>
 <tr>
  <td width=116 style='width:107.6pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>RT/RW</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=375 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'><?= $ex->no_rt; ?>/<?= $ex->no_rw; ?></span></p>
  </td>
  <td width=92 style='width:69.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Kabupaten</span></p>
  </td>
  <td width=18 style='width:13.3pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>:</span></p>
  </td>
  <td width=89 style='width:74.55pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>Halmahera
  Utara</span></p>
  </td>
 </tr>
</table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:21.2pt' align='center'>
  <td width=29 style='width:24.1pt;border:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:21.2pt'>
  <span style='font-size:9.0pt;font-family:"Times New Roman",serif'>No</span>
  </td>
  <td width=170 style='width:141.3pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Nama Lengkap</span>
  </td>
  <td width=95 style='width:1.15in;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>NIK</span>
  </td>
  <td width=69 style='width:64.7pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Jenis Kelamin</span>
  </td>
  <td width=80 style='width:96.35pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Tempat Lahir</span>
  </td>
  <td width=72 style='width:67.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Tanggal Lahir</span>
  </td>
  <td width=73 style='width:67.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Agama</span>
  </td>
  <td width=85 style='width:51.3pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Pendidikan</span>
  </td>
  <td width=80 style='width:74.55pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt;height:21.2pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Jenis Pekerjaan</span>
  </td>
 </tr>
 
 <tr align='center'>
  <td width=29 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp;</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(1)</span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(2)</span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(3)</span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(4)</span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(5)</span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(6)</span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(7)</span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(8)</span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>1</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama);?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nik);?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin);?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir);?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?=  $ex->tanggal_lahir; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama);?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir);?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan);?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>2</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_pasangan); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->nik_pasangan; ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->jenis_kelamin_pasangan; ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_pasangan); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?=  $ex->tanggal_lahir_pasangan; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama_pasangan); ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir_pasangan); ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_pasangan); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>3</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_satu); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nik_anak_satu); ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin_anak_satu); ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_satu); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_satu; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama_anak_satu); ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir_anak_satu); ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_satu); ?></span>
  </td>
 </tr>

 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>4</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_dua); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->nik_anak_dua; ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin_anak_dua); ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_dua); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_dua; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama_anak_dua); ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir_anak_dua); ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_dua); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>5</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_tiga); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nik_anak_tiga); ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin_anak_tiga); ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_tiga); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_tiga; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama_anak_tiga); ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir_anak_tiga); ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_tiga); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>6</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_empat); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nik_anak_empat); ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin_anak_empat); ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_empat); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_empat; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->agama_anak_empat; ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pendidikan_terakhir_anak_empat; ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_empat); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>7</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_lima); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->nik_anak_lima; ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->jenis_kelamin_anak_lima); ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_lima); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tanggal_lahir_anak_lima); ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->agama_anak_lima); ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pendidikan_terakhir_anak_lima); ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_lima); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>8</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_enam); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nik_anak_enam); ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->jenis_kelamin_anak_enam; ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_enam); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_enam; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->agama_anak_enam; ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pendidikan_terakhir_anak_enam; ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->pekerjaan_anak_enam); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>9</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_tujuh); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->nik_anak_tujuh; ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->jenis_kelamin_anak_tujuh; ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_tujuh); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_tujuh; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->agama_anak_tujuh; ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pendidikan_terakhir_anak_tujuh; ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pekerjaan_anak_tujuh; ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=29 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>10</span>
  </td>
  <td width=170 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_anak_delapan); ?></span>
  </td>
  <td width=95 style='width:1.15in;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->nik_anak_delapan; ?></span>
  </td>
  <td width=69 style='width:64.7pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->jenis_kelamin_anak_delapan; ?></span>
  </td>
  <td width=70 style='width:96.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->tempat_lahir_anak_delapan); ?></span>
  </td>
  <td width=72 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->tanggal_lahir_anak_delapan; ?></span>
  </td>
  <td width=73 style='width:67.5pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->agama_anak_delapan; ?></span>
  </td>
  <td width=85 style='width:51.3pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pendidikan_terakhir_anak_delapan; ?></span>
  </td>
  <td width=64 style='width:74.55pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->pekerjaan_anak_delapan; ?></span>
  </td>
 </tr>

 </table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:9.5pt' align='center'>
  <td width=31 rowspan=2 style='width:24.1pt;border:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>No</span>
  </td>
  <td width=147 rowspan=2 style='width:141.3pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Status Perkawinan</span>
  </td>
  <td width=92 rowspan=2 style='width:1.15in;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Status Hubungan Dalam Keluarga</span>
  </td>
  <td width=80 rowspan=2 style='width:75.8pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Kewarganegaraan</span>
  </td>
  <td width=166 colspan=2 style='width:163.85pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Dokumen Imigrasi</span>
  </td>
  <td width=200 colspan=2 style='width:182.4pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Nama Orang Tua</span>
  </td>
 </tr>
 <tr style='height:9.5pt' align='center'>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt;height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>No. Paspor</span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>No. Kitap</span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Ayah</span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt;
  height:9.5pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Ibu</span>
  </td>
 </tr>
 <tr align='center'>
  <td width=31 style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; </span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(9)</span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(10)</span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(11)</span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(12)</span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(13)</span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(14)</span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>(15)</span>
  </td>
 </tr>
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>1</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu); ?></span>
  </td>
 </tr>

 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>2</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_kawin_pasangan); ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_keluarga_pasangan); ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_pasangan; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_pasangan; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_pasangan; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_pasangan); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_pasangan); ?></span>
  </td>
 </tr>

 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>3</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_kawin_anak_satu); ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_keluarga_anak_satu); ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_satu; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_satu; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_satu; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_satu); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_satu); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>4</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_kawin_anak_dua); ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->status_keluarga_anak_dua); ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->warga_negara_anak_dua); ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_dua; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_dua; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_dua); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_dua); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>5</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_tiga; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_tiga; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_tiga; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_tiga; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_tiga; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_tiga); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_tiga); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>6</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_empat; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_empat; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_empat; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_empat; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_empat; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_empat); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_empat); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>7</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_lima; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_lima; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_lima; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_lima; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_lima; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_lima); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_lima); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>8</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_enam; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_enam; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_enam; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_enam; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_enam; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_enam); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_enam); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>9</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_tujuh; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_tujuh; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_tujuh; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_tujuh; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_tujuh; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_tujuh); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_tujuh); ?></span>
  </td>
 </tr>
 
 <tr>
  <td width=31 align='center' style='width:24.1pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>10</span>
  </td>
  <td width=147 style='width:141.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_kawin_anak_delapan; ?></span>
  </td>
  <td width=92 style='width:1.15in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->status_keluarga_anak_delapan; ?></span>
  </td>
  <td width=80 style='width:75.8pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->warga_negara_anak_delapan; ?></span>
  </td>
  <td width=83 style='width:80.75pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_paspor_anak_delapan; ?></span>
  </td>
  <td width=83 style='width:83.1pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= $ex->no_kitab_anak_delapan; ?></span>
  </td>
  <td width=89 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ayah_anak_delapan); ?></span>
  </td>
  <td width=87 style='width:91.2pt;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>&nbsp; <?= ucwords($ex->nama_ibu_anak_delapan); ?></span>
  </td>
 </tr>

 </table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr style='height:10.5pt'>
  <td width=181 rowspan=2 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt;
  height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Kepala Keluarga</span></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt;height:10.5pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Popilo, <?=  format_indo(date('Y-m-d', strtotime($ex->date_created)));?></span></p>
  </td>
 </tr>
 <tr>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'>Kepala Desa</span></p>
  </td>
 </tr>
 <tr>
  <td width=181 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=181 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=181 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=136 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=136 style='width:120.9pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span style='font-size:9.0pt;
  font-family:"Times New Roman",serif'><?= ucwords($ex->nama); ?></span></u></b></p>
  </td>
  <td width=401 style='width:394.4pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:9.0pt;font-family:"Times New Roman",serif'>&nbsp;</span></p>
  </td>
  <?php endforeach; ?>

    <td width=170 style='width:157.15pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><b><u><span style='font-size:9.0pt;
    font-family:"Times New Roman",serif'><?= $instansi['nama_pimpinan']; ?></span></u></b></p>
    </td>
 </tr>
</table>

</div>

</body>

</html>
