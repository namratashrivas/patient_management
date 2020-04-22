<?php

class File_uploadation extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("File_modal");
     
    }

    public function index() {
    }
    
    
    
    public function insert_treatment() {
      $Patient_ID  = $this->input->post_get("treatment_pat_id");
    $HCQS=$this->input->post_get("HCQS");
    $azythromycine=$this->input->post_get("azythromycine");
    $vitamin_c=$this->input->post_get("vitamin_c");
    $retro_viral=$this->input->post_get("retro_viral");
    $others=$this->input->post_get("others");

    $data=array(
        "Patient_ID"=>$Patient_ID,
            "HCQS"=>$HCQS,
            "azythromycine"=>$azythromycine,
            "vitamin_c"=>$vitamin_c,
            "retro_viral"=>$retro_viral,
            "others"=>$others
        );
//   
        $result=$this->File_modal->add_treatment_data($data);
        if($result==True){
                            $response["status"] = true;
                    $response["body"] = "Success To Upload file";
                } else {
                    $response["status"] = false;
                    $response["body"] = "Failed To Upload file";
                }
                        echo json_encode($response);

    }
    public function upload_files() {
      $Patient_ID=$this->input->post_get("other_pat_id");
$remarks=$this->input->post_get("remarks");
$ward=$this->input->post_get("ward");
$recovered=$this->input->post_get("recovered");
$discharge_date=$this->input->post_get("discharge_date");
$death=$this->input->post_get("death");
                 $Patient_image_path = "uploads/";
                 $Patient_file_path = "uploads/";
        $Patient_image = $this->File_modal->upload_file($Patient_image_path,'Patient_image');
        $Patient_file = $this->File_modal->upload_file($Patient_file_path,'Patient_file');

        if ($Patient_image["status"] == 200) {
            $Patient_image_path .= $Patient_image["body"];
            $Patient_imageDetails = $Patient_image_path;
        } else {

            $Patient_imageDetails = '';
        }
        if ($Patient_file["status"] == 200) {
            $Patient_file_path .= $Patient_file["body"];
            $Patient_fileDetails = $Patient_file_path;
        } else {

            $Patient_fileDetails = '';
        }
         
              // $uploaded_on = date("Y-m-d H:i:s");
        $data=array(
            "Patient_ID"=>$Patient_ID,
            "REMARK"=>$remarks,
            "WARD"=>$ward,
            "RECOVERED"=>$recovered,
            "DISCHARGE_DATE"=>$discharge_date,
            "PATIENT_DEATH"=>$death,
            "Patient_image"=>$Patient_imageDetails,
            "Patents_files"=>$Patient_fileDetails
        );
//   
        $result=$this->File_modal->add_files($data);
        if($result==True){
                            $response["status"] = true;
                    $response["body"] = "Success To Upload file";
                } else {
                    $response["status"] = false;
                    $response["body"] = "Failed To Upload file";
                }
                        echo json_encode($response);
    }

    public function search_patient() {
        
            $result = $this->File_modal->search_patient();
            $displayString = '';
            if ($result != false) {
                foreach ($result as $patientData) {
                    $displayString .= '<option>' . $patientData->Name . '</option>';
                }
                $response["status"] = 200;
                $response["body"] = $displayString;
            } else {
                $response["status"] = 201;
                $response["body"] = "No patient found";
            }
       
        echo json_encode($response);
    }
    public function get_patient() {
         $insert_id=$this->input->post_get("insert_id");
        $get_patient = $this->File_modal->get_all_patient($insert_id);
 $data = "";
        if ($get_patient != NULL) {
           
            foreach ($get_patient as $row) {
                $data .= '<option value=' . $row->Patient_ID . '>' . $row->Name . '</option>';
            }

            $response['options'] = $data;
            $response['message'] = 'success';
            $response['code'] = 200;
            $response['status'] = true;
        } else {
            $data = "<option selected disabled>No Data</option>";
            $response['options'] = $data;
            $response['result'] = '';
            $response['message'] = 'No data to display';
            $response['code'] = 204;
            $response['status'] = false;
        }echo json_encode($response);
    }
                
        
        
}
?>