<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>COVID-19 </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url() ?>plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo base_url() . "dist/"; ?>css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>
    <style>
        .error{
            color:red;
        }

    </style>

    <body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
            <?php if (!is_null($this->session->user_session)) { ?>
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="mainheader navbar navbar-expand navbar-white navbar-light">
                <h2>COVID -19
                    <em style="font-size:19px;"><?php echo $this->session->user_session->username; ?></em></h2>
            
            <!-- /.navbar -->
<ul class="navbar-nav ml-auto">
                        <li class="nav-item  pl-3">
                      
                                <a href="<?= base_url('logout') ?>" class="btn btn-secondary" >Logout
                                </a>
                            
                        </li>

                    </ul>
</nav>

    
                               
            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style=" margin-left: 0px;    margin-top: 1px;">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">                                
                                <div class="col-md-12">
                                    <input class="form-control" list="search_patient" id="search" name="search"  style="width: 300px; height: 50px" placeholder="Search Patient By Name" aria-label="Search">
                                    <datalist id="search_patient" name="search_patient"></datalist>
                                </div>                                 
                            </div>
                        </div>
                        <div class="">
                            <table>
                                <tr>
                                    <td>
                                     <button type="button" id="create_button" onclick="show_form()" name="create_button" style="display:block" class="btn btn-warning">Create</button>

                                    </td>
                                    <td>
                                                                        <button type="button" id="view_button" value="" onclick="hide_form(),load_user_details()" name="view_button" style="display:block" class="btn btn-primary">View</button>

                                    </td>
                                    <td>
                                        <form class="" method="post" action="<?php echo base_url(); ?>ExcelController/action">
                                    <button type="submit" name="export" class="btn btn-success"> Export Data</button>
                                 </form> 
                                    </td>
                                    
                                </tr>
                            </table>
                       
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row" id="create_module" name="create_module">
                            <div class="col-md-12">
                                <div class="card" id="profile_collapse_card">
                                    <div class="card-header">
                                        <h5 class="card-title">PROFILE</h5>

                                        <div class="card-tools">
                                            <button  type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="profile_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                
                                        
                                                    
                                                    
                                        <form class="form-horizontal" role="form" id="quickForm" name="quickForm" method="POST" novalidate="novalidate">            
                                                
                                                <table class="table table-sm" id="">
                                                    <tbody><tr>
       
        <td><strong>Name</strong></td>
        <td><input type="text" class="form-control" name="name" id="name" placeholder="Enter Name"></td>
        </tr>
        <tr>
        
        <td><strong>Age</strong></td>
        <td><input type="number" name="age" class="form-control " id="age" placeholder="Enter Age" ></td>
        </tr>
        <tr>
        
        <td><strong>Select Gender</strong></td>
        <td><select class="form-control" id="sex" name="sex">
                                                            <option>Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>
                                                        </select></td>
        </tr>
        <tr>
        
        <td><strong>District</strong></td>
        <td> <input type="text" name="District" class="form-control " id="District" placeholder="Enter District" ></td>
        </tr>
        <tr>
        
        <td><strong>Address</strong></td>
        <td> <input type="text" name="address" class="form-control " id="address" placeholder="Enter Address" ></td>
        </tr>
        <tr>
        
        <td><strong>Contact Number</strong></td>
        <td><input type="number" name="contact_number" class="form-control " id="contact_number" placeholder="Enter Contact Number" ></td>
        </tr>
                             
        </tbody>
                                                </table>
 <div class="card-footer">
                 <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        
                            <!-- Left col -->
                            <div class="col-md-12" >
                                <!-- MAP & BOX PANE -->
                                <div class="card collapsed-card" id="travel_collapse_card">
                                    <div class="card-header">
                                        <h3 class="card-title">TRAVEL HISTORY</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="travel_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="TRAVEL" name="TRAVEL" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label>Select Patient</label>
                                                        <select  id="travel_pat_id" name="travel_pat_id" class=" form-control "></select>
                                                    </div>   
                                                    <div class="form-group">
                                                        <label for="Visited">Visited</label>
                                                        <input type="text" name="visited" class="form-control " id="visited" placeholder="Enter Visited Place"  >
                                                      <!--<span id="visited-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Country of Visit">Country of Visit</label>
                                                        <input type="text" name="country_of_visit" class="form-control " id="country_of_visit" placeholder="Enter Visited Country" >
                                                      <!--<span id="country_of_visit-error" class="error invalid-feedback"></span>-->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Date of arival from Affected Country">Date of arrival from Affected Country</label>
                                                        <input type="date" name="date_arrival" class="form-control " id="date_arrival" placeholder="Enter Date Of Arrival Country" >
                                                      <!--<span id="date_arrival-error" class="error invalid-feedback"></span>-->
                                                    </div>

                                                    <div class="form-group">
                                                        <label for="Date of contact with person arrived from abroad">Date of contact with person arrived from abroad</label>
                                                        <input type="date" name="date_contact" class="form-control " id="date_contact" placeholder="Enter Date Of Contact With Person Arrived From Abroad" >
                                                      <!--<span id="date_arrival-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Unknown contact with person traveled from abroad">Unknown contact with person traveled from abroad</label>
                                                        <input type="text" name="unknown_person" class="form-control " id="unknown_person" placeholder="Unknown Contact With Person Traveled From Abroad" >
                                                      <!--<span id="unknown_person-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Contact with covid positive patients</label>
                                                        <select class="form-control" id="positive_patients" name="positive_patients">
                                                            <option value="In locality">In family</option>
                                                            <option value="In locality">In locality</option>                          
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="doctors visited">Doctors visited</label>
                                                        <input type="text" name="doc_visited" class="form-control " id="doc_visited" placeholder="Enter Doctors Visited" >
                                                      <!--<span id="doc_visited-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label> DATE tested for SARS COV-2 ( RTPCR)</label>
                                                        <select class="form-control" id="tested_cov" name="tested_cov">
                                                            <option value="Positive">Positive</option>
                                                            <option value="Negative">Negative</option>                          
                                                        </select>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->




                                <!-- /.card -->
                            </div> 
                            <div class="col-md-12">
                                <!-- MAP & BOX PANE -->
                                <div class="card  collapsed-card" id="testing_collapse_card">
                                    <div class="card-header">
                                        <h3 class="card-title">TESTING</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="testing_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                <form class="form-horizontal" role="form" id="testing"  name="testing"novalidate="novalidate">
                                                     <table class="table table-sm">
                                                         <tbody>
                                                            <tr>
                                                                <td><strong>Select Patient</strong></td>
                                                                <td><select  id="testing_pat_id" name="testing_pat_id" class=" form-control "></select></td>
                                                            </tr>
                                                            <tr>                                                  
                                                                <td><strong>Rapid Testing</strong></td>
                                                                <td><input type="text" name="rapid_testing" class="form-control " id="rapid_testing" 
                                                               placeholder="Enter Rapid Testing"  >
                                                        <span id="rapid_testing-error" class="error invalid-feedback"></span></td>
                                                            </tr>
                                                            <tr>
                                                                <td><strong>CBC</strong></td>
                                                                <td><input type="text" name="cbc" class="form-control " id="cbc" placeholder="Enter CBC" >
                                                        <span id="cbc-error" class="error invalid-feedback"></span></td>
                                                            </tr>
                                                            <tr>
                                                        
                                                        <td><strong>CHEST X-RAY</strong></td>
                                                        <td><input type="text" name="xray" class="form-control " id="xray" placeholder="Enter CHEST X-RAY" >
                                                        <span id="x-ray-error" class="error invalid-feedback"></span></td>
                                                        </tr>
                                                        <tr>                                                        
                                                        <td><strong>CT- SCAN</strong></td>
                                                        <td><input type="text" name="ct_scan" class="form-control " id="ct_scan" placeholder="Enter CT-SCAN" >
                                                        <span id="date_arrival-error" class="error invalid-feedback"></span></td>
                                                        </tr>
                                                        <tr>                                                        
                                                        <td><strong>ECG</strong></td>
                                                        <td><input type="text" name="ECG" class="form-control " id="ECG" placeholder="Enter ECG" >
                                                        <span id="ECG-error" class="error invalid-feedback"></span></td>
                                                        </tr>                    
                                                        </tbody>
                                                     </table>
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>

                            </div>
                            <div class="col-md-12">
                                <!-- MAP & BOX PANE -->
                                <div class="card  collapsed-card" id="symptoms_collapse_card">
                                    <div class="card-header">
                                        <h3 class="card-title">SYMPTOMS</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i></button>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="symptoms_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="SYMPTOMS"  name="SYMPTOMS"novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label>Select Patient</label>
                                                        
                                                        <select  id="symptoms_pat_id" name="symptoms_pat_id" class=" form-control "></select>
                                                    </div> 
                                                     <div class="form-group" style="margin-bottom:unset !important;">
                                                        <label for=" symptoms ">Symptoms:  
                                                            <input type="radio" id="yes" name="yes" value="yes">&nbsp;<label for="male">Yes</label>&nbsp;&nbsp;<input type="radio" id="no" name="yes" value="no" checked="">&nbsp;<label for="female">No</label>          
                                                    </label>
                                                    </div> 
                                                    <div class="form-group" id="myDIV" style="display:none; ">
                                                        <input class="" type="checkbox" id="COUGH" name="sys[]" value="Cough">&nbsp;<label>Cough</label>&nbsp;&nbsp;
                                                        <input class="" type="checkbox" id="FEVER" name="sys[]" value="Fever">&nbsp;<label>Fever</label>
                                                        &nbsp;&nbsp;<input class="" type="checkbox" id="LOSS_OF_SMELL"name="sys[]" value="Loss of smell">&nbsp;<label>Loss of smell</label>&nbsp;&nbsp;
                                                        <input class="" type="checkbox" id="DIARRHOES" name="sys[]" value="Diarrhoea">&nbsp;<label>Diarrhoea</label>&nbsp;&nbsp;<input class="" type="Checkbox" id="LOSS_OF_TASTE"  name="sys[]" value="Loss of taste">&nbsp;<label>Loss of taste</label>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="date of starting of symptoms ">Date of starting of symptoms </label>
                                                        <input type="date" name="date_start" class="form-control " id="date_start" placeholder="Enter date of starting of symptoms " >
                                                        <span id="date_start-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="Hospital Where Admitted / home quatrentine">Hospital Where Admitted / home quatrentine</label>
                                                        <input type="text" name="admitted" class="form-control " id="admitted" placeholder="Enter Hospital Where Admitted / home quatrentine" >
                                                        <span id="admitted-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="Date of sample collection (second)">Date of sample collection (second)</label>
                                                        <input type="date" name="sample_collection" class="form-control " id="sample_collection" placeholder="Enter Date of sample collection (second)" >
                                                        <span id="sample_collection-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="result of sample (second)">Result of sample (second)</label>
                                                        <input type="text" name="res_sample" class="form-control " id="res_sample" placeholder="Enter Result of sample (second)" >
                                                        <span id="res_sample-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="current health status">Current health status</label>
                                                        <input type="text" name="health_status" class="form-control " id="health_status" placeholder="EnterCurrent health status" >
                                                        <span id="health_status-error" class="error invalid-feedback"></span></div>

                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>

                            </div>


                            <div class="col-md-12">
                                <!-- MAP & BOX PANE -->
                                <div class="card  collapsed-card" id="treatment_collapse_card">
                                    <div class="card-header">
                                        <h3 class="card-title">TREATMENT GIVEN</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="treatment_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                <form class="form-horizontal" role="form" id="treatment"  name="treatment" novalidate="novalidate">
<table class="table table-sm" >
    <tbody>
        <tr>       
        <td><strong>Select Patient</strong></td>
        <td><select  id="treatment_pat_id" name="treatment_pat_id" class=" form-control "></select></td>
        </tr>
        <tr>
        <td><strong>HCQS</strong></td>
        <td><input type="text" name="HCQS" class="form-control" id="HCQS"placeholder="EnterHCQS"  >
                                                        <span id="HCQS-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>AZYTHROMYCINE</strong></td>
        <td><input type="text" name="azythromycine" class="form-control " id="azythromycine" placeholder="Enter AZYTHROMYCINE " >
                                                        <span id="azythromycine-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>VITAMIN C</strong></td>
        <td><input type="text" name="vitamin_c" class="form-control " id="vitamin_c" placeholder="Enter VITAMIN C " >
                                                        <span id="VITAMIN_C-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>RETRO VIRAL</strong></td>
        <td><input type="text" name="retro_viral" class="form-control " id="retro_viral" placeholder="Enter RETRO VIRAL" >
                                                        <span id="retro_viral-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>OTHERS</strong></td>
        <td><input type="text" name="others" class="form-control " id="others" placeholder="Enter OTHERS" >
                                                        <span id="others-error" class="error invalid-feedback"></span></td>
        </tr>                       
        </tbody>
</table>
                                                    
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>

                            </div>


                            <div class="col-md-12">
                                <!-- MAP & BOX PANE -->
                                <div class="card  collapsed-card" id="other_collapse_card">
                                    <div class="card-header">
                                        <h3 class="card-title">OTHER DETAIL</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>

                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body" id="other_collapse">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="other_details" class="form-horizontal" name="other_details" novalidate="novalidate">

<table class="table table-sm" >
    <tbody>
        <tr>
        <td><strong>Select Patient</strong></td>
        <td><select  id="other_pat_id" name="other_pat_id" class=" form-control "></select></td>
        </tr>
        <tr>
        <td><strong>Remarks</strong></td>
        <td><input type="text" name="remarks" class="form-control " id="remarks" placeholder="Enter Remarks"  >
                                                        <span id="remarks-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>Ward</strong></td>
        <td><input type="text" name="ward" class="form-control " id="ward" placeholder="Enter Ward"  >
                                                        <span id="ward-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>Recovered</strong></td>
        <td><input type="text" name="recovered" class="form-control " id="recovered" placeholder="Enter Recovered " >
                                                        <span id="recovered-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>DISCHARGE DATE</strong></td>
        <td><input type="date" name="discharge_date" class="form-control " id="discharge_date" placeholder="Enter  Discharge Date " >
                                                        <span id="VITAMINE_C-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>PATIENT DEATH</strong></td>
        <td><input type="text" name="death" class="form-control " id="death" placeholder="Enter PATIENT DEATH" >
                                                        <span id="retro_viral-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>Patient image</strong></td>
        <td><input type="file" name="Patient_image" class="form-control " id="Patient_image" placeholder="Enter Patient Image" >
                                                        <span id="Patient_image-error" class="error invalid-feedback"></span></td>
        </tr>
        <tr>
        <td><strong>Patient file</strong></td>
        <td><input type="file" name="Patient_file" class="form-control " id="Patient_file" placeholder="Enter Patient File" >
                                                        <span id="Patient_file-error" class="error invalid-feedback"></span></td>
        </tr>                       
        </tbody>
</table>
                                                    
                                                    <div class="card-footer">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>

                                                </form>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- /.card-body -->
                                </div>

                            </div>
                        </div>
                        <!-- /.row -->

                        <div class="row" id="tab_view_div">
                            <div class="form-control"><label> Profile </label></div>
                            <div id="user_details_table" >
                                
                            </div>
                            <div class="form-control"><label> Travel History </label></div>
                            <div id="travel_details" >
                                <table class="table table-sm" id="travel_details_table"></table>
                            </div>
                            <div class="form-control"><label>Testing Report</label></div>
                            <div id="testing_details" >
                                <table class="table table-sm" id="testing_details_table"></table> 
                            </div>
                            <div class="form-control"><label>Symptoms </label></div>
                            <div id="symptoms_details_table" >
                                
                            </div>
                            <div class="form-control"><label>Treatment </label></div>
                            <div id="treatment_details" >
                                <table class="table table-sm" id="treatment_details_table"></table>
                            </div>
                            <div class="form-control"><label>Other Details </label></div>
                            <div id="others_details_table" >
                                 
                            </div>
                        </div>
                    </div><!--/. container-fluid -->
                </section>
                <!-- /.content -->
            </div>

                            <!-- /.content-wrapper -->

            <!-- Control Sidebar -->
            <!--  <aside class="control-sidebar control-sidebar-dark">
                 Control sidebar content goes here 
              </aside>-->
            <!-- /.control-sidebar -->

            <!-- Main Footer -->

        </div>
        <!-- ./wrapper --> <?php } else { ?>
        <div class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <b>COVID</b>-19
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form class="" id="login_form">
        <div class="input-group mb-3">
          <input name="username" id="username" type="email" class="form-control" placeholder="Email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input  name="password" id="password" type="password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>

</div>
                            
<?php                           } ?>
           

        <!-- REQUIRED SCRIPTS -->
        <!-- jQuery -->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>plugins/jquery/jquery.min.js"></script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url() ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url() . "dist/"; ?>js/adminlte.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url() . "dist/"; ?>js/demo.js"></script>
        <script src="<?= base_url() ?>dist/js/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
        <link href="<?= base_url() ?>dist/js/toastr/toastr.css" rel="stylesheet" type="text/css"/>
        <script src="<?= base_url() ?>dist/js/toastr/toastr.min.js" type="text/javascript"></script>
        <script>
            $(document).ready(function () {
                $("#tab_view_div").hide();
fetch_all_patient();

                $('input[type="radio"]').click(function () {
                    if ($(this).attr('id') == 'yes') {
                        $('#myDIV').show();
                    } else {
                        $('#myDIV').hide();
                    }
                });
                
            });
            function show_div(pat_id){
 $('#edit_myDIV'+pat_id).show();
            }
            function hide_div(pat_id){
 $('#edit_myDIV'+pat_id).hide();
            }
