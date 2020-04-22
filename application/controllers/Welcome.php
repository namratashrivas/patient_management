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

public function change_user_details() { //done by pooja lote
        if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

        } else {
         $where_data = array();
       } 
       $data = array('*');
       $result = $this->User_model->LoadUser($data, $where_data);
            //echo $this->db->last_query();
       $data = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $data .= '<input type="hidden" id="hidden_id'.$row->Patient_ID.'" name="hidden_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"><tr>
         <td>'.$i++.'.</td>
         <td><strong>Name</strong></td>
         <td><input type="text" value="'.$row->Name.'" id="edit_name'.$row->Patient_ID.'" name="edit_name'.$row->Patient_ID.'"></td>
         </tr>
         <tr>
         <td></td>
         <td><strong>Age</strong></td>
         <td><input type="text" value="'.$row->Age.'" id="edit_age'.$row->Patient_ID.'" name="edit_age'.$row->Patient_ID.'"></td>
         </tr>
         <tr>
         <td></td>
         <td><strong>Sex</strong></td>
         <td><select class="form-control" id="edit_sex'.$row->Patient_ID.'" name="edit_sex'.$row->Patient_ID.'">
                                                            <option>Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select></td>
         </tr>
         <tr>
         <td></td>
         <td><strong>District</strong></td>
         <td><input value="'.$row->District.'" type="text" name="edit_District'.$row->Patient_ID.'" class="form-control " id="edit_District'.$row->Patient_ID.'" placeholder="Enter District" ></td>
         </tr>
         <tr>
         <td></td>
         <td><strong>Address</strong></td>
         <td><input value="'.$row->Address.'" type="text" name="edit_address'.$row->Patient_ID.'" class="form-control " id="edit_address'.$row->Patient_ID.'" placeholder="Enter Address" > </td>
         </tr>
         <tr>
         <td></td>
         <td><strong>Contact Number</strong></td>
         <td><input value="'.$row->Contact_Number.'" type="number" min="1" name="edit_contact_number'.$row->Patient_ID.'" class="form-control " id="edit_contact_number'.$row->Patient_ID.'" placeholder="Enter Contact Number" ></td>
         </tr>
         <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="Save_user(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button>
                                                    </td>
         </tr>';         
       } 
       
       $response['status'] = 200;
         $response['body'] = $data;
     } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }

    echo json_encode($response);
  } 
  public function change_travel_details() { //done by pooja lote
        if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

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
         $data .= '<input type="hidden" id="hidden_trav_id'.$row->Patient_ID.'" name="hidden_trav_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> 
         <tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Visited</strong></td>
        <td> <input type="text" value="'.$row->Visited.'" name="edit_visited'.$row->Patient_ID.'" class="form-control " id="edit_visited'.$row->Patient_ID.'" placeholder="Enter Visited Place"  ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Country of Visit</strong></td>
        <td><input type="text" value="'.$row->Country_of_Visit.'" name="edit_country_of_visit'.$row->Patient_ID.'" class="form-control " id="edit_country_of_visit'.$row->Patient_ID.'" placeholder="Enter Visited Country" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Date of arrival from Affected Country</strong></td>
        <td><input type="date" value="'.$row->Date_of_arrival.'" name="edit_date_arrival'.$row->Patient_ID.'" class="form-control " id="edit_date_arrival'.$row->Patient_ID.'" placeholder="Enter Date Of Arrival Country" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Date of contact with person arrived from abroad</strong></td>
        <td> <input type="date" value="'.$row->Date_of_contact.'" name="edit_date_contact'.$row->Patient_ID.'" class="form-control " id="edit_date_contact'.$row->Patient_ID.'" placeholder="Enter Date Of Contact With Person Arrived From Abroad" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Unknown contact with person traveled from abroad</strong></td>
        <td><input type="text" value="'.$row->Visited.'" name="edit_visited'.$row->Patient_ID.'" class="form-control " id="edit_visited'.$row->Patient_ID.'" placeholder="Enter Visited Place"  ><input type="text" value="'.$row->Country_of_Visit.'" name="edit_country_of_visit'.$row->Patient_ID.'" class="form-control " id="edit_country_of_visit'.$row->Patient_ID.'" placeholder="Enter Visited Country" ><input type="date" value="'.$row->Date_of_arrival.'" name="edit_date_arrival'.$row->Patient_ID.'" class="form-control " id="edit_date_arrival'.$row->Patient_ID.'" placeholder="Enter Date Of Arrival Country" > <input type="date" value="'.$row->Date_of_contact.'" name="edit_date_contact'.$row->Patient_ID.'" class="form-control " id="edit_date_contact'.$row->Patient_ID.'" placeholder="Enter Date Of Contact With Person Arrived From Abroad" ><input type="text" value="'.$row->unknown_contact.'" name="edit_unknown_person'.$row->Patient_ID.'" class="form-control " id="edit_unknown_person'.$row->Patient_ID.'" placeholder="Unknown Contact With Person Traveled From Abroad" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Contact with covid positive patients</strong></td>
        <td><select class="form-control" id="edit_positive_patients'.$row->Patient_ID.'" name="edit_positive_patients'.$row->Patient_ID.'">
                                                            <option value="In locality">In family</option>
                                                            <option value="In locality">In locality</option>                          
                                                        </select></td>
        </tr>  
        <tr>
        <td></td>
        <td><strong>Doctors visited</strong></td>
        <td><input type="text" value="'.$row->doctors_visited.'" name="edit_doc_visited'.$row->Patient_ID.'" class="form-control " id="edit_doc_visited'.$row->Patient_ID.'" placeholder="Enter Doctors Visited" ></td>
        </tr>  
        <tr>
        <td></td>
        <td><strong>Date tested for SARS COV-2 (RTPCR)</strong></td>
        <td> <select class="form-control" id="edit_tested_cov'.$row->Patient_ID.'" name="edit_tested_cov'.$row->Patient_ID.'">
                                                            <option value="Positive">Positive</option>
                                                            <option value="Negative">Negative</option>                          
                                                        </select></td>
        </tr><tr>
         <td></td>
         <td></td>
         <td><button type="button" id="button_user" onclick="Save_travel(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button></td>
         </tr>';         
       } 
       
       $response['status'] = 200;
         $response['body'] = $data;
     } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }

    echo json_encode($response);
  }
  public function change_testing_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

        } else {
         $where_data = array();
       } 
       $data = array('*');
       $result = $this->User_model->LoadTesting($data, $where_data);
            //echo $this->db->last_query();
       $data = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $data .= '<input type="hidden" id="hidden_testing_id'.$row->Patient_ID.'" name="hidden_testing_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> 
        <tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Rapid Testing</strong></td>
        <td><input type="text" name="edit_rapid_testing'.$row->Patient_ID.'" class="form-control " id="edit_rapid_testing'.$row->Patient_ID.'" value="'.$row->Rapid_Testing.'" placeholder="Enter Rapid Testing"  ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CBC</strong></td>
        <td><input type="text" name="edit_cbc'.$row->Patient_ID.'" value="'.$row->CBC.'" class="form-control " id="edit_cbc'.$row->Patient_ID.'" placeholder="Enter CBC" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CHEST X-RAY</strong></td>
        <td><input type="text" value="'.$row->CHESTX_RAY.'" name="edit_xray'.$row->Patient_ID.'" class="form-control " id="edit_xray'.$row->Patient_ID.'" placeholder="Enter CHEST X-RAY" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CT- SCAN</strong></td>
        <td><input value="'.$row->CTSCAN.'" type="text" name="edit_ct_scan'.$row->Patient_ID.'" class="form-control " id="edit_ct_scan'.$row->Patient_ID.'" placeholder="Enter CT-SCAN" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>ECG</strong></td>
        <td><input value="'.$row->ECG.'" type="text" name="edit_ECG'.$row->Patient_ID.'" class="form-control " id="edit_ECG'.$row->Patient_ID.'" placeholder="Enter ECG" ></td>
        </tr><tr>
         <td></td>
         <td></td>
         <td><button type="button" id="button_user" onclick="Save_testing(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button></td>
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

  public function change_symptoms_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

        } else {
         $where_data = array();
       } 
       $data = array('*');
       $result = $this->User_model->LoadSymptoms($data, $where_data);
            //echo $this->db->last_query();
       $data = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $data .= '<input type="hidden" id="hidden_symptoms_id'.$row->Patient_ID.'" name="hidden_symptoms_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> <div class="form-group">
            <label for="Patient Name">'.$i++.'.Patient Name</label><input type="text" value="'.$row->Name.'"  class="form-control " readonly >   </div> 
                                                     <div class="form-group" style="margin-bottom:unset !important;">
                                                        <label for=" symptoms ">Symptoms:  
                                                            <input type="radio" id="edit_yes'.$row->Patient_ID.'" name="edit_yes'.$row->Patient_ID.'" value="yes">&nbsp;<label for="male">Yes</label>&nbsp;&nbsp;<input type="radio" id="edit_no'.$row->Patient_ID.'" name="edit_yes'.$row->Patient_ID.'" value="no" checked="">&nbsp;<label for="female">No</label>          
                                                    </label>
                                                    </div> 
                                                    <div class="form-group" id="edit_myDIV'.$row->Patient_ID.'" style="display:none; ">
                                                        <input class="" type="checkbox" id="edit_COUGH'.$row->Patient_ID.'" name="edit_sys'.$row->Patient_ID.'[]" value="Cough">&nbsp;<label>Cough</label>&nbsp;&nbsp;
                                                        <input class="" type="checkbox" id="edit_FEVER'.$row->Patient_ID.'" name="edit_sys'.$row->Patient_ID.'[]" value="Fever">&nbsp;<label>Fever</label>
                                                        &nbsp;&nbsp;<input class="" type="checkbox" id="edit_LOSS_OF_SMELL'.$row->Patient_ID.'"name="edit_sys'.$row->Patient_ID.'[]" value="Loss of smell">&nbsp;<label>Loss of smell</label>&nbsp;&nbsp;
                                                        <input class="" type="checkbox" id="edit_DIARRHOES'.$row->Patient_ID.'" name="edit_sys'.$row->Patient_ID.'[]" value="Diarrhoea">&nbsp;<label>Diarrhoea</label>&nbsp;&nbsp;<input class="" type="Checkbox" id="edit_LOSS_OF_TASTE'.$row->Patient_ID.'"  name="edit_sys'.$row->Patient_ID.'[]" value="Loss of taste">&nbsp;<label>Loss of taste</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date of starting of symptoms ">Date of starting of symptoms </label>
                                                        <input type="date" name="edit_date_start'.$row->Patient_ID.'" class="form-control " id="edit_date_start'.$row->Patient_ID.'" value="'.$row->date_of_starting_of_symptoms.'" placeholder="Enter date of starting of symptoms " >
                                                       </div>

                                                    <div class="form-group">
                                                        <label for="Hospital Where Admitted / home quatrentine">Hospital Where Admitted / home quatrentine</label>
                                                        <input type="text" name="edit_admitted'.$row->Patient_ID.'" class="form-control " value="'.$row->quarantine_place.'" id="edit_admitted'.$row->Patient_ID.'" placeholder="Enter Hospital Where Admitted / home quatrentine" >
                                                        </div>

                                                    <div class="form-group">
                                                        <label for="Date of sample collection (second)">Date of sample collection (second)</label>
                                                        <input type="date" value="'.$row->date_of_sample_collection.'"  name="edit_sample_collection'.$row->Patient_ID.'" class="form-control " id="edit_sample_collection'.$row->Patient_ID.'" placeholder="Enter Date of sample collection (second)" >
                                                        </div>
                                                    <div class="form-group">
                                                        <label for="result of sample (second)">Result of sample (second)</label>
                                                        <input type="text" name="edit_res_sample'.$row->Patient_ID.'" class="form-control " value="'.$row->result_of_sample_collection.'" id="edit_res_sample'.$row->Patient_ID.'" placeholder="Enter Result of sample (second)" ></div>

                                                    <div class="form-group">
                                                        <label for="current health status">Current health status</label>
                                                        <input type="text" name="edit_health_status'.$row->Patient_ID.'" class="form-control " id="edit_health_status'.$row->Patient_ID.'" value="'.$row->health_status.'" placeholder="EnterCurrent health status" >
                                                        <span id="health_status-error" class="error invalid-feedback"></span></div>

                                                    <div class="card-footer">
                                                        <button type="button" id="button_user" onclick="Save_symptoms(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button>
                                                    </div>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }
  public function change_treatment_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

        } else {
         $where_data = array();
       } 
       $data = array('*');
       $result = $this->User_model->LoadTreatment($data, $where_data);
            //echo $this->db->last_query();
       $data = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $data .= '<input type="hidden" id="hidden_testing_id'.$row->Patient_ID.'" name="hidden_testing_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> <tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>HCQS</strong></td>
        <td><input type="text" name="edit_HCQS'.$row->Patient_ID.'" class="form-control" id="edit_HCQS'.$row->Patient_ID.'" value="'.$row->HCQS.'" placeholder="EnterHCQS"  ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>AZYTHROMYCINE</strong></td>
        <td><input type="text" value="'.$row->azythromycine.'" name="edit_azythromycine'.$row->Patient_ID.'" class="form-control " id="edit_azythromycine'.$row->Patient_ID.'" placeholder="Enter AZYTHROMYCINE " ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>VITAMIN C</strong></td>
        <td><input type="text" value="'.$row->vitamin_c.'" name="edit_vitamin_c'.$row->Patient_ID.'" class="form-control " id="edit_vitamin_c'.$row->Patient_ID.'" placeholder="Enter VITAMIN C " ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>RETRO VIRAL</strong></td>
        <td><input type="text" value="'.$row->retro_viral.'" name="edit_retro_viral'.$row->Patient_ID.'" class="form-control " id="edit_retro_viral'.$row->Patient_ID.'" placeholder="Enter RETRO VIRAL" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>OTHERS</strong></td>
        <td><input type="text" value="'.$row->others.'" name="edit_others'.$row->Patient_ID.'" class="form-control " id="edit_others'.$row->Patient_ID.'" placeholder="Enter OTHERS" ></td>
        </tr>                       
         <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="Save_treatment(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button>
                                                    </td>
         </tr>';  
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }
  public function change_other_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

        } else {
         $where_data = array();
       } 
       $data = array('*');
       $result = $this->User_model->LoadOther($data, $where_data);
            //echo $this->db->last_query();
       $data = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $data .= '<input type="hidden" id="hidden_other_id'.$row->Patient_ID.'" name="hidden_other_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> <tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Remarks</strong></td>
        <td><input type="text" value="'.$row->REMARK.'" name="edit_remarks'.$row->Patient_ID.'" class="form-control " id="edit_remarks'.$row->Patient_ID.'" placeholder="Enter Remarks"  ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Ward</strong></td>
        <td><input type="text" value="'.$row->WARD.'" name="edit_ward'.$row->Patient_ID.'" class="form-control " id="edit_ward'.$row->Patient_ID.'" placeholder="Enter Ward"  ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Recovered</strong></td>
        <td><input type="text" value="'.$row->RECOVERED.'" name="edit_recovered'.$row->Patient_ID.'" class="form-control " id="edit_recovered'.$row->Patient_ID.'" placeholder="Enter Recovered " ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>DISCHARGE DATE</strong></td>
        <td><input type="date" value="'.$row->DISCHARGE_DATE.'" name="edit_discharge_date'.$row->Patient_ID.'" class="form-control " id="edit_discharge_date'.$row->Patient_ID.'" placeholder="Enter  Discharge Date " ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>PATIENT DEATH</strong></td>
        <td><input type="text" value="'.$row->PATIENT_DEATH.'" name="edit_death'.$row->Patient_ID.'" class="form-control " id="edit_death'.$row->Patient_ID.'" placeholder="Enter PATIENT DEATH" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Patient image</strong></td>
        <td><img src="'.base_url().$row->Patient_image.'" alt="Patient Image" height="42" width="42"><input type="file" name="edit_Patient_image'.$row->Patient_ID.'" class="form-control " id="edit_Patient_image'.$row->Patient_ID.'" placeholder="Enter Patient Image" ></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Patient file</strong></td>
        <td><a target="_blank" href="'.base_url().$row->Patents_files.'"><i class="fa fa-fw fa-download"></i></a><input type="file" name="edit_Patient_file'.$row->Patient_ID.'" class="form-control " id="edit_Patient_file'.$row->Patient_ID.'" placeholder="Enter Patient File" ></td>
        </tr> 
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="Save_others(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button>
                                                    </td>
         </tr>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }
  public function change_travel_details2() { //done by pooja lote
        if (!empty($this->input->get_post('pat_id'))) {
          $where_data = array('Patient_ID' => $this->input->get_post('pat_id'));

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
         $data .= '<input type="hidden" id="hidden_trav_id'.$row->Patient_ID.'" name="hidden_trav_id'.$row->Patient_ID.'" value="'.$row->Patient_ID.'"> 
          <div class="form-group">
            <label for="Patient Name">'.$i++.'.Patient Name</label><input type="text" value="'.$row->Name.'"  class="form-control " placeholder="Enter Visited Place" readonly >   </div> 
         <div class="form-group">
            <label for="Visited">Visited</label>
           <input type="text" value="'.$row->Visited.'" name="edit_visited'.$row->Patient_ID.'" class="form-control " id="edit_visited'.$row->Patient_ID.'" placeholder="Enter Visited Place" >                                          
        </div>
        <div class="form-group">
                                                        <label for="Country of Visit">Country of Visit</label>
                                                        <input type="text" value="'.$row->Country_of_Visit.'" name="edit_country_of_visit'.$row->Patient_ID.'" class="form-control " id="edit_country_of_visit'.$row->Patient_ID.'" placeholder="Enter Visited Country" >
                                                   
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Date of arival from Affected Country">Date of arrival from Affected Country</label>
                                                        <input type="date" value="'.$row->Date_of_arrival.'" name="edit_date_arrival'.$row->Patient_ID.'" class="form-control " id="edit_date_arrival'.$row->Patient_ID.'" placeholder="Enter Date Of Arrival Country" >          
                                                     
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Date of contact with person arrived from abroad">Date of contact with person arrived from abroad</label>
                                                        <input type="date" value="'.$row->Date_of_contact.'" name="edit_date_contact'.$row->Patient_ID.'" class="form-control " id="edit_date_contact'.$row->Patient_ID.'" placeholder="Enter Date Of Contact With Person Arrived From Abroad" >
                                                      
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Unknown contact with person traveled from abroad">Unknown contact with person traveled from abroad</label>
                                                        <input type="text" value="'.$row->unknown_contact.'" name="edit_unknown_person'.$row->Patient_ID.'" class="form-control " id="edit_unknown_person'.$row->Patient_ID.'" placeholder="Unknown Contact With Person Traveled From Abroad" >
                                                     
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Contact with covid positive patients</label>
                                                        <select class="form-control" id="edit_positive_patients'.$row->Patient_ID.'" name="edit_positive_patients'.$row->Patient_ID.'">
                                                            <option value="In locality">In family</option>
                                                            <option value="In locality">In locality</option>                          
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="doctors visited">Doctors visited</label>
                                                       <input type="text" value="'.$row->doctors_visited.'" name="edit_doc_visited'.$row->Patient_ID.'" class="form-control " id="edit_doc_visited'.$row->Patient_ID.'" placeholder="Enter Doctors Visited" >
                                                        
                                                   
                                                    </div>
                                                    <div class="form-group">
                                                        <label> DATE tested for SARS COV-2 ( RTPCR)</label>
                                                        <select class="form-control" id="edit_tested_cov'.$row->Patient_ID.'" name="edit_tested_cov'.$row->Patient_ID.'">
                                                            <option value="Positive">Positive</option>
                                                            <option value="Negative">Negative</option>                          
                                                        </select>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="button" id="button_user" onclick="Save_travel(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Save</button> 
                                                    </div>';         
       } 
       
       $response['status'] = 200;
         $response['body'] = $data;
     } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }

    echo json_encode($response);
  }



