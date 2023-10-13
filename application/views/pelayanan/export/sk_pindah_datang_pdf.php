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
	{size:11.0in 8.5in;
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
font-family:"Times New Roman",serif'>SURAT KETERANGAN PINDAH DATANG WNI</span></u></b></p>

<p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center'><span style='font-size:12.0pt;line-height:106%;font-family:
"Times New Roman",serif'>Nomor. 140/<?= $ex->no_surat; ?>/DS-P/<?=  format_romawi(date('Y-m-d', strtotime($ex->date_created)));?>/<?=  date('Y');?></span></p>


<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><b><u><span style='font-size:9.0pt;line-height:107%'>DATA
DAERAH ASAL</span></u></b></p>

<?php 
$array_nik = str_split($ex->nik);

echo "<table class='MsoTableGrid' border='1' cellspacing='0' cellpadding='0'
style='border-collapse:collapse;border:none'>

<tr>";

echo "<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>1.</span></p>
</td>";

echo "<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Nomor Kartu Keluarga</span></p>
</td>";

$no = 1;
foreach
($array_nik as $nik){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td $class width='35' style='width:32.35pt;border:solid windowtext 1.0pt;border-left:
    none;padding:0in 5.4pt 0in 5.4pt'><p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik</span></p></td>";
    $no++;
}

echo "</tr>"; 

?>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='37' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='39' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='38' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width=34 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width=34 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>"

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>2.</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Nama Kepala Keluarga</span></p>
</td>
<td width='282' colspan='8' valign='top' style='width:259.0pt;border-top:none;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->nama); ?></span></p>
</td>
<td width='70' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='68' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='72' colspan='2' valign=top style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='68' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='282' colspan='8' valign='top' style='width:259.0pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='70' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='68' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='72' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='68' colspan='2' valign='top' style='width:64.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>3.</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Alamat</span></p>
</td>
<td width='282' colspan='8' valign='top' style='width:259.0pt;border-top:none;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; <?= $ex->alamat; ?></span></p>
</td>

<td width='36' style='width:32.35pt;border:none;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>RT</span></p>
</td>

<?php 
$array_no_rt = str_split($ex->no_rt);

$no = 1;
foreach
($array_no_rt as $no_rt){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width='34' style='width:32.35pt;border:solid windowtext 1.0pt;border-left:
    none;padding:0in 5.4pt 0in 5.4pt'><p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$no_rt</span></p>
    </td>";
    $no++;
}

?>

<td width='38' style='width:32.35pt;border:none;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>RW</span></p>
</td>

<?php 
$array_no_rw = str_split($ex->no_rw);

$no = 1;
foreach
($array_no_rw as $no_rw){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width='34' style='width:.45in;border:solid windowtext 1.0pt;border-left:
    none;padding:0in 5.4pt 0in 5.4pt'><p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$no_rw</span></p>
    </td>";
    $no++;
}

echo "</tr>";

?>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='282' colspan='8' valign='top' style='width:259.0pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='38' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>a.</span></p>
</td>
<td width='111' colspan='3' valign='top' style='width:97.15pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Desa/Kelurahan</span></p>
</td>
<td width='135' colspan='4' valign='top' style='width:129.5pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; Popilo</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>c.</span></p>
</td>
<td width='102' colspan='3' valign='top' style='width:97.15pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Kab/Kota</span></p>
</td>
<td width='139' colspan='4' valign='top' style='width:129.5pt;border:solid windowtext 1.0pt;
border-left:none;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; Halmahera Utara</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign=top style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='111' colspan='3' valign='top' style='width:97.15pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='135' colspan='4' valign='top' style='width:129.5pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align=center style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='102' colspan='3' valign='top' style='width:97.15pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='139' colspan='4' valign='top' style='width:129.5pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>b.</span></p>
</td>
<td width='111' colspan='3' valign='top' style='width:97.15pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Kecamatan</span></p>
</td>
<td width='135' colspan='4' valign='top' style='width:129.5pt;border-top:none;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; Tobelo Utara</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>d.</span></p>
</td>
<td width='102' colspan='3' valign='top' style='width:97.15pt;border:none;
border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Provinsi</span></p>
</td>
<td width='139' colspan='4' valign='top' style='width:129.5pt;border-top:none;
border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp; Maluku Utara</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='126' colspan='3' valign='top' style='width:111.75pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='111' colspan='3' valign='top' style='width:97.15pt;border:none;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='135' colspan='4' valign='top' style='width:129.5pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='102' colspan='3' valign='top' style='width:97.15pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='139' colspan='4' valign='top' style='width:129.5pt;border:none;
border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='65' valign='top' style='width:55.85pt;border:none;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>Kodepos</span></p>
</td>

<?php 
$array_kode_pos = str_split($ex->kode_pos);

$no = 1;
foreach
($array_kode_pos as $kode_pos){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width='30' style='width:27.95pt;border:solid windowtext 1.0pt;border-left:
    none;padding:0in 5.4pt 0in 5.4pt'><p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$kode_pos</span></p>
    </td>";
    $no++;
}

?>

<td width='39' style='width:.45in;border:none;border-right:solid windowtext 1.0pt;
padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>Tlp</span></p>
</td>

<?php 
$array_telepon = str_split($ex->telepon);

$no = 1;
foreach
($array_telepon as $telepon){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width='34' style='width:32.35pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'><p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$telepon</span></p>
    </td>";
    $no++;
}

echo "<tr>
<td width='23' valign='top' style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='65' valign='top' style='width:55.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='30' style='width:27.95pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='30' style='width:27.95pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='35' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='37' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='39' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='36' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='38' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width='34' style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
<p class='MsoNormal' align='center' style='margin-bottom:0in;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
</tr>

</table>";

?>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal><b><u><span style='font-size:9.0pt;line-height:107%'>DATA
KEPINDAHAN</span></u></b></p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Alasan Pindah</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:normal'>
  <span style='font-size:8.0pt'>&nbsp; <?= $ex->alasan_pindah_id; ?> </span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Pekerjaan</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=75 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Keamanan</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>5.</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Perumahan</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>7.</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Lainnya (sebutkan)</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=75 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Pendidikan</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>
  <td width=75 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kesehatan</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>6.</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Keluarga</span></p>
  </td>
  <td width=37 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'> <?= $ex->lainnya; ?> </span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=75 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Alamat Tujuan Pindah</span></p>
  </td>
  <td width=222 colspan=6 valign=top style='width:194.25pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->alamat_pindah); ?></span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>RT</span></p>
  </td>

<?php 
$array_no_rt_pindah = str_split($ex->no_rt_pindah);

$no = 1;
foreach
($array_no_rt_pindah as $no_rt_pindah){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=33 style='width:.45in;border-top:none;border-left:none;border-bottom:
    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$no_rt_pindah</span></p>
    </td>";
    $no++;
} 
 
?>
  
  <td width=37 style='width:32.35pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>RW</span></p>
  </td>


<?php 
$array_no_rw_pindah = str_split($ex->no_rw_pindah);

$no = 1;
foreach
($array_no_rw_pindah as $no_rw_pindah){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=32 style='width:.45in;border-top:none;border-left:none;border-bottom:
    solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$no_rw_pindah</span></p>
    </td>";
    $no++;
} 
 
?>


  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>a.</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Desa/Kelurahan</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->desa_pindah); ?></span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>c.</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kab/Kota</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->kabupaten_pindah); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>b.</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kecamatan</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->kecamatan_pindah); ?></span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>d.</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Provinsi</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border-top:none;
  border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= ucwords($ex->provinsi_pindah); ?></span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border:none;
  border-bottom:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 valign=top style='width:55.85pt;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kodepos</span></p>
  </td>

