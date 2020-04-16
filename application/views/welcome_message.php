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
  <link rel="stylesheet" href="<?php echo base_url()?>plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url() . "dist/"; ?>css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
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
                  </button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="quickForm" novalidate="novalidate">
                  <div class="form-group">
                    <label for="Name">Name</label>
                    <input type="text" name="name" class="form-control " id="name" placeholder="Enter Name" 
                           >
                  <span id="name-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Age">Age</label>
                    <input type="number" name="age" class="form-control " id="age" placeholder="Enter Age" >
                  <span id="age-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> Select Gender</label>
                        <select class="custom-select">
                          <option>Male</option>
                          <option>Female</option>
                          <option>Others</option>
                          
                        </select>
                      </div>
                        <div class="form-group">
                    <label for="District">District</label>
                    <input type="text" name="District" class="form-control " id="District" placeholder="Enter District" >
                  <span id="District-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Address">Address</label>
                    <input type="text" name="address" class="form-control " id="address" placeholder="Enter Address" >
                  <span id="address-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Address">Contact Number</label>
                    <input type="number" name="contact_number" class="form-control " id="contact_number" placeholder="Enter Contact Number" >
                  <span id="contact_number-error" class="error invalid-feedback"></span></div>
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
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
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
                  <span id="visited-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Country of Visit">Country of Visit</label>
                    <input type="text" name="country_of_visit" class="form-control " id="country_of_visit" placeholder="Enter Visited Country" >
                  <span id="country_of_visit-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Date of arival from Affected Country">Date of arrival from Affected Country</label>
                    <input type="date" name="date_arrival" class="form-control " id="date_arrival" placeholder="Enter Date Of Arrival Country" >
                  <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="Date of contact with person arrived from abroad">Date of contact with person arrived from abroad</label>
                    <input type="date" name="date_contact" class="form-control " id="date_contact" placeholder="Enter Date Of Contact With Person Arrived From Abroad" >
                  <span id="date_arrival-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="Unknown contact with person traveled from abroad">Unknown contact with person traveled from abroad</label>
                    <input type="text" name="unknown_person" class="form-control " id="unknown_person" placeholder="Unknown Contact With Person Traveled From Abroad" >
                  <span id="unknown_person-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> Contact with covid positive patients</label>
                        <select class="custom-select">
                          <option value="In locality">In family</option>
                          <option value="In locality">In locality</option>                          
                        </select>
                      </div>
                        <div class="form-group">
                    <label for="doctors visited">Doctors visited</label>
                    <input type="text" name="doc_visited" class="form-control " id="doc_visited" placeholder="Enter Doctors Visited" >
                  <span id="doc_visited-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                        <label> DATE tested for SARS COV-2 ( RTPCR)</label>
                        <select class="custom-select">
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
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
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
                    <input type="text" name="x-ray" class="form-control " id="x-ray" placeholder="Enter CHEST X-RAY" >
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
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
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
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="TREATMENT"  name="TREATMENT"novalidate="novalidate">
                  <div class="form-group">
                    <label for="HCQS">HCQS</label>
                    <input type="text" name="HCQS" class="form-control " id="HCQS" 
                           placeholder="EnterHCQS"  >
                  <span id="HCQS-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="AZYTHROMYCINE">AZYTHROMYCINE </label>
                    <input type="text" name="AZYTHROMYCINE" class="form-control " id="AZYTHROMYCINE" placeholder="Enter AZYTHROMYCINE " >
                  <span id="AZYTHROMYCINE-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="VITAMINE C">VITAMINE C </label>
                    <input type="text" name="VITAMINE_C " class="form-control " id="VITAMINE_C" placeholder="Enter VITAMINE C " >
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
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
                 <div class="card-body">
                <div class="row">
                
                <div class="card-body">
                    <form role="form" id="other_details"  name="other_details"novalidate="novalidate">
                  <div class="form-group">
                    <label for="Remarks">Remarks</label>
                    <input type="text" name="remarks" class="form-control " id="remarks" 
                           placeholder="Enter Remarks"  >
                  <span id="remarks-error" class="error invalid-feedback"></span></div>
                  <div class="form-group">
                    <label for="recovered">Recovered </label>
                    <input type="text" name="recovered" class="form-control " id="recovered" placeholder="Enter Recovered " >
                  <span id="recovered-error" class="error invalid-feedback"></span></div>
                 
                  <div class="form-group">
                    <label for="discharge date">DISCHARGE DATE</label>
                    <input type="date" name="discharge_date " class="form-control " id="discharge_date" placeholder="Enter  Discharge Date " >
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
                     <div class="row">
                      <label class="col-md-3">Name</label>  <label class="col-md-6">Bhavana</label>
                      <label class="col-md-3">Age</label>  <label class="col-md-6">95</label>
                      <label class="col-md-3">Gender</label>  <label class="col-md-6">Female</label>
                      <label class="col-md-3">District</label>  <label class="col-md-6">Thane</label>
                      <label class="col-md-3">Address</label>  <label class="col-md-6">ABC-103 haunted house road 101 green vally</label>
                      <label class="col-md-3">Contact Number</label>  <label class="col-md-6">9920626758</label>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel" aria-labelledby="custom-tabs-one-profile-tab">
                     Mauris tincidunt mi at erat gravida, eget tristique urna bibendum. Mauris pharetra purus ut ligula tempor, et vulputate metus facilisis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Maecenas sollicitudin, nisi a luctus interdum, nisl ligula placerat mi, quis posuere purus ligula eu lectus. Donec nunc tellus, elementum sit amet ultricies at, posuere nec nunc. Nunc euismod pellentesque diam. 
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-messages" role="tabpanel" aria-labelledby="custom-tabs-one-messages-tab">
                     Morbi turpis dolor, vulputate vitae felis non, tincidunt congue mauris. Phasellus volutpat augue id mi placerat mollis. Vivamus faucibus eu massa eget condimentum. Fusce nec hendrerit sem, ac tristique nulla. Integer vestibulum orci odio. Cras nec augue ipsum. Suspendisse ut velit condimentum, mattis urna a, malesuada nunc. Curabitur eleifend facilisis velit finibus tristique. Nam vulputate, eros non luctus efficitur, ipsum odio volutpat massa, sit amet sollicitudin est libero sed ipsum. Nulla lacinia, ex vitae gravida fermentum, lectus ipsum gravida arcu, id fermentum metus arcu vel metus. Curabitur eget sem eu risus tincidunt eleifend ac ornare magna. 
                  </div>
                  <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                     Pellentesque vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                  </div>
                    <div class="tab-pane fade" id="custom-tabs-one-Treatment" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                     Treatment vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
                  </div>
                     <div class="tab-pane fade" id="custom-tabs-one-OTHERSDETAILS" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                     OTHERSDETAILS vestibulum commodo nibh nec blandit. Maecenas neque magna, iaculis tempus turpis ac, ornare sodales tellus. Mauris eget blandit dolor. Quisque tincidunt venenatis vulputate. Morbi euismod molestie tristique. Vestibulum consectetur dolor a vestibulum pharetra. Donec interdum placerat urna nec pharetra. Etiam eget dapibus orci, eget aliquet urna. Nunc at consequat diam. Nunc et felis ut nisl commodo dignissim. In hac habitasse platea dictumst. Praesent imperdiet accumsan ex sit amet facilisis. 
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
<script src="<?php echo base_url()  ?>/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url() . "dist/"; ?>js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url() . "dist/"; ?>js/demo.js"></script>
<script src="https://adminlte.io/themes/AdminLTE/dist/js/demo.js"></script>

<script>

function ShowHideDiv(chksymptons) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>
</body>
</html>

