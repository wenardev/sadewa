<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pemohon_model extends CI_Model
{
    public function view_all()
    {
        return $this->db->get('pemohon')->result();
    }

    public function view_by_date($tgl_awal, $tgl_akhir){        
        $tgl_awal = $this->db->escape($tgl_awal);       
        $tgl_akhir = $this->db->escape($tgl_akhir);   
        $this->db->where('DATE(date_created) BETWEEN '.$tgl_awal.' AND '.$tgl_akhir); 
        return $this->db->get('pemohon')->result(); 
    }

    //ini contoh ini tidak terpakai
    function tampil_kota(){
        $this->db->select('id, kota, provinsi, COUNT(provinsi) as total');
         $this->db->group_by('provinsi'); 
         $this->db->order_by('total', 'desc'); 
         $hasil = $this->db->get('tablename');
        return $hasil;
        }

    //ini contoh tidak terpakai
    function hitungwarganegara()
    {
    $query = $this->db->query('SELECT * FROM pemohon WHERE warga_negara= "WNI"');
    $WNI=$query->num_rows();
    return $WNI;
    }

    //ini untuk menjumlah nama surat
    public function get_count_nama_surat()
    {
        $sql = "SELECT count(nama_surat) as nama_surat FROM pemohon";
        $result = $this->db->query($sql);
        return $result->row()->nama_surat;
    }

    //ini untuk menghitung pernama surat sk_domisili
    public function get_hitung_sk_domisili()
    {
        $sql = "SELECT count(if(warga_negara='WNI', warga_negara, NULL)) as warga_negara
        FROM pemohon
        ";
        $result = $this->db->query($sql);
        return $result->row();
    }

    public function laporanfilter($tanggal_awal, $tanggal_akhir)
    {
        //$this->db->where('DATE(date_created >= , $tangga) BETWEEN '.$tanggal_awal.' AND '.$tanggal_akhir); 
        //return $this->db->get('pemohon')->result(); 
        $this->db->where('date_created >=', $tanggal_awal)->where('date_created <=', $tanggal_akhir)->get();
        return $this->db->get('pemohon')->result();
        //return $this->table('pemohon')->where('date_created >=', $tanggal_awal)->where('date_created <=', $tanggal_akhir)->get();

    }

}