<?php 
$array_kodepos_pindah = str_split($ex->kodepos_pindah);

$no = 1;
foreach
($array_kodepos_pindah as $kodepos_pindah){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=29 style='width:27.95pt;border:solid windowtext 1.0pt;border-left:
    none;padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$kodepos_pindah</span></p>
    </td>";
    $no++;
} 
 
?>

  <td width=42 style='width:.45in;border:none;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Tlp</span></p>
  </td>

<?php 
$array_telepon_pindah = str_split($ex->telepon_pindah);

$no = 1;
foreach
($array_telepon_pindah as $telepon_pindah){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=35 style='width:32.35pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$telepon_pindah</span></p>
    </td>";
    $no++;
} 
 
?>
  
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 valign=top style='width:55.85pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=29 style='width:27.95pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=29 style='width:27.95pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=36 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Klasifikasi Pindah</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= $ex->klasifikasi_pindah_id; ?></span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=157 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Dalam Satu Desa /Kelurahan</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=109 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Antar Kecamatan</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>5.</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Antar Provinsi</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=157 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=109 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=96 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=157 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Antar Desa/Kelurahan</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>
  <td width=109 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Antar Kab/Kota</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=157 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=109 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Jenis Kepindahan</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= $ex->jenis_kepindahan_id; ?></span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kep. Keluarga</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kep. Keluarga dan Sbg. Anggota Keluarga</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=227 colspan=6 valign=top style='width:194.25pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Kep. Keluarga dan Seluruh Anggota
  Keluarga</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Anggota Keluarga</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=227 colspan=6 valign=top style='width:194.25pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>5.</span></p>
  </td>
  <td width=186 colspan=5 valign=top style='width:176.5pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Status Nomor KK Bagi Yang Tidak Pindah </span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= $ex->status_tidak_pindah_id; ?></span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Numpang KK</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Tidak Ada Anggota Keluarga Yang
  Ditinggal</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=186 colspan=5 valign=top style='width:176.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=65 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Membuat KK Baru</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Nomor KK Tetap</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=65 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=142 colspan=4 valign=top style='width:129.5pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=40 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=168 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>6.</span></p>
  </td>
  <td width=186 colspan=5 valign=top style='width:176.5pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Status Nomor KK Bagi Yang Pindah</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;text-align:center;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp; <?= $ex->status_pindah_id; ?><></span></p>
  </td>
  <td width=42 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Numpang KK</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>
  <td width=109 colspan=3 valign=top style='width:97.15pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Membuat KK Baru</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>
  <td width=159 colspan=5 valign=top style='width:161.9pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Nama Kep. Keluarga dan Nomor KK Tetap</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 valign=top style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 valign=top style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;border-bottom:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>7.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Rencana Tgl Pindah</span></p>
  </td>