function fetch_all_patient() {
        
        $.ajax({
            type: "post",
            url: "<?= base_url('search_patient') ?>",
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    $('#search_patient').empty();
                    $('#search_patient').append(result.body);
                } else {

                }
            },
            error: function (error) {

            }
        });
    }
  function show_travel_collapse(){
   // alert();
     $("#travel_collapse").css("display", "block");
     $("#travel_collapse_card").removeClass('collapsed-card');
     $("#profile_collapse").css("display", "none");
     $("#profile_collapse_card").addClass('collapsed-card');

  }      
  function show_testing_collapse(){
   // alert();
     $("#testing_collapse").css("display", "block");
     $("#testing_collapse_card").removeClass('collapsed-card');
     $("#travel_collapse").css("display", "none");
     $("#travel_collapse_card").addClass('collapsed-card');

  } 
  function show_symptoms_collapse(){
   // alert();
     $("#symptoms_collapse").css("display", "block");
     $("#symptoms_collapse_card").removeClass('collapsed-card');
     $("#testing_collapse").css("display", "none");
     $("#testing_collapse_card").addClass('collapsed-card');

  }
  function show_treatment_collapse(){
   // alert();
     $("#treatment_collapse").css("display", "block");
     $("#treatment_collapse_card").removeClass('collapsed-card');
     $("#symptoms_collapse").css("display", "none");
     $("#symptoms_collapse_card").addClass('collapsed-card');

  }
  function show_other_collapse(){
   // alert();
     $("#other_collapse").css("display", "block");
     $("#other_collapse_card").removeClass('collapsed-card');
     $("#treatment_collapse").css("display", "none");
     $("#treatment_collapse_card").addClass('collapsed-card');

  }   
