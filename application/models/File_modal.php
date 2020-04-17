<?php
class File_modal extends CI_Model {

    function __construct() {
      
    }
     public function add_files($data) {
        try {
            $this->db->trans_start();
            $this->db->insert('other_detail', $data);
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "insert user Transaction Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "insert user Transaction Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }
    public function add_treatment_data($data) {
        try {
            $this->db->trans_start();
            $this->db->insert('user_treatments_report', $data);
            if ($this->db->trans_status() === FALSE) {
                $this->db->trans_rollback();
                log_message('info', "insert user Transaction Rollback");
                $result = FALSE;
            } else {
                $this->db->trans_commit();
                log_message('info', "insert user Transaction Commited");
                $result = TRUE;
            }
            $this->db->trans_complete();
        } catch (Exception $exc) {
            log_message('error', $exc->getMessage());
            $result = FALSE;
        }
        return $result;
    }
     function generate_img_id() {
      
         $result=$this->db->query("SELECT detail_id FROM `other_detail` order by detail_id DESC limit 0,1")->row();
        if ($this->db->affected_rows() > 0) {
            return $result->detail_id;
        } else {
            return '1';
        }
    }
		
		 function upload_file($upload_path,$id_name) {
        $img_id = $id_name."_". $this->generate_img_id();
        if (isset($_FILES[$id_name]) && $_FILES[$id_name]['error'] != '4') {
            $files = $_FILES;
            if (is_array($_FILES[$id_name]['name'])) {
                $count = count($_FILES[$id_name]['name']); // count element
            } else {
                $count = 1;
            }
            $_FILES[$id_name]['name'] = $img_id . $files[$id_name]['name'];

            $_FILES[$id_name]['type'] = $files[$id_name]['type'];
            $_FILES[$id_name]['tmp_name'] = $files[$id_name]['tmp_name'];
            $_FILES[$id_name]['error'] = $files[$id_name]['error'];
            $_FILES[$id_name]['size'] = $files[$id_name]['size'];
            $config['upload_path'] = $upload_path;
            $config['allowed_types'] = '*';
            $config['max_size'] = '500000';    //limit 10000=1 mb
            $config['remove_spaces'] = true;
            $config['overwrite'] = false;

            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            $fileName = preg_replace('/\s+/', '_', str_replace(' ', '_', $_FILES[$id_name]['name']));
            $data = array('upload_data' => $this->upload->data());
            if (empty($fileName)) {
                $response['status'] = 203;
                $response['body'] = "file is empty";
                return false;
            } else {
                $file = $this->upload->do_upload($id_name);

                if (!$file) {
                    $error = array('upload_error' => $this->upload->display_errors());
                    $response['status'] = 203;
                    $response['body'] = $files[$id_name]['name'] . ' ' . $error['upload_error'];
                } else {
                    $response['status'] = 200;
                    $response['body'] = $fileName;
                }
                return $response;
            }
        }
    }


}
?>
