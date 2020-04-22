<?php
class ExcelController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model("File_modal");
     
    }

    public function index() {

  $this->load->view("Exceldwnld");
    }
  
  public function generateXls() {
    // create file name
        $fileName = 'data-'.time().'.xlsx';  
    // load excel library
        $this->load->library('excel');
        //$listInfo = $this->export->exportList();
        $objPHPExcel = new PHPExcel();
        $objPHPExcel->setActiveSheetIndex(0);
        // set Header
        $objPHPExcel->getActiveSheet()->SetCellValue('A1', 'First Name');
        $objPHPExcel->getActiveSheet()->SetCellValue('B1', 'Last Name');
  /*       $objPHPExcel->getActiveSheet()->SetCellValue('C1', 'Email');
        $objPHPExcel->getActiveSheet()->SetCellValue('D1', 'DOB');
        $objPHPExcel->getActiveSheet()->SetCellValue('E1', 'Contact_No');    */    
        // set Row
        $rowCount = 2;
    
    
     $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, 'pooja');
         $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, 'LOte');
        /* foreach ($listInfo as $list) {
            $objPHPExcel->getActiveSheet()->SetCellValue('A' . $rowCount, $list->first_name);
            $objPHPExcel->getActiveSheet()->SetCellValue('B' . $rowCount, $list->last_name);
            $objPHPExcel->getActiveSheet()->SetCellValue('C' . $rowCount, $list->email);
            $objPHPExcel->getActiveSheet()->SetCellValue('D' . $rowCount, $list->dob);
            $objPHPExcel->getActiveSheet()->SetCellValue('E' . $rowCount, $list->contact_no);
            $rowCount++;
        } */
        $filename = "tutsmake". date("Y-m-d-H-i-s").".csv";
    header('Content-Type: application/vnd.ms-excel'); 
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0'); 
    $objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'CSV');  
    $objWriter->save('php://output'); 

    }
  
  function action()
 {
  //$this->load->model("excel_export_model");
  $this->load->library("excel");
  $object = new PHPExcel();

  $object->setActiveSheetIndex(0);

  $table_columns = array("Name", "Age", "Sex", "District", "Address","Contact_No");

  $column = 0;
$query=$this->db->query("select * from user_profile")->result();
$query1=$this->db->query("select REMARK,WARD,RECOVERED,DISCHARGE_DATE,PATIENT_DEATH,Patient_image,Patents_files,
(select Name from user_profile where user_profile.Patient_ID=other_detail.Patient_ID) as Name from other_detail")->result();
$query2=$this->db->query("select Visited, Country_of_Visit, Date_of_arrival, Date_of_contact, unknown_contact, place_of_contact, doctors_visited, Result,
(select Name from user_profile where user_profile.Patient_ID=user_travel_history.Patient_ID) as Name from user_travel_history")->result();
$query3=$this->db->query("select symptoms_seen,symptoms_name,date_of_starting_of_symptoms,quarantine_place,
 date_of_sample_collection,result_of_sample_collection,health_status,
(select Name from user_profile where user_profile.Patient_ID=user_symptoms_detail.Patient_ID) as Name from user_symptoms_detail")->result();
$query4=$this->db->query("select Rapid_Testing,CBC,CHESTX_RAY,CTSCAN,ECG,
(select Name from user_profile where user_profile.Patient_ID=user_testing_report.Patient_ID) as Name from user_testing_report")->result();
$query5=$this->db->query("select HCQS,azythromycine,vitamin_c,retro_viral,others,
(select Name from user_profile where user_profile.Patient_ID=user_treatments_report.Patient_ID) as Name from user_treatments_report")->result();
//$excel_row = 2;
$first=4;
 $rowex1=1;
if(count($query)>0)
{
  
  foreach($query as $row)
  {
      $excel_row = 1;
   $object->getActiveSheet()->setCellValueByColumnAndRow(0, $first, $rowex1);

   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++), ($first),$row->Age);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++), ($first),$row->Sex);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++), ($first),$row->District);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++), ($first),$row->Address);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++), ($first),$row->Contact_Number);
   
   $first++;
   $rowex1++;
   // $excel_row++;
  }
  foreach($query2 as $row2)
  {


   
   // $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Visited);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->Country_of_Visit);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->Date_of_arrival);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->Date_of_contact);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->unknown_contact);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->place_of_contact);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), '');
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->doctors_visited);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row2++),($second), $row2->Result);
    $first++;
   
  } 
  foreach($query4 as $row)
  {
    $first=4;
 
    $excel_row = 16;
   // $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Rapid_Testing);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->CBC);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->CHESTX_RAY);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->CTSCAN);
   $object->getActiveSheet()->setCellValueByColumnAndRow( ($excel_row++),($first),$row->ECG);
    $first++;
   
  }
   foreach($query3 as $row)
  {
    $first=4;
 
    $excel_row = 21;
   //$object->getActiveSheet()->setCellValueByColumnAndRow($excel_row,$rowex++, $row->Name);
   //$object->getActiveSheet()->setCellValueByColumnAndRow($excel_row,$rowex++, $row->symptoms_seen);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->symptoms_name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(28,($first),$row->date_of_starting_of_symptoms);
   $object->getActiveSheet()->setCellValueByColumnAndRow(29,($first),$row->quarantine_place);
   $object->getActiveSheet()->setCellValueByColumnAndRow(30,($first), $row->date_of_sample_collection);
   $object->getActiveSheet()->setCellValueByColumnAndRow(31,($first), $row->result_of_sample_collection);
   $object->getActiveSheet()->setCellValueByColumnAndRow(32,($first), $row->health_status);
  $first++;
   
  }
  foreach($query5 as $row)
  {
     $first=4;
 
    $excel_row = 33;
   // $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->HCQS);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->azythromycine);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first),$row->vitamin_c);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->retro_viral);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->others);
   
  }   
   foreach($query1 as $row)
  {
    $first=4;
    $excel_row = 38;
   //$object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Name);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first),$row->REMARK);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->WARD);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first),$row->RECOVERED);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->DISCHARGE_DATE);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->PATIENT_DEATH);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first), $row->Patient_image);
   $object->getActiveSheet()->setCellValueByColumnAndRow(($excel_row++),($first),$row->Patents_files);
   $first++;
  }
  $object->getActiveSheet()->setCellValue('A1', 'SNo.');
   $object->getActiveSheet()->setCellValue('B1', "Name");
   $object->getActiveSheet()->setCellValue('C1', "Age");
   $object->getActiveSheet()->setCellValue('D1', "Sex");
   $object->getActiveSheet()->setCellValue('E1', "District");
   $object->getActiveSheet()->setCellValue('F1', "Address");
   $object->getActiveSheet()->setCellValue('G1', "Contact Number");
   $object->getActiveSheet()->setCellValue('H1', "Country of Visit");
   $object->getActiveSheet()->setCellValue('I1', "Date of arival from Affected Country");
   $object->getActiveSheet()->setCellValue('J1', "Date of contact with person arrived from abroad");
   $object->getActiveSheet()->setCellValue('K1', "Unknown contact with person travelled from abroad");
   $object->setActiveSheetIndex(0)->mergeCells('L1:M1');
