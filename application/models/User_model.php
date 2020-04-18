<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user_model extends CI_Model {
   
    public function LoadUser($data, $where_data) {
        $this->db->select($data);
        $this->db->like($where_data, 'match', 'both'); 
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('user_profile');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }

    public function LoadTravel($data, $where_data) {
        $this->db->select($data);
        $this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('user_travel_history');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function LoadTesting($data, $where_data) {
        $this->db->select($data);
        $this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('user_testing_report');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
     public function LoadSymptoms($data, $where_data) {
        $this->db->select($data);
        $this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('user_symptoms_detail');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function LoadTreatment($data, $where_data) {
        $this->db->select($data);
        $this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('user_treatments_report');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
    public function LoadOther($data, $where_data) {
        $this->db->select($data);
        $this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('other_detail');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }


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
    public function add_testing($testing_data){
        $r= $this->db->insert('user_testing_report',$testing_data);
        if($this->db->affected_rows()===1){
            return TRUE;
            
        }
        else{
            return FALSE;
        }
    }
        public function add_sys($sys_data){
        $s= $this->db->insert('user_symptoms_detail',$sys_data);
        if($this->db->affected_rows()===1){
            return TRUE;
            
        }
        else{
            return FALSE;
        }
    }
}