function load_data(insert_id){
//alert(insert_id);
                
                $.ajax({
                    type: "POST",
                    url: "<?= base_url("get_patient") ?>",
                    data : {insert_id : insert_id},
                    dataType: "json",
                    async: false,
                    cache: false,
                    success: function (result) {
                        var data = result.options;
                        // console.log(data);
                        if (result !== '') {
                            $('#travel_pat_id').html(data);
                            $('#testing_pat_id').html(data);
                            $('#symptoms_pat_id').html(data);
                            $('#treatment_pat_id').html(data);
                            $('#other_pat_id').html(data);
                        } else {
                            $('#travel_pat_id').html("");
                            $('#testing_pat_id').html("");
                            $('#symptoms_pat_id').html("");
                            $('#treatment_pat_id').html("");
                            $('#other_pat_id').html("");

                        }
                    },
                });
}
$("#login_form").validate({
                    rules: {
                        username: {required: true},
                        password: {required: true}
                    },
                    messages: {
                        username: {required: "Enter Username"},
                        password: {required: "Enter Password "}
                    },
                    errorElement: 'span',
                    submitHandler: function (form) {
                        var form_id = document.getElementById('login_form');
                        $.ajax({
                            url: '<?= base_url('login_validation') ?>',
                            type: "POST",
                            data: new FormData(form_id),
                            contentType: false,
                            cache: false,
                            processData: false,
                            success: function (success) {
                                success = JSON.parse(success);
                                if (success.status === 200) {

                                    $(location).attr('href', '<?= base_url() ?>');

                                } else {
                                    toastr.error(success.body);//exampleEmail-error
                                }
                            },
                            error: function (error) {
                                toastr.error(error.body);
                                console.log(error);
                            }
                        });

                    }
                });
            $("#other_details").validate({
                rules: {
                    other_pat_id: {required: true},
                    // remarks: {required: true},
                    // ward: {required: true},
                    // recovered: {required: true},
                    // discharge_date: {required: true},
                    // death: {required: true},
                    // Patient_image: {required: true},
                    // Patient_file: {required: true}
                },
                messages: {
                    other_pat_id: {required: "Feild cannot be empty"},
                    // remarks: {required: "Feild cannot be empty"},
                    // ward: {required: "Feild cannot be empty"},
                    // recovered: {required: "Feild cannot be empty"},
                    // discharge_date: {required: "Feild cannot be empty"},
                    // death: {required: "Feild cannot be empty"},
                    // Patient_image: {required: "Please Select File"},
                    // Patient_file: {required: "Please Select File"}
                },
                errorElement: 'span',
                submitHandler: function (form) {
                    var form_data = document.getElementById('other_details');
                    console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("upload_files") ?>",
                        data: new FormData(form_data),
                        contentType: false,
                        cache: false,
                        processData: false,
                        async: false,
                        cache: false,
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                                //                                              $('#file_uploading').hide();

                                $("#other_details").trigger("reset");
                                window.location.reload();
                            } else {

                                toastr.error(success.body);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");

                        }
                    });
                }
            });
            $("#treatment").validate({
                rules: {
                    treatment_pat_id: {required: true},
                //     HCQS: {required: true},
                //     azythromycine: {required: true},
                //     vitamin_c: {required: true},
                //     retro_viral: {required: true},
                //     others: {required: true}
                },
                messages: {
                    treatment_pat_id: {required: "Feild cannot be empty"},
                //     HCQSazythromycine: {required: "Feild cannot be empty"},
                //     azythromycine: {required: "Feild cannot be empty"},
                //     vitamin_c: {required: "Feild cannot be empty"},
                //     retro_viral: {required: "Feild cannot be empty"},
                //     others: {required: "Feild cannot be empty"}
                },
                errorElement: 'span',
                submitHandler: function (form) {
                    var form_data = document.getElementById('treatment');
                    console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("insert_treatment") ?>",
                        data: new FormData(form_data),
                        contentType: false,
                        cache: false,
                        processData: false,
                        async: false,
                        cache: false,
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                                $("#insert_treatment").trigger("reset");
                                show_other_collapse();
                            } else {

                                toastr.error(success.body);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");

                        }
                    });
                }
            });
            $("#quickForm").validate({
                rules: {
                    name: {required: true},
                    age: {required: true},
                    District: {required: true},
                    address: {required: true},
                    contact_number: {required: true}
                },
                messages: {
                    name: {
                        required: "Feild cannot be empty"
                    },
                    age: {required: "Feild cannot be empty"},
                    District: {required: "Feild cannot be empty"},
                    address: {required: "Feild cannot be empty"},
                    contact_number: {required: "Feild cannot be empty"}
                }, errorElement: "span",
                submitHandler: function (form) {
                    $.ajax({
                        url: '<?= base_url("Welcome/add_profile") ?>',
                        type: "POST",
                        datatype: "JSON",
                        data: $("#quickForm").serialize(),
                        success: function (success) {
                            success = JSON.parse(success);
                            
                            if (success.status === true) {
                                toastr.success(success.body);
                                $("#quickForm").trigger("reset");
                                load_data(success.insertid);
                                show_travel_collapse();
                            } else {
                                toastr.success(success.body);
                            }
                        },
                        error: function (error) {
                            toastr.error("something went to wrong");
                            //                                                        
                        }

                    });
                }

            });


            //Travel history

            $("#TRAVEL").validate({

                rules: {
                    travel_pat_id: {required: true},
                //     visited: {required: true},
                //     country_of_visit: {required: true},
                //     date_arrival: {required: true},
                //     date_contact: {required: true},
                //     unknown_person: {required: true},
                //     positive_patients: {required: true},
                //     doc_visited: {required: true},
                //     tested_cov: {required: true}
                },
                messages: {
                    travel_pat_id: {required: "Feild cannot be empty"},
                //     visited: {required: "Feild cannot be empty"},
                //     country_of_visit: {required: "Feild cannot be empty"},
                //     date_arrival: {required: "Feild cannot be empty"},
                //     date_contact: {required: "Feild cannot be empty"},
                //     unknown_person: {required: "Feild cannot be empty"},
                //     positive_patients: {required: "Feild cannot be empty"},
                //     doc_visited: {required: "Feild cannot be empty"},
                //     tested_cov: {required: "Select Your Test Result"}

                }, 
                errorElement: "span",
                submitHandler: function (form) {
                    $.ajax({
                        url: '<?= base_url("Welcome/TRAVEL") ?>',
                        type: "POST",
                        datatype: "JSON",
                        data: $("#TRAVEL").serialize(),
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {
                                toastr.success(success.body);
                                $("#TRAVEL").trigger("reset");
                                 show_testing_collapse();
                            } else {

                                toastr.error(success.body); //toster.error
                            }
                        },
                        error: function (error) {
                            toastr.error("something went to wrong");
                        }

                    });
                }
            });
            //Testing
            $("#testing").validate({
                rules: {                    
                    testing_pat_id: {required: true},
                    // rapid_testing: {required: true},
                //     cbc: {required: true},
                //     xray: {required: true},
                //     ct_scan: {required: true},
                //     ECG: {required: true}
                },
                messages: {
                    testing_pat_id: {required: "Feild cannot be empty"},
                //     rapid_testing: {required: "Feild cannot be empty"},
                //     cbc: {required: "Feild cannot be empty"},
                //     xray: {required: "Feild cannot be empty"},
                //     ct_scan: {required: "Feild cannot be empty"},
                //     ECG: {required: "Feild cannot be empty"}

                }, 
                errorElement: "span",
                submitHandler: function (form) {
                    $.ajax({
                        url: '<?= base_url("Welcome/Testings") ?>',
                        type: "POST",
                        datatype: "JSON",
                        data: $("#testing").serialize(),
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {
                                toastr.success(success.body);
                                $("#testing").trigger("reset");
                                 show_symptoms_collapse();
                            } else {

                                toastr.error(success.body); //toster.error
                            }
                        },
                        error: function (error) {
                             toastr.error("something went to wrong");
                        }

                    });
                }

            });

 //Sympotoms
            $("#SYMPTOMS").validate({
                rules: {
                    symptoms_pat_id: {required: true},
                //     date_start: {required: true},
                //     admitted: {required: true},
                //     sample_collection: {required: true},
                //     res_sample:{required: true},
                //     health_status: {required: true}
                },
                messages: {
                    symptoms_pat_id: {required: "Feild cannot be empty"},
                //     date_start: {required: "Feild cannot be empty"},
                //     admitted: {required: "Feild cannot be empty"},
                //     sample_collection: {required: "Feild cannot be empty"},
                //     res_sample: {required: "Feild cannot be empty"},
                //     health_status: {required: "Feild cannot be empty"}

                }, 
                errorElement: "span",
                submitHandler: function (form) {
                    $.ajax({
                        url: '<?= base_url("Welcome/add_symptoms") ?>',
                        type: "POST",
                        datatype: "JSON",
                        data: $("#SYMPTOMS").serialize(),
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {
                                toastr.success(success.body);
                                $("#SYMPTOMS").trigger("reset");
                                 show_treatment_collapse();
                            } else {

                                toastr.error(success.body); //toster.error
                            }
                        },
                        error: function (error) {
                             toastr.error("something went to wrong");
                        }

                    });
                }

            });
        
