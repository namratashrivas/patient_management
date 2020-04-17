<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {

    public function add_profile($data_profile) {
        $q = $this->db->insert('user_profile', $data_profile);
        if ($this->db->affected_rows() === 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
     public function add_travel($data_travel) {
        $p = $this->db->insert('user_travel_history', $data_travel);
        if ($this->db->affected_rows() === 1) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
}