public function update_user_details() {
  $id = $this->input->post('hidden_id');
       $name= $this->input->post('edit_name');
   $age = $this->input->post('edit_age');
   $sex= $this->input->post('edit_sex');
   $District = $this->input->post('edit_District');
   $address = $this->input->post('edit_address');
   $contact_number = $this->input->post('edit_contact_number');
   $modified_on = date('y-m-d h:i:s');
//             if(){}else{}
   // print_r($_POST);
   // exit();
   $data_profile  = array(
     "Name" =>$name,"Age"=>$age,"Sex"=>$sex,"District"=>$District,"Address"=>$address,"Contact_Number"=>$contact_number,"modified_on"=>$modified_on    );
   if ($this->User_model->update_profile($data_profile,$id)) {
    $response['profile'] = $data_profile;
    $response["status"] = true;
    $response["body"] = "Profile Update Successfully";
  } else {
    $response['profile'] = $data_profile;
    $response["status"] = false;
    $response["body"] = "Failed To update Profile";
  } echo json_encode($response);


       
    }

    public function update_travel_details() {
  $id = $this->input->post('hidden_trav_id');
       $edit_visited= $this->input->post('edit_visited');
   $edit_country_of_visit = $this->input->post('edit_country_of_visit');
   $edit_date_arrival= $this->input->post('edit_date_arrival');
   $edit_date_contact = $this->input->post('edit_date_contact');
   $edit_unknown_person = $this->input->post('edit_unknown_person');
   $edit_positive_patients = $this->input->post('edit_positive_patients');
   $edit_doc_visited = $this->input->post('edit_doc_visited');
   $edit_tested_cov = $this->input->post('edit_tested_cov');
   $modified_on = date('y-m-d h:i:s');
//             if(){}else{}
   // print_r($_POST);
   // exit();
   $data_travel = array("Patient_ID"=>$id,"Visited"=>$edit_visited, "Country_of_Visit"=>$edit_country_of_visit,
    "Date_of_arrival"=>$edit_date_arrival,"Date_of_contact"=>$edit_date_contact,
    "unknown_contact"=>$edit_unknown_person,"place_of_contact"=>$edit_positive_patients,
    "doctors_visited"=>$edit_doc_visited, "Result"=>$edit_tested_cov

  );
   if ($this->User_model->update_travel($data_travel,$id)) {
    $response['profile'] = $data_travel;
    $response["status"] = true;
    $response["body"] = "Update Successfully";
  } else {
    $response['profile'] = $data_travel;
    $response["status"] = false;
    $response["body"] = "Failed To update";
  } echo json_encode($response);


       
    }

    public function update_testing_details() {
  $id = $this->input->post('hidden_testing_id');
       $edit_rapid_testing= $this->input->post('edit_rapid_testing');
   $edit_cbc = $this->input->post('edit_cbc');
   $edit_xray= $this->input->post('edit_xray');
   $edit_ct_scan = $this->input->post('edit_ct_scan');
   $edit_ECG = $this->input->post('edit_ECG');
   $modified_on = date('y-m-d h:i:s');
//             if(){}else{}
   // print_r($_POST);
   // exit();
   $data_testing = array("Patient_ID"=>$id,"Rapid_Testing"=>$edit_rapid_testing, "CBC"=>$edit_cbc,
    "CHESTX_RAY"=>$edit_xray,"CTSCAN"=>$edit_ct_scan,
    "ECG"=>$edit_ECG
  );
   if ($this->User_model->update_testing($data_testing,$id)) {
    $response['profile'] = $data_testing;
    $response["status"] = true;
    $response["body"] = "Update Successfully";
  } else {
    $response['profile'] = $data_testing;
    $response["status"] = false;
    $response["body"] = "Failed To update";
  } echo json_encode($response);


       
    }

      public function update_symptoms_details() {
  $id = $this->input->post('hidden_symptoms_id');
       $edit_yes= $this->input->post('edit_yes');
   $edit_sys = $this->input->post('edit_sys');
   $edit_date_start= $this->input->post('edit_date_start');
   $edit_admitted = $this->input->post('edit_admitted');
   $edit_sample_collection = $this->input->post('edit_sample_collection');
   $edit_res_sample = $this->input->post('edit_res_sample');
   $edit_health_status = $this->input->post('edit_health_status');
//             if(){}else{}
   // print_r($_POST);
   // exit();
   $data_symptoms = array("Patient_ID"=>$id,"symptoms_seen"=>$edit_yes, "symptoms_name"=>$edit_sys,
    "date_of_starting_of_symptoms"=>$edit_date_start,"quarantine_place"=>$edit_admitted,
    "date_of_sample_collection"=>$edit_sample_collection, "result_of_sample_collection"=>$edit_res_sample,"health_status"=>$edit_health_status
  );
   if ($this->User_model->update_symptoms($data_symptoms,$id)) {
    $response['profile'] = $data_symptoms;
    $response["status"] = true;
    $response["body"] = "Update Successfully";
  } else {
    $response['profile'] = $data_symptoms;
    $response["status"] = false;
    $response["body"] = "Failed To update";
  } 
  echo json_encode($response);       
    }

    public function update_treatment_details() {
  $id = $this->input->post('hidden_testing_id');
       $edit_HCQS= $this->input->post('edit_HCQS');
   $edit_azythromycine = $this->input->post('edit_azythromycine');
   $edit_vitamin_c= $this->input->post('edit_vitamin_c');
   $edit_retro_viral = $this->input->post('edit_retro_viral');
   $edit_others = $this->input->post('edit_others');

   $data_treatments = array("Patient_ID"=>$id,"HCQS"=>$edit_HCQS, "azythromycine"=>$edit_azythromycine,
    "vitamin_c"=>$edit_vitamin_c,"retro_viral"=>$edit_retro_viral,"others"=>$edit_others);
   if ($this->User_model->update_treatment($data_treatments,$id)) {
    $response['profile'] = $data_treatments;
    $response["status"] = true;
    $response["body"] = "Update Successfully";
  } else {
    $response['profile'] = $data_treatments;
    $response["status"] = false;
    $response["body"] = "Failed To update";
  } 
    echo json_encode($response);       
    }

  public function update_other_details() {
  $id = $this->input->post('hidden_other_id');
       $edit_remarks= $this->input->post('edit_remarks');
   $edit_ward = $this->input->post('edit_ward');
   $edit_recovered= $this->input->post('edit_recovered');
   $edit_discharge_date = $this->input->post('edit_discharge_date');
   $edit_death = $this->input->post('edit_death');
   $edit_Patient_image = $this->input->post('edit_Patient_image');
   $edit_Patient_file = $this->input->post('edit_Patient_file');

   $data_others = array("Patient_ID"=>$id,"REMARK"=>$edit_remarks,"WARD"=>$edit_ward,"RECOVERED"=>$edit_recovered, "DISCHARGE_DATE"=>$edit_discharge_date, "PATIENT_DEATH"=>$edit_death,"Patient_image"=>$edit_Patient_image,"Patents_files"=>$edit_Patient_file);
   if ($this->User_model->update_other($data_others,$id)) {
    $response['profile'] = $data_others;
    $response["status"] = true;
    $response["body"] = "Update Successfully";
  } else {
    $response['profile'] = $data_others;
    $response["status"] = false;
    $response["body"] = "Failed To update";
  } 

  echo json_encode($response);       
    }
      public function get_all_user_details() { //done by pooja lote
        if (!empty($this->input->get_post('pat_name'))) {
          $where_data = array('Name' => $this->input->get_post('pat_name'));       
       $data = array('*');
       $result = $this->User_model->LoadUser($data, $where_data);
            //echo $this->db->last_query();
       $data = '<table class="table table-sm" id="">';
       $Patient_ID = '';
       if ($result != false) {
        $i = 1;
        foreach ($result as $row) {
         $Patient_ID .= $row->Patient_ID.','; 
         $data .= '<tbody id="user_'.$row->Patient_ID.'"><tr>
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
         <td><strong>Contact Number</strong></td>
         <td>'.$row->Contact_Number.'</td>
         </tr>
         <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_user(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                    
         </tbody>';         
       } 
       $data .= '</table>';
       $response['status'] = 200;
         $response['body'] = $data;
         $response['pat_id'] = $Patient_ID;
     }  
     else {
           $response['status'] = 201;
      $response['body'] = "no data found";
       }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }

    echo json_encode($response);
  }  

    public function get_all_travel_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
        $pat_id =  rtrim($this->input->get_post('pat_id'),",");
        $array_pat = (explode(",",$pat_id));
        $count_array = count($array_pat);
        $where_for_loop_data="";
        for($i=0;$i<$count_array;$i++){
$where_for_loop_data .="Patient_ID =".$array_pat[$i]. " OR ";
        }
           $where_data = rtrim($where_for_loop_data," OR ");
      //$where_data = array();
echo $this->db->last_query();
    
     $data = array('*');
     $result = $this->User_model->LoadTravel($data, $where_data);
            //echo $this->db->last_query();
     $data = '';

     if ($result != false) {
      $i = 1;
      foreach ($result as $row) {

        $data .= '<tbody id="travel_'.$row->Patient_ID.'">
        <tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
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
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_travel(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                       
        </tbody>';
        $response['status'] = 200;
        $response['body'] = $data;

      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
} else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }

    echo json_encode($response);
  }  

 public function get_all_testing_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
            $pat_id =  rtrim($this->input->get_post('pat_id'),",");
        $array_pat = (explode(",",$pat_id));
        $count_array = count($array_pat);
        $where_for_loop_data="";
        for($i=0;$i<$count_array;$i++){
$where_for_loop_data .="Patient_ID =".$array_pat[$i]. " OR ";
        }
           $where_data = rtrim($where_for_loop_data," OR ");

     
     $data = array('*');
     $result = $this->User_model->LoadTesting($data, $where_data);
            //echo $this->db->last_query();
     $data = '';
     
     if ($result != false) {
      $i = 1;
      foreach ($result as $row) {
       
        $data .= '<tbody id="testing_'.$row->Patient_ID.'"><tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Rapid Testing</strong></td>
        <td>'.$row->Rapid_Testing.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CBC</strong></td>
        <td>'.$row->CBC.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CHEST X-RAY</strong></td>
        <td>'.$row->CHESTX_RAY.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>CT- SCAN</strong></td>
        <td>'.$row->CTSCAN.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>ECG</strong></td>
        <td>'.$row->ECG.'</td>
        </tr> 
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_testing(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                   
        </tbody>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
      } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }

  public function get_all_symptoms_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
       $pat_id =  rtrim($this->input->get_post('pat_id'),",");
        $array_pat = (explode(",",$pat_id));
        $count_array = count($array_pat);
        $where_for_loop_data="";
        for($i=0;$i<$count_array;$i++){
$where_for_loop_data .="Patient_ID =".$array_pat[$i]. " OR ";
        }
           $where_data = rtrim($where_for_loop_data," OR ");

     
     $data = array('*');
     $result = $this->User_model->LoadSymptoms($data, $where_data);
            
     $data = '';
     
     if ($result != false) {
      $i = 1;
      foreach ($result as $row) {
       
        $data .= '<tbody id="symptoms_'.$row->Patient_ID.'"><tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Symptoms Seen</strong></td>
        <td>'.$row->symptoms_seen.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Symptoms Name</strong></td>
        <td>'.$row->symptoms_name.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Date of starting of symptoms</strong></td>
        <td>'.$row->date_of_starting_of_symptoms.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Hospital Where Admitted / home quatrentine</strong></td>
        <td>'.$row->quarantine_place.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Date of sample collection (second)</strong></td>
        <td>'.$row->date_of_sample_collection.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Result of sample (second)</strong></td>
        <td>'.$row->result_of_sample_collection.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Current health status</strong></td>
        <td>'.$row->health_status.'</td>
        </tr> 
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_symptoms(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                   
        </tbody>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }} else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }
  public function get_all_treatment_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
       $pat_id =  rtrim($this->input->get_post('pat_id'),",");
        $array_pat = (explode(",",$pat_id));
        $count_array = count($array_pat);
        $where_for_loop_data="";
        for($i=0;$i<$count_array;$i++){
$where_for_loop_data .="Patient_ID =".$array_pat[$i]. " OR ";
        }
           $where_data = rtrim($where_for_loop_data," OR ");

    
     $data = array('*');
     $result = $this->User_model->LoadTreatment($data, $where_data);
            
     $data = '';
     
     if ($result != false) {
      $i = 1;
      foreach ($result as $row) {
       
        $data .= '<tbody id="treatment_'.$row->Patient_ID.'"><tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>HCQS</strong></td>
        <td>'.$row->HCQS.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>AZYTHROMYCINE</strong></td>
        <td>'.$row->azythromycine.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>VITAMIN C</strong></td>
        <td>'.$row->vitamin_c.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>RETRO VIRAL</strong></td>
        <td>'.$row->retro_viral.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>OTHERS</strong></td>
        <td>'.$row->others.'</td>
        </tr> 
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_treatment(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                      
        </tbody>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    } } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
    }
    
    echo json_encode($response);
  }
  public function get_all_other_details() { //done by pooja lote
      if (!empty($this->input->get_post('pat_id'))) {
        $pat_id =  rtrim($this->input->get_post('pat_id'),",");
        $array_pat = (explode(",",$pat_id));
        $count_array = count($array_pat);
        $where_for_loop_data="";
        for($i=0;$i<$count_array;$i++){
$where_for_loop_data .="Patient_ID =".$array_pat[$i]. " OR ";
        }
           $where_data = rtrim($where_for_loop_data," OR ");

    
     $data = array('*');
     $result = $this->User_model->LoadOther($data, $where_data);
            
     $data = '';
     
     if ($result != false) {
      $i = 1;
      foreach ($result as $row) {
       
        $data .= '<tbody id="other_'.$row->Patient_ID.'"><tr>
        <td>'.$i++.'.</td>
        <td><strong>Patient Name</strong></td>
        <td>'.$row->Name.'</td>
        </tr><tr>
        <td></td>
        <td><strong>Remarks</strong></td>
        <td>'.$row->REMARK.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Ward</strong></td>
        <td>'.$row->WARD.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Recovered</strong></td>
        <td>'.$row->RECOVERED.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>DISCHARGE DATE</strong></td>
        <td>'.$row->DISCHARGE_DATE.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>PATIENT DEATH</strong></td>
        <td>'.$row->PATIENT_DEATH.'</td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Patient image</strong></td>
        <td><img src="'.base_url().$row->Patient_image.'" alt="Patient Image" height="42" width="42"></td>
        </tr>
        <tr>
        <td></td>
        <td><strong>Patient file</strong></td>
        <td><a target="_blank" href="'.base_url().$row->Patents_files.'"><i class="fa fa-fw fa-download"></i></a></td>
        </tr>   
        <tr>
         <td></td>
         <td></td>
         <td>
                                                        <button type="button" id="button_user" onclick="edit_other(\'' . $row->Patient_ID . '\')" class="btn btn-primary">Edit</button>
                                                    </td>
         </tr>                    
        </tbody>';
        $response['status'] = 200;
        $response['body'] = $data;
        
      }
    } else {
      $response['status'] = 201;
      $response['body'] = "no data found";
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
   if ( $insertid  = $this->User_model->add_profile($data_profile)) {
    
   // echo $insertid;
    $response['insertid'] = $insertid;
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
  $tested_cov = $this->input->post('tested_cov');

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
   "CHESTX_RAY"=>$xray,
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
  $symptoms_seen = $this->input->post('yes');
  if($symptoms_seen!='no'){
 $symptoms_name = $this->input->post('sys');
 $real_symptoms = implode(",", $symptoms_name);
  } else {
     $real_symptoms = "";
  }
  $Patient_ID = $this->input->post('symptoms_pat_id');
 
  $date_of_starting_of_symptoms = $this->input->post('date_start');
  $quarantine_place =$this->input->post('admitted');
  $date_of_sample_collection = $this->input->post('sample_collection');
  $result_of_sample_collection=$this->input->post('res_sample');
  $health_status = $this->input->post('health_status');

  $sys_data=array(
    'symptoms_seen'=>$symptoms_seen,
    'Patient_ID'=>$Patient_ID,
    'symptoms_name' => $real_symptoms,   
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