<?php 
$array_tanggal_pindah = str_split($ex->tanggal_pindah);

$no = 1;
foreach
($array_tanggal_pindah as $tanggal_pindah){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=32 valign=top style='width:32.35pt;border-top:solid windowtext 1.0pt;border-left:
    solid windowtext 1.0pt;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$tanggal_pindah</span></p>
    </td>";
    $no++;
} 
 

?>

  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 
</tr>
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=32 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 valign=top style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=43 valign=top style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=42 valign=top style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=35 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=37 style='width:32.35pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=33 style='width:.45in;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 
 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=65 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=23 style='width:17.75pt;border:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>8.</span></p>
  </td>
  <td width=121 colspan=3 valign=top style='width:111.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>Keluarga Yang Pindah</span></p>
  </td>
  <td width=65 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=85 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=70 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=76 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=64 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=63 colspan=2 valign=top style='width:64.75pt;border:none;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

</table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>No</span></p>
  </td>
  <td width=447 colspan=16 style='width:366.25pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>NIK</span></p>
  </td>
  <td width=152 style='width:129.5pt;border:solid windowtext 1.0pt;border-left:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>NAMA</span></p>
  </td>
  <td width=79 colspan=2 style='width:64.75pt;border:solid windowtext 1.0pt;
  border-left:none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>SHDK</span></p>
  </td>
 </tr>
 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>1.</span></p>
  </td>

<?php 
$array_nik_pindah_satu = str_split($ex->nik_pindah_satu);

$no = 1;
foreach
($array_nik_pindah_satu as $nik_pindah_satu){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "  <td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_satu</span></p>
    </td>";
    $no++;
} 
?>

  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_satu); ?></span></p>
  </td>

  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 
<tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>2.</span></p>
  </td>

<?php 
$array_nik_pindah_dua = str_split($ex->nik_pindah_dua);

$no = 1;
foreach
($array_nik_pindah_dua as $nik_pindah_dua){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_dua</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_dua);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_dua);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>3.</span></p>
  </td>

<?php 
$array_nik_pindah_tiga = str_split($ex->nik_pindah_tiga);

$no = 1;
foreach
($array_nik_pindah_tiga as $nik_pindah_tiga){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_tiga</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_tiga);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_tiga);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>4.</span></p>
  </td>

<?php 
$array_nik_pindah_empat = str_split($ex->nik_pindah_empat);

