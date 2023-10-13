<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pelayanan_model extends CI_Model
{
    public function __construct()
    {

    }

    ////////////SPEKTP///////////////////
    function tampil_spektp($table)
    {
        return $this->db->get($table);
    }

    function ambil_id_spektp($id)
    {
        $cetak = $this->db->where('id', $id)->get('spektp');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    /////////////////////////////////////

    ////////////DOMISILI/////////////////
    public function tampil_domisili($table)
    {
        return $this->db->get($table);
    }

    public function CreateCode_skd(){
        $this->db->select('RIGHT(domisili.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('domisili');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_surat) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SKD".$batas;
        return $kodetampil;   
    }

    public function ambil_id_domisili($id)
    {
        $cetak = $this->db->where('id', $id)->get('domisili');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    //////////////////////////////////////////////
    
    ////////////////////SK IZIN ORANG TUA/////////////////
     
    public function tampil_sk_izin_orang_tua($table)
     {
         return $this->db->get($table);
     }
    
    public function CreateCode_skiot()
     {
        $this->db->select('RIGHT(sk_izin_orang_tua.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_izin_orang_tua');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_surat) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SKIOT".$batas;
        return $kodetampil;   
    }

    public function ambil_id_sk_izin_orang_tua($id)
    {
        $cetak = $this->db->where('id', $id)->get('sk_izin_orang_tua');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    //////////////////////////////////////////////
    
    ////////////////////SK Kelahiran/////////////////
     
    public function tampil_sk_kelahiran($table)
     {
         return $this->db->get($table);
     }
    
    public function CreateCode_skk()
     {
        $this->db->select('RIGHT(sk_kelahiran.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_kelahiran');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_surat) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SKK".$batas;
        return $kodetampil;   
    }

    public function ambil_id_sk_kelahiran($id)
    {
        $cetak = $this->db->where('id', $id)->get('sk_kelahiran');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    function get_autocomple_sk_kelahiran($nonik)
    {
        $this->db->like('nik', $nonik, 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('sk_kelahiran')->result();
    }

    //////////////////////////////////////////////

    /////////////////SK Pindah//////////////////

    public function tampil_sk_pindah($table)
    {
        return $this->db->get($table);
    }
   
    public function CreateCode_skp()
    {
       $this->db->select('RIGHT(sk_pindah.kode_surat,5) as kode_surat', FALSE);
       $this->db->order_by('kode_surat','DESC');    
       $this->db->limit(1);    
       $query = $this->db->get('sk_pindah');
       if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
       }
       else{      
            $kode = 1;  
       }
       $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
       $kodetampil = "SKP".$batas;
       return $kodetampil;   
   }

   public function ambil_id_sk_pindah($id)
   {
       $cetak = $this->db->where('id', $id)->get('sk_pindah');

       if ($cetak->num_rows() > 0) {
           return $cetak->result();
       } else {
           return false;
       }
   }

    ///////////////////////////////////////////

    //////////////SK Sudah Menikah//////////

    public function tampil_sk_sudah_menikah($table)
    {
        return $this->db->get($table);
    }
   
    public function CreateCode_sksm()
    {
       $this->db->select('RIGHT(sk_sudah_menikah.kode_surat,5) as kode_surat', FALSE);
       $this->db->order_by('kode_surat','DESC');    
       $this->db->limit(1);    
       $query = $this->db->get('sk_sudah_menikah');
       if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
       }
       else{      
            $kode = 1;  
       }
       $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
       $kodetampil = "SKSM".$batas;
       return $kodetampil;   
   }

   public function ambil_id_sk_sudah_menikah($id)
   {
       $cetak = $this->db->where('id', $id)->get('sk_sudah_menikah');

       if ($cetak->num_rows() > 0) {
           return $cetak->result();
       } else {
           return false;
       }
   }


    ///////////////////////////////////////

    ////////////SK Belum Menikah///////////

    public function tampil_sk_belum_menikah($table)
    {
        return $this->db->get($table);
    }
   
    public function CreateCode_skbm()
    {
       $this->db->select('RIGHT(sk_belum_menikah.kode_surat,5) as kode_surat', FALSE);
       $this->db->order_by('kode_surat','DESC');    
       $this->db->limit(1);    
       $query = $this->db->get('sk_belum_menikah');
       if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
       }
       else{      
            $kode = 1;  
       }
       $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
       $kodetampil = "SKBM".$batas;
       return $kodetampil;   
   }

   public function ambil_id_sk_belum_menikah($id)
   {
       $cetak = $this->db->where('id', $id)->get('sk_belum_menikah');

       if ($cetak->num_rows() > 0) {
           return $cetak->result();
       } else {
           return false;
       }
   }


    ///////////////////////////////////////

    /////////////SK TIDAK MAMPU///////////

    public function tampil_sk_tidak_mampu($table)
    {
        return $this->db->get($table);
    }
   
    public function CreateCode_sktm()
    {
       $this->db->select('RIGHT(sk_tidak_mampu.kode_surat,5) as kode_surat', FALSE);
       $this->db->order_by('kode_surat','DESC');    
       $this->db->limit(1);    
       $query = $this->db->get('sk_tidak_mampu');
       if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
       }
       else{      
            $kode = 1;  
       }
       $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
       $kodetampil = "SKTM".$batas;
       return $kodetampil;   
   }

   public function ambil_id_sk_tidak_mampu($id)
   {
       $cetak = $this->db->where('id', $id)->get('sk_tidak_mampu');

       if ($cetak->num_rows() > 0) {
           return $cetak->result();
       } else {
           return false;
       }
   }

    /////////////////////////////////////

     /////////////SK USAHA///////////

     public function tampil_sk_usaha($table)
     {
         return $this->db->get($table);
     }
    
     public function CreateCode_sku()
     {
        $this->db->select('RIGHT(sk_usaha.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_usaha');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_surat) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SKU".$batas;
        return $kodetampil;   
    }
 
    public function ambil_id_sk_usaha($id)
    {
        $cetak = $this->db->where('id', $id)->get('sk_usaha');
 
        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

     /////////////SK KEMATIAN///////////

     public function tampil_sk_kematian($table)
     {
         return $this->db->get($table);
     }
    
     public function CreateCode_skkm()
     {
        $this->db->select('RIGHT(sk_kematian.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_kematian');
        if($query->num_rows() <> 0){      
             $data = $query->row();
             $kode = intval($data->kode_surat) + 1; 
        }
        else{      
             $kode = 1;  
        }
        $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
        $kodetampil = "SKKM".$batas;
        return $kodetampil;   
    }
 
    public function ambil_id_sk_kematian($id)
    {
        $cetak = $this->db->where('id', $id)->get('sk_kematian');
 
        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }
    
    /////////////SK N1///////////

    public function tampil_sk_nsatu($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_sknsatu()
        {
        $this->db->select('RIGHT(sk_nsatu.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_nsatu');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNSATU".$batas;
            return $kodetampil;   
        }
    
    public function CreateCode_skn_kode_untuk_ubah()
        {
        $this->db->select('RIGHT(sk_nsatu.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_nsatu');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNSATU".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_nsatu($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_nsatu');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    /////////////SK N2///////////

    public function tampil_sk_ndua($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_skndua()
        {
        $this->db->select('RIGHT(sk_ndua.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_ndua');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNDUA".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_ndua($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_ndua');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }

    /////////////SK N3///////////

    public function tampil_sk_ntiga($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_skntiga()
        {
        $this->db->select('RIGHT(sk_ntiga.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_ntiga');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNTIGA".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_ntiga($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_ntiga');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    /////////////SK N4///////////

    public function tampil_sk_nempat($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_sknempat()
        {
        $this->db->select('RIGHT(sk_nempat.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_nempat');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNEMPAT".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_nempat($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_nempat');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }

    /////////////SK N5///////////

    public function tampil_sk_nlima($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_sknlima()
        {
        $this->db->select('RIGHT(sk_nlima.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_nlima');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKNLIMA".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_nlima($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_nlima');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }

    /////////////Formulis pengajuan KK///////////

    public function tampil_pengajuan_kk($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_pengajuan_kk()
        {
        $this->db->select('RIGHT(pengajuan_kk.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('pengajuan_kk');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "PKK".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_pengajuan_kk($id)
        {
            $cetak = $this->db->where('id', $id)->get('pengajuan_kk');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    /////////////sk pindah datang///////////

    public function tampil_sk_pindah_datang($table)
        {
            return $this->db->get($table);
        }
        
    public function CreateCode_sk_pindah_datang()
        {
        $this->db->select('RIGHT(sk_pindah_datang.kode_surat,5) as kode_surat', FALSE);
        $this->db->order_by('kode_surat','DESC');    
        $this->db->limit(1);    
        $query = $this->db->get('sk_pindah_datang');
        if($query->num_rows() <> 0){      
            $data = $query->row();
            $kode = intval($data->kode_surat) + 1; 
        }
            else{      
                 $kode = 1;  
        }
            $batas = str_pad($kode, 5, "0", STR_PAD_LEFT);
            $kodetampil = "SKPD".$batas;
            return $kodetampil;   
        }
     
    public function ambil_id_sk_pindah_datang($id)
        {
            $cetak = $this->db->where('id', $id)->get('sk_pindah_datang');
     
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    public function relasi_option_sk_pindah_datang()
        {
            $query = "SELECT `sk_pindah_datang`.*, `skpd_tb_alasan_pindah`.`alasan_pindah`, `skpd_tb_klasifikasi_pindah`.`klasifikasi_pindah`, `skpd_tb_jenis_kepindahan`.`jenis_kepindahan`, `skpd_tb_status_tidak_pindah`.`status_tidak_pindah`, `skpd_tb_status_pindah`.`status_pindah`
                        FROM `sk_pindah_datang` 
                        JOIN `skpd_tb_alasan_pindah` ON `sk_pindah_datang`.`alasan_pindah_id` = `skpd_tb_alasan_pindah`.`id`
                        JOIN `skpd_tb_klasifikasi_pindah` ON `sk_pindah_datang`.`klasifikasi_pindah_id` = `skpd_tb_klasifikasi_pindah`.`id`
                        JOIN `skpd_tb_jenis_kepindahan` ON `sk_pindah_datang`.`jenis_kepindahan_id` = `skpd_tb_jenis_kepindahan`.`id`
                        JOIN `skpd_tb_status_tidak_pindah` ON `sk_pindah_datang`.`status_tidak_pindah_id` = `skpd_tb_status_tidak_pindah`.`id`
                        JOIN `skpd_tb_status_pindah` ON `sk_pindah_datang`.`status_pindah_id` = `skpd_tb_status_pindah`.`id`
                        ";
            return $this->db->query($query)->result_array();
        }

    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    ////////////MELAHIRKAN/////////////////
    
    function tampil_melahirkan($table)
        {
            return $this->db->get($table);
        }
    
    function ambil_id_melahirkan($id)
        {
            $cetak = $this->db->where('id', $id)->get('melahirkan');
    
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    ////////////////////////////////////////////

    ///////////MENINGGAL//////////////////
    
    function tampil_meninggal($table)
        {
            return $this->db->get($table);
        }
    
    function ambil_id_meninggal($id)
        {
            $cetak = $this->db->where('id', $id)->get('meninggal');
    
            if ($cetak->num_rows() > 0) {
                return $cetak->result();
            } else {
                return false;
            }
        }
    
    function getstatusmeninggal()
        {
            $query = "SELECT `meninggal`.*, `tb_status_penduduk`.`status_penduduk`
                        FROM `meninggal` 
                        JOIN `tb_status_penduduk` ON `meninggal`.`status` = `tb_status_penduduk`.`id`
                        ";
            return $this->db->query($query)->result_array();
        }
    
    //////////////////////////////////////////////

    ////////////autocomplete//////////////////////

    function get_autocomple($nonik)
    {
        $this->db->like('nik', $nonik, 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('pemohon')->result();
    }

    ///AUTOCOMPLE UNTUK N1 MEMANG TIDAK ADA SENGAJA

    function get_autocomple_ndua($nonik)
    {
        $this->db->like('nik', $nonik, 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('pemohon_nsatu')->result();
    }

     ///AUTOCOMPLE UNTUK N1 MEMANG TIDAK ADA SENGAJA

     function get_autocomple_ntiga($nonik)
     {
         $this->db->like('nik', $nonik, 'both');
         $this->db->order_by('nik', 'ASC');
         $this->db->limit(10);
         return $this->db->get('pemohon_ndua')->result();
     }

     function get_autocomple_nempat($nonik)
     {
         $this->db->like('nik', $nonik, 'both');
         $this->db->order_by('nik', 'ASC');
         $this->db->limit(10);
         return $this->db->get('pemohon_ntiga')->result();
     }

     function get_autocomple_nlima($nonik)
     {
         $this->db->like('nik', $nonik, 'both');
         $this->db->order_by('nik', 'ASC');
         $this->db->limit(10);
         return $this->db->get('pemohon_nempat')->result();
     }

    function get_autocomple_melahirkan($nokk)
    {
        $this->db->like('no_kk', $nokk, 'both');
        $this->db->order_by('no_kk', 'ASC');
        $this->db->limit(10);
        return $this->db->get('keluarga')->result();
    }

    function get_autocomple_meninggal($nonik)
    {
        $this->db->like('nik', $nonik, 'both');
        $this->db->order_by('nik', 'ASC');
        $this->db->limit(10);
        return $this->db->get('penduduk')->result();
    }

    ////////////update data//////////////////////

    function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	

}
