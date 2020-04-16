<?php

class File_uploadation extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("File_modal");
     
    }

    public function index() {

//        $this->load->view("upload_file");
    }
    
    
    public function upload_files() {
//        $user_id = $this->session->user_session->user_id;
// if($user_id==null){
//     $user_id=1;
// }
      
$remarks=$this->input->post_get("remarks");
$ward=$this->input->post_get("ward");
$recovered=$this->input->post_get("recovered");
$discharge_date=$this->input->post_get("discharge_date");
$death=$this->input->post_get("death");
                 $des_path = "uploads/";
        $Patient_image = $this->File_modal->upload_file($des_path,'Patient_image');
        $Patient_file = $this->File_modal->upload_file($des_path,'Patient_file');

        if ($Patient_image["status"] == 200) {
            $des_path .= $Patient_image["body"];
            $Patient_imageDetails = $des_path;
        } else {

            $Patient_imageDetails = '';
        }
        if ($Patient_file["status"] == 200) {
            $des_path .= $Patient_file["body"];
            $Patient_fileDetails = $des_path;
        } else {

            $Patient_fileDetails = '';
        }
         
              // $uploaded_on = date("Y-m-d H:i:s");
        $data=array(
            "REMARK"=>$remarks,
            "WARD"=>$ward,
            "RECOVERED"=>$recovered,
            "DISCHARGE_DATE"=>$discharge_date,
            "PATIENT_DEATH"=>$death,
            "Patient_image"=>$Patient_imageDetails,
            "Patent's_files"=>$Patient_fileDetails
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
                
        
        
}
?>