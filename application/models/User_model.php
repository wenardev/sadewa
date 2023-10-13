<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getUserprofile()
    {
        $query = "SELECT `user`.*, `user_role`.`role`, `user_active`.`active`
                    FROM `user` 
                    JOIN `user_role` ON `user`.`role_id` = `user_role`.`id`
                    JOIN `user_active` ON `user`.`is_active` = `user_active`.`id`
                    ";
        return $this->db->query($query)->result_array();
        //result itu menampilkan data semuah
    }

    public function getUsermyprofile()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                    FROM `user` 
                    JOIN `user_role` ON `user`.`role_id` = `user_role`.`id`
                    ";
        return $this->db->query($query)->row_array();
        //result itu menampilkan data semuah
    }


    public function get_count_user()
    {
        $sql = "SELECT count(nama) as nama FROM user";
        $result = $this->db->query($sql);
        return $result->row()->nama;
    }
}