$object->getActiveSheet()->setCellValue('L1', 'Contact with covid positive patients');
$object->getActiveSheet()->setCellValue('N1', 'Doctors Visited');
$object->setActiveSheetIndex(0)->mergeCells('O1:P1');
$object->getActiveSheet()->setCellValue('O1', 'DATE tested for SARS COV-2 ( RTPCR)');
$object->getActiveSheet()->setCellValue('Q1', 'Rapid Testing');
$object->getActiveSheet()->setCellValue('R1', 'CBC');
$object->getActiveSheet()->setCellValue('S1', 'CHEST X-RAY');
$object->getActiveSheet()->setCellValue('T1', 'CT- SCAN');
$object->getActiveSheet()->setCellValue('U1', 'ECG');
$object->setActiveSheetIndex(0)->mergeCells('V1:AB1');
$object->getActiveSheet()->setCellValue('V1', 'Symtoms');
$object->getActiveSheet()->setCellValue('AC1', 'Date of starting of symptoms ');
$object->getActiveSheet()->setCellValue('AD1', 'Hospital Where Admitted / home quatrentine');
$object->getActiveSheet()->setCellValue('AE1', 'Date of sample colletion (second)');
$object->getActiveSheet()->setCellValue('AF1', 'Result of sample (second)');
$object->getActiveSheet()->setCellValue('AG1', 'Current health status');
$object->setActiveSheetIndex(0)->mergeCells('AH1:AL1');
$object->getActiveSheet()->setCellValue('AH1', 'TREATMENT GIVEN');
$object->getActiveSheet()->setCellValue('AM1', 'REMARK');
$object->getActiveSheet()->setCellValue('AN1', 'WARD');
$object->getActiveSheet()->setCellValue('AO1', 'RECOVERED');
$object->getActiveSheet()->setCellValue('AP1', 'DISCHARGE DATE');
$object->getActiveSheet()->setCellValue('AQ1', 'PATIENT DEATH');
$object->getActiveSheet()->setCellValue('L2', 'In Family');
$object->getActiveSheet()->setCellValue('M2', 'In Locality');
$object->getActiveSheet()->setCellValue('O2', 'Positive');
$object->getActiveSheet()->setCellValue('P2', 'Negative');
$object->setActiveSheetIndex(0)->mergeCells('V2:AB2');
$object->getActiveSheet()->setCellValue('V2', 'Yes');
$object->getActiveSheet()->setCellValue('AB2', 'No');
$object->getActiveSheet()->setCellValue('AH2', 'HCQS');
$object->getActiveSheet()->setCellValue('AI2', 'AZYTHROMYCINE');
$object->getActiveSheet()->setCellValue('AJ2', 'VITAMINE C ');
$object->getActiveSheet()->setCellValue('AK2', 'RETRO VIRAL');   
$object->getActiveSheet()->setCellValue('AL2', 'OTHERS');   
$object->getActiveSheet()->setCellValue('V3', 'COUGH');   
$object->getActiveSheet()->setCellValue('W3', 'FEVER');   
$object->getActiveSheet()->setCellValue('X3', 'LOSS OF SMELL');   
$object->getActiveSheet()->setCellValue('Y3', 'LOSS OF TASTE');   
$object->getActiveSheet()->setCellValue('Z3', 'DIARRHOES');   
$object->getActiveSheet()->setCellValue('AA3', 'NAUSEA');   
}
 

  $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');
  header('Content-Type: application/vnd.ms-excel');
  header('Content-Disposition: attachment;filename="Employee Data.xls"');
  $object_writer->save('php://output');
 }

    
}