<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->model('User_model');
 
    }
	public function index()
	{
    $user_detals = '2';
		$this->load->view('welcome_message');
	}
      public function get_all_user_details() { //done by pooja lote
        if (!empty($this->input->get_post('pat_name'))) {
            $where_data = array('Name' => $this->input->get_post('pat_name'));

           } else {
 $where_data = array();
           } 
            $data = array('*');
             $result = $this->User_model->LoadUser($data, $where_data);
            //echo $this->db->last_query();
            $data = '';
          $Patient_ID = '';
            if ($result != false) {
              $i = 1;
                foreach ($result as $row) {
                   $Patient_ID .= $row->Patient_ID.','; 
                    $data .= '<tbody><tr>
                      <td>'.$i++.'.</td>
                      <td><strong>Name</strong></td>
                      <td>'.$row->Name.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Age</strong></td>
                      <td>'.$row->Age.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Sex</strong></td>
                      <td>'.$row->Sex.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>District</strong></td>
                      <td>'.$row->District.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Address</strong></td>
                      <td>'.$row->Address.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Contact_Number</strong></td>
                      <td>'.$row->Contact_Number.'</td>
                    </tr>                    
                  </tbody>';
                $response['status'] = 200;
                $response['body'] = $data;
                $response['pat_id'] = $Patient_ID;
            }
            } else {
                $response['status'] = 201;
                $response['body'] = "no data found";
            }
       
        echo json_encode($response);
    }  

    public function get_all_travel_details() { //done by pooja lote
        if (!empty($this->input->get_post('pat_id'))) {
            // $where_data = array('Name' => $this->input->get_post('pat_name'));
 $where_data = array();

           } else {
 $where_data = array();
           } 
            $data = array('*');
             $result = $this->User_model->LoadTravel($data, $where_data);
            //echo $this->db->last_query();
            $data = '';
         
            if ($result != false) {
              $i = 1;
                foreach ($result as $row) {
                   
                    $data .= '<tbody><tr>
                      <td>'.$i++.'.</td>
                      <td><strong>Visited</strong></td>
                      <td>'.$row->Visited.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Country of Visit</strong></td>
                      <td>'.$row->Country_of_Visit.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Date of arrival from Affected Country</strong></td>
                      <td>'.$row->Date_of_arrival.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Date of contact with person arrived from abroad</strong></td>
                      <td>'.$row->Date_of_contact.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Unknown contact with person traveled from abroad</strong></td>
                      <td>'.$row->unknown_contact.'</td>
                    </tr>
                    <tr>
                      <td></td>
                      <td><strong>Contact with covid positive patients</strong></td>
                      <td>'.$row->place_of_contact.'</td>
                    </tr>  
                    <tr>
                      <td></td>
                      <td><strong>Doctors visited</strong></td>
                      <td>'.$row->doctors_visited.'</td>
                    </tr>  
                    <tr>
                      <td></td>
                      <td><strong>Date tested for SARS COV-2 (RTPCR)</strong></td>
                      <td>'.$row->Result.'</td>
                    </tr>                    
                  </tbody>';
                $response['status'] = 200;
                $response['body'] = $data;
                
            }
            } else {
                $response['status'] = 201;
                $response['body'] = "no data found";
            }
       
        echo json_encode($response);
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
            $Patient_ID = $this->input->post('travel_pat_id');
            $Visited = $this->input->post('visited');
            $Country_of_Visit = $this->input->post('country_of_visit');
            $Date_of_arrival = $this->input->post('date_arrival');
            $Date_of_contact = $this->input->post('date_contact');
            $unknown_contact = $this->input->post('unknown_person');
            $place_of_contact = $this->input->post('positive_patients');
            $doctors_visited = $this->input->post('doc_visited');
          $tested_cov	= $this->input->post('tested_cov');
            
            $data_travel = array("Patient_ID"=>$Patient_ID,"Visited"=>$Visited, "Country_of_Visit"=>$Country_of_Visit,
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
            $Patient_ID = $this->input->post('testing_pat_id');
            $rapid_testing = $this->input->post('rapid_testing');
            $cbc = $this->input->post('cbc');
            $xray = $this->input->post('xray');
            $ct_scan = $this->input->post('ct_scan');
            $ECG = $this->input->post('ECG');
            
             $testing_data=array(
                 "Patient_ID"=>$Patient_ID,
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
        
        public function add_symptoms(){
            $Patient_ID = $this->input->post('symptoms_pat_id');
            $symptoms_name = $this->input->post('sys');
            $date_of_starting_of_symptoms = $this->input->post('date_start');
            $quarantine_place =$this->input->post('admitted');
            $date_of_sample_collection = $this->input->post('sample_collection');
            $result_of_sample_collection=$this->input->post('res_sample');
            $health_status = $this->input->post('health_status');
            
            $sys_data=array(
                'Patient_ID'=>$Patient_ID,
                'symptoms_name' => implode(",", $symptoms_name),   
                'date_of_starting_of_symptoms'=>$date_of_starting_of_symptoms,
                'quarantine_place'=>$quarantine_place,
                'date_of_sample_collection'=>$date_of_sample_collection,
                'result_of_sample_collection'=>$result_of_sample_collection,
                'health_status'=>$health_status             
                );
            if ($this->User_model->add_sys($sys_data)) {
                $response['profile'] = $sys_data;
                $response["status"] = true;
                $response["body"] = "Symptoms Information Added Successfully";
            } else {
                $response['profile'] = $sys_data;
                $response["status"] = false;
                $response["body"] = "Failed To Add Sympotoms Information";
            } echo json_encode($response);
            
        }
      
}