function hide_form(){
     $("#create_module").hide();
     $("#create_button").show();
     $("#tab_view_div").show();

}
function show_form(){
     $("#create_module").show();
     //$("#create_button").hide();
       $("#tab_view_div").hide();
}
        
        function load_travel_details(pat_id){
            $.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_travel_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   
                    $('#travel_details_table').empty();
                    
                    $('#travel_details_table').append(result.body);
                    
                } else {
                    $('#travel_details_table').empty();
                   

                }
            },
            error: function (error) {
            }
        });
        }
        function load_testing_details(pat_id){
$.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_testing_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   
                    $('#testing_details_table').empty();
                    
                    $('#testing_details_table').append(result.body);
                    
                } else {
                    $('#testing_details_table').empty();
                   

                }
            },
            error: function (error) {
            }
        });
        }
        function load_symptoms_details(pat_id){
            $.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_symptoms_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   
                    $('#symptoms_details_table').empty();
                    
                    $('#symptoms_details_table').append(result.body);
                    
                } else {
                    $('#symptoms_details_table').empty();
                   

                }
            },
            error: function (error) {
            }
        });
        }
        function load_treatment_details(pat_id){
            $.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_treatment_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   
                    $('#treatment_details_table').empty();
                    
                    $('#treatment_details_table').append(result.body);
                    
                } else {
                    $('#treatment_details_table').empty();
                   

                }
            },
            error: function (error) {
            }
        });
        }
        function load_other_details(pat_id){
            $.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_other_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   
                    $('#others_details_table').empty();
                    
                    $('#others_details_table').append(result.body);
                    
                } else {
                    $('#others_details_table').empty();
                   

                }
            },
            error: function (error) {
            }
        });
        }
        
        function load_user_details()
    {
         var pat_name = document.getElementById('search').value;
     var pat_id = "";
        $.ajax({
            type: "post",
            url: "<?php echo base_url('get_all_user_details') ?>",
            data: {pat_name: pat_name},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                   pat_id = result.pat_id;
                    $('#user_details_table').empty();
                    
                    $('#user_details_table').append(result.body);
                    load_travel_details(pat_id);
load_testing_details(pat_id);
load_symptoms_details(pat_id);
load_treatment_details(pat_id);
load_other_details(pat_id);
                } else {
                    $('#user_details_table').empty();
                   
load_travel_details(pat_id);
load_testing_details(pat_id);
load_symptoms_details(pat_id);
load_treatment_details(pat_id);
load_other_details(pat_id);
                }
            },
            error: function (error) {
            }
        });
    

    }

    function edit_user(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_user_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#user_'+pat_id).html(data); 
                 
                } else {
                    $('#user_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
    function edit_travel(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_travel_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#travel_'+pat_id).html(data); 
                 
                } else {
                    $('#travel_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
    function edit_testing(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_testing_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#testing_'+pat_id).html(data); 
                 
                } else {
                    $('#testing_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
    function edit_symptoms(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_symptoms_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#symptoms_'+pat_id).html(data); 
                 
                } else {
                    $('#symptoms_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
     function edit_treatment(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_treatment_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#treatment_'+pat_id).html(data); 
                 
                } else {
                    $('#treatment_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
    function edit_other(pat_id){
        //alert(pat_id);
 $.ajax({
            type: "post",
            url: "<?php echo base_url('change_other_details') ?>",
            data: {pat_id: pat_id},
            dataType: "json",
            success: function (result) {
                if (result.status == 200) {
                    var data = result.body;
                    $('#other_'+pat_id).html(data); 
                 
                } else {
                    $('#other_'+pat_id).html('');

                }
            },
            error: function (error) {
            }
        });
    
    }
    function Save_user(pat_id){
    var pat_name = document.getElementById('search').value;
   // alert(pat_name);
    var hidden_id = document.getElementById('hidden_id'+pat_id).value;
    var edit_name = document.getElementById('edit_name'+pat_id).value;
    var edit_age = document.getElementById('edit_age'+pat_id).value;
    var edit_sex = document.getElementById('edit_sex'+pat_id).value;
    var edit_District = document.getElementById('edit_District'+pat_id).value;
    var edit_address = document.getElementById('edit_address'+pat_id).value;
    var edit_contact_number = document.getElementById('edit_contact_number'+pat_id).value;
    //alert (hidden_id);
                    //console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("update_user_details") ?>",
                        data: {hidden_id: hidden_id,edit_name:edit_name, edit_age:edit_age, edit_sex:edit_sex, edit_District:edit_District, edit_address:edit_address, edit_contact_number:edit_contact_number},
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                               load_user_details(pat_name);
                            } else {

                                toastr.error(success.body);
                                load_user_details(pat_name);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");
load_user_details(pat_name);
                        }
                    });
    
    }
    function Save_travel(pat_id){
    var pat_name = document.getElementById('search').value;
   // alert(pat_name);
    var hidden_trav_id = document.getElementById('hidden_trav_id'+pat_id).value;
    var edit_visited = document.getElementById('edit_visited'+pat_id).value;
    var edit_country_of_visit = document.getElementById('edit_country_of_visit'+pat_id).value;
    var edit_date_arrival = document.getElementById('edit_date_arrival'+pat_id).value;
    var edit_date_contact = document.getElementById('edit_date_contact'+pat_id).value;
    var edit_unknown_person = document.getElementById('edit_unknown_person'+pat_id).value;
    var edit_positive_patients = document.getElementById('edit_positive_patients'+pat_id).value;
    var edit_doc_visited = document.getElementById('edit_doc_visited'+pat_id).value;
    var edit_tested_cov = document.getElementById('edit_tested_cov'+pat_id).value;
    //alert (hidden_id);
                    //console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("update_travel_details") ?>",
                        data: {hidden_trav_id: hidden_trav_id,edit_visited:edit_visited, edit_country_of_visit:edit_country_of_visit, edit_date_arrival:edit_date_arrival, edit_date_contact:edit_date_contact, edit_unknown_person:edit_unknown_person, edit_positive_patients:edit_positive_patients,edit_doc_visited:edit_doc_visited,edit_tested_cov:edit_tested_cov},
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                               load_user_details(pat_name);
                            } else {

                                toastr.error(success.body);
                                load_user_details(pat_name);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");
load_user_details(pat_name);
                        }
                    });
    
    }
    function Save_testing(pat_id){
    var pat_name = document.getElementById('search').value;
   // alert(pat_name);
 
    var hidden_testing_id = document.getElementById('hidden_testing_id'+pat_id).value;
    var edit_rapid_testing = document.getElementById('edit_rapid_testing'+pat_id).value;
    var edit_cbc = document.getElementById('edit_cbc'+pat_id).value;
    var edit_xray = document.getElementById('edit_xray'+pat_id).value;
    var edit_ct_scan = document.getElementById('edit_ct_scan'+pat_id).value;
    var edit_ECG = document.getElementById('edit_ECG'+pat_id).value;
    //alert (hidden_id);
                    //console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("update_testing_details") ?>",
                        data: {hidden_testing_id: hidden_testing_id,edit_rapid_testing:edit_rapid_testing, edit_cbc:edit_cbc, edit_xray:edit_xray, edit_ct_scan:edit_ct_scan, edit_ECG:edit_ECG},
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                               load_user_details(pat_name);
                            } else {

                                toastr.error(success.body);
                                load_user_details(pat_name);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");
load_user_details(pat_name);
                        }
                    });
    
    }
    
    function Save_symptoms(pat_id){
        var pat_name = document.getElementById('search').value;
                
        $.ajax({
            url: '<?= base_url("update_symptoms_details") ?>',
            type: "POST",
            datatype: "JSON",
            data: $("#edit_symptoms_form"+pat_id).serialize() + "&id=" + pat_id,
            success: function (success) {
                success = JSON.parse(success);
                if (success.status === true) {

                    toastr.success(success.body);
                   load_user_details(pat_name);
                } else {

                    toastr.error(success.body);
                    load_user_details(pat_name);
                }
            },
            error: function (error) {
                toastr.error("something went to wrong");
                load_user_details(pat_name);
            }

                    });
    }

    
    function Save_treatment(pat_id){
    var pat_name = document.getElementById('search').value;
   // alert(pat_name);
    
    var hidden_testing_id = document.getElementById('hidden_testing_id'+pat_id).value;
    var edit_HCQS = document.getElementById('edit_HCQS'+pat_id).value;
    var edit_azythromycine = document.getElementById('edit_azythromycine'+pat_id).value;
    var edit_vitamin_c = document.getElementById('edit_vitamin_c'+pat_id).value;
    var edit_retro_viral = document.getElementById('edit_retro_viral'+pat_id).value;
    var edit_others = document.getElementById('edit_others'+pat_id).value;
    //alert (hidden_id);
                    //console.log(form_data);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("update_treatment_details") ?>",
                        data: {hidden_testing_id: hidden_testing_id,edit_HCQS:edit_HCQS, edit_azythromycine:edit_azythromycine, edit_vitamin_c:edit_vitamin_c, edit_retro_viral:edit_retro_viral, edit_others:edit_others},
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                               load_user_details(pat_name);
                            } else {

                                toastr.error(success.body);
                                load_user_details(pat_name);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");
load_user_details(pat_name);
                        }
                    });
    
    }

    function Save_others(pat_id){

    var pat_name = document.getElementById('search').value;
        var form_data = document.getElementById('edit_other_form'+pat_id);
                    var fd = new FormData(form_data);
                    fd.append("id", pat_id);
                    $.ajax({
                        type: "POST",
                        url: "<?= base_url("update_other_details") ?>",
                        data: fd,
                        contentType: false,
                        cache: false,
                        processData: false,
                        async: false,
                        cache: false,
                        success: function (success) {
                            success = JSON.parse(success);
                            if (success.status === true) {

                                toastr.success(success.body);
                               load_user_details(pat_name);
                            } else {

                               toastr.success(success.body);
                               load_user_details(pat_name);
                            }
                        },
                        error: function (error) {

                            toastr.error("something went to wrong");
load_user_details(pat_name);

                        }
                    });
                }
                       
        </script>
    </body>
</html>