$no = 1;
foreach
($array_nik_pindah_empat as $nik_pindah_empat){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_empat</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_empat);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_empat);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>5.</span></p>
  </td>

<?php 
$array_nik_pindah_lima = str_split($ex->nik_pindah_lima);

$no = 1;
foreach
($array_nik_pindah_lima as $nik_pindah_lima){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_lima</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_lima);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_lima);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>6.</span></p>
  </td>

<?php 
$array_nik_pindah_enam = str_split($ex->nik_pindah_enam);

$no = 1;
foreach
($array_nik_pindah_enam as $nik_pindah_enam){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_enam</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_enam);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_enam);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>7.</span></p>
  </td>

<?php 
$array_nik_pindah_enam = str_split($ex->nik_pindah_enam);

$no = 1;
foreach
($array_nik_pindah_enam as $nik_pindah_enam){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_enam</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_enam);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_enam);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>7.</span></p>
  </td>

<?php 
$array_nik_pindah_tujuh = str_split($ex->nik_pindah_tujuh);

$no = 1;
foreach
($array_nik_pindah_tujuh as $nik_pindah_tujuh){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_tujuh</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_tujuh);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_tujuh);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>8.</span></p>
  </td>

<?php 
$array_nik_pindah_delapan = str_split($ex->nik_pindah_delapan);

$no = 1;
foreach
($array_nik_pindah_delapan as $nik_pindah_delapan){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_delapan</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_delapan);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_delapan);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>9.</span></p>
  </td>

<?php 
$array_nik_pindah_sembilan = str_split($ex->nik_pindah_sembilan);

$no = 1;
foreach
($array_nik_pindah_sembilan as $nik_pindah_sembilan){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_sembilan</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_sembilan);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_sembilan);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

 <tr>
  <td width=29 style='width:22.25pt;border:solid windowtext 1.0pt;border-top:
  none;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>10.</span></p>
  </td>

<?php 
$array_nik_pindah_sepuluh = str_split($ex->nik_pindah_sepuluh);

$no = 1;
foreach
($array_nik_pindah_sepuluh as $nik_pindah_sepuluh){
    if 
    ($no==1){ $class = "class='awal'";
    } else { $class = ""; }
    echo "<td width=28 style='width:22.85pt;border-top:none;border-left:none;
    border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
    padding:0in 5.4pt 0in 5.4pt'>
    <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
    text-align:center;line-height:normal'><span style='font-size:8.0pt'>$nik_pindah_sepuluh</span></p>
    </td>";
    $no++;
} 

$total = count($array_nik_pindah_sepuluh);
if (($total - 16) < 0 )
{
    for ($i=0; $i < (16 - $total); $i++) {
        echo "<td></td>";
    }
}

?>
  
  <td width=152 style='width:129.5pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal style='margin-bottom:0in;margin-bottom:.0001pt;line-height:
  normal'><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_sepuluh);?></span></p>
  </td>
  
  <td width=39 style='width:32.35pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  
  <td width=39 style='width:.45in;border-top:none;border-left:none;border-bottom:
  solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>

</table>

<p class=MsoNormal>&nbsp;</p>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Diketahui
  Oleh :</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=146 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Dikeluarkan
  Oleh :</span></p>
  </td>
 </tr>
 <tr>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Camata
  Tobelo Utara</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Pemohon</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=146 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>Kepala Desa</span></p>
  </td>
 </tr>
 <tr>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>No. <?= $ex->id?>, Tgl,
  <?=  format_indo(date('Y-m-d', strtotime($ex->date_created)));?></span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=146 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>No. <?= $ex->id; ?>, Tgl,
  <?=  format_indo(date('Y-m-d', strtotime($ex->date_created)));?> </span></p>
  </td>
 </tr>
 <tr>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=73 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=71 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=74 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=72 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
 </tr>
 <tr>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>.........................
  </span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=144 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span style='font-size:8.0pt'><?= ucwords($ex->nama_pindah_satu); ?></span></u></b></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=69 style='width:64.75pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=146 colspan=2 style='width:129.5pt;padding:0in 5.4pt 0in 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0in;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><b><u><span style='font-size:8.0pt'>TABRIS
  DJALAL</span></u></b></p>
  </td>
 </tr>
</table>

<p class=MsoNormal>&nbsp;</p>

<p class=MsoNormal>&nbsp;</p>

<?php endforeach ?>

</div>

</body>

</html>
