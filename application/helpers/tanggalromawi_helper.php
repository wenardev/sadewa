<?php
defined('BASEPATH') OR exit('No direct script access allowed');

if (!function_exists('format_romawi')) {
  function format_romawi($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("I","II","III","IV","V","VI","VII","VIII","IX","X","XI","XII");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    $hari = date("w",strtotime($date));
    //$result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
    $result = $Bulan[(int)$bulan-1]." ".$waktu;


    return $result;
  }
}