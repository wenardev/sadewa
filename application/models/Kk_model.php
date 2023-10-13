<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kk_model extends CI_Model
{
    public function tampil_kk($table)
    {
        return $this->db->get($table);
    }

    public function tampil_rt($table)
    {
        return $this->db->get($table);
    }

    public function tampil_rw($table)
    {
        return $this->db->get($table);
    }

    public function tampil_kelurahan($table)
    {
        return $this->db->get($table);
    }

    public function tampil_kecamatan($table)
    {
        return $this->db->get($table);
    }

    public function tampil_kabupaten($table)
    {
        return $this->db->get($table);
    }

    public function tampil_provinsi($table)
    {
        return $this->db->get($table);
    }

    public function tampil_agama($table)
    {
        return $this->db->get($table);
    }

    public function tampil_pekerjaan($table)
    {
        return $this->db->get($table);
    }

    public function ambil_id_kk($id)
    {
        $cetak = $this->db->where('id', $id)->get('data_perkk');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    public function get_count_kk()
    {
        $sql = "SELECT count(DISTINCT no_kk) as no_kk FROM data_perkk";
        $result = $this->db->query($sql);
        return $result->row()->no_kk;
    }

    public function get_count_ektp()
    {
        $sql = "SELECT count(nik_kepala_keluarga) as nik_kepala_keluarga FROM data_perkk";
        $result = $this->db->query($sql);
        return $result->row()->nik_kepala_keluarga;
    }
}
