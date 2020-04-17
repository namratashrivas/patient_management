<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>

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
        <div class="wrapper">
            <!-- Navbar -->
            <nav class="mainheader navbar navbar-expand navbar-white navbar-light">
                <h2>COVID -19</h2>


            </nav>
            <!-- /.navbar -->


            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper" style="    margin-left: 0px;    margin-top: 1px;">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <form class="form-inline ml-3">
                                    <div class="input-group input-group-sm">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                                        <div class="input-group-append">
                                            <button class="btn btn-navbar" type="submit">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>

                            </div><!-- /.col -->
                            <!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title">PROFILE</h5>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-minus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="quickForm" name="quickForm" method="POST" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="Name">Name</label>
                                                        <input type="text" name="name" class="form-control " id="name" placeholder="Enter Name" 
                                                               >
                                                      <!--<span id="name-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Age">Age</label>
                                                        <input type="number" name="age" class="form-control " id="age" placeholder="Enter Age" >
                                                      <!--<span id="age-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label> Select Gender</label>
                                                        <select class="custom-select" id="sex" name="sex">
                                                            <option>Select Gender</option>
                                                            <option value="Male">Male</option>
                                                            <option value="Female">Female</option>


                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="District">District</label>
                                                        <input type="text" name="District" class="form-control " id="District" placeholder="Enter District" >
                                                      <!--<span id="District-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Address">Address</label>
                                                        <input type="text" name="address" class="form-control " id="address" placeholder="Enter Address" >
                                    <!--                  <span id="address-error" class="error invalid-feedback"></span>-->
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="Address">Contact Number</label>
                                                        <input type="number" name="contact_number" class="form-control " id="contact_number" placeholder="Enter Contact Number" >
                                                      <!--<span id="contact_number-error" class="error invalid-feedback"></span>-->
                                                    </div>
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
                        </div>
                        <!-- /.row -->

                        <!-- Main row -->
                        <div class="row">
                            <!-- Left col -->
                            <div class="col-md-12">
                                <!-- MAP & BOX PANE -->
                                <div class="card  collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">TRAVEL HISTORY</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="TRAVEL" name="TRAVEL" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="Visited">Visited</label>
                                                        <input type="text" name="visited" class="form-control " id="visited" 
                                                               placeholder="Enter Visited Place"  >
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
                                                        <select class="custom-select" id="positive_patients" name="positive_patients">
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
                                                        <select class="custom-select" id="tested_cov" name="tested_cov">
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
                                <div class="card  collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">TESTING</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="testing"  name="testing"novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="Rapid Testing">Rapid Testing</label>
                                                        <input type="text" name="rapid_testing" class="form-control " id="rapid_testing" 
                                                               placeholder="Enter Rapid Testing"  >
                                                        <span id="rapid_testing-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="CBC">CBC</label>
                                                        <input type="text" name="cbc" class="form-control " id="cbc" placeholder="Enter CBC" >
                                                        <span id="cbc-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="CHEST X-RAY">CHEST X-RAY</label>
                                                        <input type="text" name="xray" class="form-control " id="xray" placeholder="Enter CHEST X-RAY" >
                                                        <span id="x-ray-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="CT- SCAN">CT- SCAN</label>
                                                        <input type="text" name="ct_scan" class="form-control " id="ct_scan" placeholder="Enter CT-SCAN" >
                                                        <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="ECG">ECG</label>
                                                        <input type="text" name="ECG" class="form-control " id="ECG" placeholder="Enter ECG" >
                                                        <span id="ECG-error" class="error invalid-feedback"></span></div>



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
                                <div class="card  collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">SYMPTOMS</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="SYMPTOMS"  name="SYMPTOMS"novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for=" symptoms ">SYMPTOMS </label>
                                                        <div class="custom-control custom-radio col-md-2">
                                                            <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                                                            <label for="customRadio1" class="custom-control-label">yes</label>
                                                        </div>
                                                        <div class="custom-control custom-radio col-md-2">
                                                            <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" >
                                                            <label for="customRadio2" class="custom-control-label">No</label>
                                                        </div>
                                                        <div id="symps" style="display: ">
                                                            <div class="custom-control custom-radio col-md-6">
                                                                <input class="" type="checkbox" id="COUGH" name="COUGH"><label>COUGH</label>

                                                                <input class="" type="checkbox" id="FEVER" name="FEVER"><label>FEVER</label>
                                                                <input class="" type="checkbox" id="LOSS_OF_SMELL" name="LOSS_OF_SMELL"><label>LOSS OF SMELL</label>
                                                                <input class="" type="checkbox" id="DIARRHOES" name="DIARRHOES"><label>DIARRHOES</label>
                                                                <input class="" type="Checkbox" id="LOSS_OF_TASTE" name="LOSS_OF_TASTE"><label>LOSS OF TASTE</label>
                                                            </div>
                                                        </div>  
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
                                <div class="card  collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">TREATMENT GIVEN</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="treatment"  name="treatment" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="HCQS">HCQS</label>
                                                        <input type="text" name="HCQS" class="form-control" id="HCQS"placeholder="EnterHCQS"  >
                                                        <span id="HCQS-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="AZYTHROMYCINE">AZYTHROMYCINE </label>
                                                        <input type="text" name="azythromycine" class="form-control " id="azythromycine" placeholder="Enter AZYTHROMYCINE " >
                                                        <span id="azythromycine-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="VITAMINE C">VITAMINE C </label>
                                                        <input type="text" name="vitamin_c" class="form-control " id="vitamin_c" placeholder="Enter VITAMINE C " >
                                                        <span id="VITAMINE_C-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="RETRO VIRAL">RETRO VIRAL</label>
                                                        <input type="text" name="retro_viral" class="form-control " id="retro_viral" placeholder="Enter RETRO VIRAL" >
                                                        <span id="retro_viral-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="OTHERS">OTHERS</label>
                                                        <input type="text" name="others" class="form-control " id="others" placeholder="Enter OTHERS" >
                                                        <span id="others-error" class="error invalid-feedback"></span></div>
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
                                <div class="card  collapsed-card">
                                    <div class="card-header">
                                        <h3 class="card-title">OTHER DETAIL</h3>

                                        <div class="card-tools">
                                            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                                                <i class="fas fa-plus"></i>
                                            </button>
                                            
                                        </div>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <div class="row">

                                            <div class="card-body">
                                                <form role="form" id="other_details"  name="other_details" novalidate="novalidate">
                                                    <div class="form-group">
                                                        <label for="Remarks">Remarks</label>
                                                        <input type="text" name="remarks" class="form-control " id="remarks" 
                                                               placeholder="Enter Remarks"  >
                                                        <span id="remarks-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="Ward">Ward</label>
                                                        <input type="text" name="ward" class="form-control " id="ward" 
                                                               placeholder="Enter Remarks"  >
                                                        <span id="ward-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="recovered">Recovered </label>
                                                        <input type="text" name="recovered" class="form-control " id="recovered" placeholder="Enter Recovered " >
                                                        <span id="recovered-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="discharge date">DISCHARGE DATE</label>
                                                        <input type="date" name="discharge_date" class="form-control " id="discharge_date" placeholder="Enter  Discharge Date " >
                                                        <span id="VITAMINE_C-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="RETRO VIRAL">PATIENT DEATH</label>
                                                        <input type="text" name="death" class="form-control " id="death" placeholder="Enter PATIENT DEATH" >
                                                        <span id="retro_viral-error" class="error invalid-feedback"></span></div>
                                                    <div class="form-group">
                                                        <label for="Patient image">Patient image</label>
                                                        <input type="file" name="Patient_image" class="form-control " id="Patient_image" placeholder="Enter Patient Image" >
                                                        <span id="Patient_image-error" class="error invalid-feedback"></span></div>

                                                    <div class="form-group">
                                                        <label for="Patient file">Patient file</label>
                                                        <input type="file" name="Patient_file" class="form-control " id="Patient_file" placeholder="Enter Patient File" >
                                                        <span id="Patient_file-error" class="error invalid-feedback"></span></div>
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

                        <div class="row">
                            <div class="col-12 col-sm-12">
                                <div class="card card-primary card-tabs">
                                    <div class="card-header p-0 pt-1">
                                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist" style="font-size: 12px;">
                                            <li class="nav-item">
                                                <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill" href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home" aria-selected="true">Profile</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill" href="#custom-tabs-one-profile" role="tab" aria-controls="custom-tabs-one-profile" aria-selected="false">Travel History</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-messages-tab" data-toggle="pill" href="#custom-tabs-one-messages" role="tab" aria-controls="custom-tabs-one-messages" aria-selected="false">Testing</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Symptoms</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-Treatment" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Treatment </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-OTHERSDETAILS" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Other Details</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content" id="custom-tabs-one-tabContent">
                                            <div class="tab-pane fade active show" id="custom-tabs-one-home" role="tabpanel" aria-labelledby="custom-tabs-one-home-tab">
                                              <div class="table-responsive" >
                                                    <form>
                                                        <div id="travel_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Name</th>
                                                                        <th>Age</th>
                                                                        <th>Gender</th>
                                                                        <th>District</th>
                                                                        <th>Address</th>
                                                                        <th>Contact Number</th>
                                                                        
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                           </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                                                <div class="table-responsive" >
                                                    <form>
                                                        <div id="travel_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Visited</th>
                                                                        <th>Country of Visit</th>
                                                                        <th>Date of arrival from Affected Country</th>
                                                                        <th>Date of contact with person arrived from abroad</th>
                                                                        <th>Unknown contact with person traveled from abroad</th>
                                                                        <th>Contact with covid positive patients </th>
                                                                        <th>Doctors visited</th>
                                                                        <th>DATE tested for SARS COV-2 ( RTPCR) </th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                                                 <div class="table-responsive" >
                                                    <form>
                                                        <div id="testing_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Rapid Testing</th>
                                                                        <th>CBC</th>
                                                                        <th>CHEST X-RAY</th>
                                                                        <th>CT- SCAN</th>
                                                                    <th>ECGs </th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                                <div class="table-responsive" >
                                                    <form>
                                                        <div id="SYMPTOMS_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>SYMPTOMS</th>
                                                                        <th>Date of starting of symptoms</th>
                                                                        <th>Hospital Where Admitted / home quatrentine</th>
                                                                        <th>Date of sample collection (second)</th>
                                                                        <th>Result of sample (second)</th>
                                                                    <th>Current health status</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-Treatment" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                                <div class="table-responsive" >
                                                    <form>
                                                        <div id="treatment_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>HCQS</th>
                                                                        <th>AZYTHROMYCINE</th>
                                                                        <th>VITAMINE C</th>
                                                                        <th>RETRO VIRAL</th>
                                                                    <th>OTHERS</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                            </div>
                                            <div class="tab-pane fade" id="custom-tabs-one-OTHERSDETAILS" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                            <div class="table-responsive" >
                                                    <form>
                                                        <div id="others_details" >
                                                            <table class="table table-bordered">
                                                                <thead>
                                                                    <tr>
                                                                        <th>Remarks</th>
                                                                        <th>Ward</th>
                                                                        <th>Recovered</th>
                                                                        <th>DISCHARGE DATE</th>
                                                                    <th>PATIENT DEATH</th>
                                                                    <th>Patient image</th>
                                                                    <th>Patient file</th>
                                                                    </tr>
                                                                </thead>
                                                            </table>
                                                        </div>
                                                        
                                                    </form>
                                              </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card -->
                                </div>
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
        <!-- ./wrapper -->

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

            function ShowHideDiv(chksymptons) {
                var dvPassport = document.getElementById("dvPassport");
                dvPassport.style.display = chkPassport.checked ? "block" : "none";
            }

            $("#other_details").validate({
                rules: {
                    remarks: {required: true},
                    ward: {required: true},
                    recovered: {required: true},
                    discharge_date: {required: true},
                    death: {required: true},
                    Patient_image: {required: true},
                    Patient_file: {required: true}
                },
                messages: {
                    remarks: {required: "Feild cannot be empty"},
                    ward: {required: "Feild cannot be empty"},
                    recovered: {required: "Feild cannot be empty"},
                    discharge_date: {required: "Feild cannot be empty"},
                    death: {required: "Feild cannot be empty"},
                    Patient_image: {required: "Please Select File"},
                    Patient_file: {required: "Please Select File"}
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
                    HCQS: {required: true},
                    azythromycine: {required: true},
                    vitamin_c: {required: true},
                    retro_viral: {required: true},
                    others: {required: true}
                },
                messages: {
                    HCQSazythromycine: {required: "Feild cannot be empty"},
                    azythromycine: {required: "Feild cannot be empty"},
                    vitamin_c: {required: "Feild cannot be empty"},
                    retro_viral: {required: "Feild cannot be empty"},
                    others: {required: "Feild cannot be empty"}
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
                                //                                              $('#file_uploading').hide();

                                $("#other_details").trigger("reset");
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
                    visited: {required: true},
                    country_of_visit: {required: true},
                    date_arrival: {required: true},
                    date_contact: {required: true},
                    unknown_person: {required: true},
                    positive_patients: {required: true},
                    doc_visited: {required: true},
                    tested_cov: {required: true}
                },
                messages: {
                    visited: {required: "Feild cannot be empty"},
                    country_of_visit: {required: "Feild cannot be empty"},
                    date_arrival: {required: "Feild cannot be empty"},
                    date_contact: {required: "Feild cannot be empty"},
                    unknown_person: {required: "Feild cannot be empty"},
                    positive_patients: {required: "Feild cannot be empty"},
                    doc_visited: {required: "Feild cannot be empty"},
                    tested_cov: {required: "Select Your Test Result"}

                }, errorElement: "span",
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
                                $("#quickForm")[0].reset();
                            } else {

                                toastr.error(success.body); //toster.error
                            }
                        },
                        error: function (error) {
                            alert("Something went to wrong");
                        }

                    });
                }
            });
 //Testing
 $("#testing").validate({
 rules:{rapid_testing:{required:true},
 cbc:{required:true},
 xray:{required:true},
 ct_scan:{required:true},
 ECG:{required:true}
 },
 messages:{
 rapid_testing:{required:"Feild cannot be empty"},
 cbc:{required:"Feild cannot be empty"},
 xray:{required:"Feild cannot be empty"},
 ct_scan:{required:"Feild cannot be empty"},
 ECG:{required:"Feild cannot be empty"}
 
 },errorElement:"span",
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
                                $("#quickForm")[0].reset();
                            } else {

                                toastr.error(success.body); //toster.error
                            }
                        },
                        error: function (error) {
                            alert("Something went to wrong");
                        }

                    });
                }

 });

        </script>
    </body>
</html>

