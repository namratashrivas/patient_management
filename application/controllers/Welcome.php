<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
 
    }
	public function index()
	{
		$this->load->view('welcome_message');
	}
        
         public function add_profile(){
            
             $name= $this->input->post('name');
             $age = $this->input->post('age');
             $sex= $this->input->post('sex');
             $District = $this->input->post('District');
             $address = $this->input->post('address');
             $contact_number = $this->input->post('contact_number');
             $created_on = date('y-m-d h:i:s');
//             if(){}else{}
             $data_profile  = array(
                 "Name" =>$name,"Age"=>$age,"Sex"=>$sex,"District"=>$District,"Address"=>$address,"Contact_Number"=>$contact_number,"created_on"=>$created_on    );
             if ($this->User_model->add_profile($data_profile)) {
                $response['profile'] = $data_profile;
                $response["status"] = true;
                $response["body"] = "Profile Created Successfully";
            } else {
                $response['profile'] = $data_profile;
                $response["status"] = false;
                $response["body"] = "Failed To Create Profile";
            } echo json_encode($response);
        }
        public function TRAVEL(){
            $Visited = $this->input->post('visited');
            $Country_of_Visit = $this->input->post('country_of_visit');
            $Date_of_arrival = $this->input->post('date_arrival');
            $Date_of_contact = $this->input->post('date_contact');
            $unknown_contact = $this->input->post('unknown_person');
            $place_of_contact = $this->input->post('positive_patients');
            $doctors_visited = $this->input->post('doc_visited');
          $tested_cov	= $this->input->post('tested_cov');
            
            $data_travel = array("Visited"=>$Visited, "Country_of_Visit"=>$Country_of_Visit,
                "Date_of_arrival"=>$Date_of_arrival,"Date_of_contact"=>$Date_of_arrival,
               "unknown_contact"=>$unknown_contact,"place_of_contact"=>$place_of_contact,
                "doctors_visited"=>$doctors_visited, "Result"=>$tested_cov
                
                );
            
            if ($this->User_model->add_travel($data_travel)) {
                $response['profile'] = $data_travel;
                $response["status"] = true;
                $response["body"] = "Travel History Created Successfully";
            } else {
                $response['profile'] = $data_travel;
                $response["status"] = false;
                $response["body"] = "Failed To Create Travel History";
            } echo json_encode($response);
            
        }
        public function  Testings(){
            $rapid_testing = $this->input->post('rapid_testing');
            $cbc = $this->input->post('cbc');
            $xray = $this->input->post('xray');
            $ct_scan = $this->input->post('ct_scan');
            $ECG = $this->input->post('ECG');
            
             $testing_data=array(
                 "Rapid_Testing" =>$rapid_testing,
                  "CBC"=>$cbc,
                  "CHESTX-RAY"=>$xray,
                  "CTSCAN"=>$ct_scan,
                  "ECG"=>$ECG
             );
             
             
            if ($this->User_model->add_testing($testing_data)) {
                $response['profile'] = $testing_data;
                $response["status"] = true;
                $response["body"] = "Testing Report Created Successfully";
            } else {
                $response['profile'] = $testing_data;
                $response["status"] = false;
                $response["body"] = "Failed To Create Testing Report";
            } echo json_encode($response);
            
        }
       
}
