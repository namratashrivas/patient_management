<?php

class File_uploadation extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("File_modal");
     
    }

    public function index() {
    }
    
    public function get_all_data() { //done by pooja
        if (!is_null($this->input->post_get("search"))) {
            $search = $this->input->post_get("search");
        } else {
            $search = "";
        }
        $customer_id = $this->input->post_get("customer_id");
        $year_id = $this->input->post_get("year_id");
        $status = $this->input->post_get("status");
        if ($customer_id == '' && $year_id == '') {
            $array = array("firm_id" => $firm_id, "repetition_type" => 0);
        } else if ($customer_id !== '' && $year_id == '') {
            $array = array("firm_id" => $firm_id, "customer_id" => $customer_id, "repetition_type" => 0);
        } else if ($customer_id == '' && $year_id !== '') {
            $array = array("firm_id" => $firm_id, "YEAR(planning_start_date)" => $year_id, "repetition_type" => 0);
        } else {
            $array = array("firm_id" => $firm_id, "YEAR(planning_start_date)" => $year_id, "customer_id" => $customer_id, "repetition_type" => 0);
        }

        $data = $row = array();
        $memData = $this->Project_model->getRows($_POST, $array, array("plan_id",
            "(select customer_master_data.customer_name from customer_master_data where task_planning_all.customer_id=customer_master_data.customer_id) as customer_name", "plan_name", "plan_description", "plan_identifier_name", "planning_start_date",
            "status", "enquiry_id", "firm_id", "create_on", "service_id", "denied_reason", "frequency_on_date", "frequency_on_month", "(select group_concat(planning_id) from task_scheduling_all where planning_id=plan_id) as planning_id"));
        foreach ($memData as $item) {
            $data[] = array($item->plan_id, $item->plan_name, $item->plan_identifier_name, $item->customer_name, $item->plan_description, date_format(date_create($item->create_on), "d-M-Y"),
                date_format(date_create($item->planning_start_date), "d-M-Y"), $item->enquiry_id,
                $item->service_id, $item->denied_reason, $item->status, $item->planning_id, $item->frequency_on_date, $item->frequency_on_month);
        }
//        echo $this->db->last_query();
        $output = array(
            "query" => $this->db->last_query(),
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->Project_model->countAll(),
            "recordsFiltered" => $this->Project_model->countFiltered($_POST),
            "data" => $data,
        );
        echo json_encode($output);
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
            "Patient_ID"=>$other_pat_id,
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
    public function get_patient() {
        
        $get_patient = $this->File_modal->get_all_patient();
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