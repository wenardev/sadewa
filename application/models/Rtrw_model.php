<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rtrw_model extends CI_Model
{
    public function getRt()
    {
        $query = "SELECT `rt`.*, `tb_pendidikan`.`pendidikan`, `rw`.`no_rw`
                    FROM `rt` 
                    JOIN `tb_pendidikan` ON `rt`.`pendidikan_id` = `tb_pendidikan`.`id`
                    JOIN `rw` ON `rt`.`no_rw_id` = `rw`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    public function getRw()
    {
        $query = "SELECT `rw`.*, `tb_pendidikan`.`pendidikan`
                    FROM `rw` 
                    JOIN `tb_pendidikan` ON `rw`.`pendidikan_id` = `tb_pendidikan`.`id`
                    ";
        return $this->db->query($query)->result_array();
    }

    public function get_count_rt()
    {
        $sql = "SELECT count(no_rt) as no_rt FROM rt";
        $result = $this->db->query($sql);
        return $result->row()->no_rt;
    }

    public function get_count_rw()
    {
        $sql = "SELECT count(no_rw) as no_rw FROM rw";
        $result = $this->db->query($sql);
        return $result->row()->no_rw;
    }
}
