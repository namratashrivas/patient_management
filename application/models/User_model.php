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
        $this->db->select('user_travel_history.Patient_ID,user_travel_history.Visited, user_travel_history.Country_of_Visit, user_travel_history.Date_of_arrival, user_travel_history.Date_of_contact, user_travel_history.unknown_contact, user_travel_history.place_of_contact, user_travel_history.doctors_visited, user_travel_history.Result,
(SELECT user_profile.Name FROM user_profile WHERE user_profile.Patient_ID=user_travel_history.Patient_ID) AS Name');
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
        $this->db->select("user_testing_report.Patient_ID,user_testing_report.Rapid_Testing, user_testing_report.CBC, user_testing_report.CHESTX_RAY, user_testing_report.CTSCAN, user_testing_report.ECG,
(SELECT user_profile.Name FROM user_profile WHERE user_profile.Patient_ID=user_testing_report.Patient_ID) AS Name");

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
    $this->db->select("user_symptoms_detail.Patient_ID,user_symptoms_detail.symptoms_seen, user_symptoms_detail.symptoms_name, user_symptoms_detail.date_of_starting_of_symptoms, user_symptoms_detail.quarantine_place,
 user_symptoms_detail.date_of_sample_collection, user_symptoms_detail.result_of_sample_collection, user_symptoms_detail.health_status,
(SELECT user_profile.Name FROM user_profile WHERE user_profile.Patient_ID=user_symptoms_detail.Patient_ID) AS Name");

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
        $this->db->select("user_treatments_report.Patient_ID,user_treatments_report.HCQS, user_treatments_report.azythromycine, user_treatments_report.vitamin_c, user_treatments_report.retro_viral, user_treatments_report.others,
(select user_profile.Name from user_profile where user_profile.Patient_ID=user_treatments_report.Patient_ID) as Name ");
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
         $this->db->select("other_detail.Patient_ID,other_detail.REMARK, other_detail.WARD, other_detail.RECOVERED, other_detail.DISCHARGE_DATE, other_detail.PATIENT_DEATH, other_detail.Patient_image, other_detail.Patents_files,
(SELECT user_profile.Name from user_profile where user_profile.Patient_ID=other_detail.Patient_ID) as Name");
$this->db->where($where_data);
        $this->db->order_by("Patient_ID", "DESC");
        $result = $this->db->get('other_detail');
        if ($result->num_rows() > 0) {
            return $result->result();
        } else {
            return false;
        }
    }
public function update_profile($data_profile, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_profile)->where($where)->update("user_profile");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }

    public function update_travel($data_travel, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_travel)->where($where)->update("user_travel_history");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }
    public function update_testing($data_testing, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_testing)->where($where)->update("user_testing_report");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }

    public function update_symptoms($data_symptoms, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_symptoms)->where($where)->update("user_symptoms_detail");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }

    public function update_treatment($data_treatments, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_treatments)->where($where)->update("user_treatments_report");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }

    public function update_other($data_others, $id) {
        $where = array(
            "Patient_ID" => $id
        );
        try {
            $this->db->trans_start();
            $this->db->set($data_others)->where($where)->update("other_detail");
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "update user Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "update user Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }

    public function add_profile($data_profile) {
        $q = $this->db->insert('user_profile', $data_profile);

        if ($this->db->affected_rows() === 1) {
             $insert_id = $this->db->insert_id();

   return  $insert_id;
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