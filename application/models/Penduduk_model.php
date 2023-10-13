<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penduduk_model extends CI_Model
{
    public function tampil_penduduk($table)
    {
        return $this->db->get($table);
    }

    public function getPenduduk()
    {
        $query = "SELECT `penduduk`.*, `tb_status_penduduk`.`status_penduduk`
                    FROM `penduduk` 
                    JOIN `tb_status_penduduk` ON `penduduk`.`status_penduduk_id` = `tb_status_penduduk`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    function get_autocomple($nokk)
    {
        $this->db->like('no_kk', $nokk, 'both');
        $this->db->order_by('no_kk', 'ASC');
        $this->db->limit(10);
        return $this->db->get('keluarga')->result();
    }

    public function get_count_penduduk()
    {
        $sql = "SELECT count(DISTINCT kode_surat) as kode_surat FROM pemohon";
        $result = $this->db->query($sql);
        return $result->row()->kode_surat;
    }
}
