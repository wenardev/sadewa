<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Spektp_model extends CI_Model
{
    public function tampil_ektp($table)
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

    public function ambil_id_ektp($id)
    {
        $cetak = $this->db->where('id', $id)->get('data_perektp');

        if ($cetak->num_rows() > 0) {
            return $cetak->result();
        } else {
            return false;
        }
    }

    public function get_count_ektp()
    {
        $sql = "SELECT count(nik) as nik FROM data_perektp";
        $result = $this->db->query($sql);
        return $result->row()->nik;
    }
}
