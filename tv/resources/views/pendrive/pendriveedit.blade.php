@extends('site.main')
@push('title')
    <title>Pendrive</title>
@endpush
@section('content')
  <div class="main-content">
      <div class="page-content">
          <div class="container-fluid">
             
              <div class="row">
                  <div class="col-12">
                      <div class="card">
                          <div class="card-body">

                              <h4 class="card-title">Edit Pendrive Details</h4>
                              <form method="POST" action="" enctype="multipart/form-data">
                              <input type="hidden" name="id" value="<?php echo $this->uri->segment(3); ?>">
                              <div class="row mb-3">
                                  <label for="pendrive" class="col-sm-2 col-form-label">Pendrive</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="pendrivename" type="text" placeholder="Pendrive" id="pendriveid" value="<?php echo $pendrive; ?>" required>
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="activation" class="col-sm-2 col-form-label">Activation Code</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="activation" type="text" placeholder="Activation Code" id="codeid" value="<?php echo $activation; ?>">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="validity" class="col-sm-2 col-form-label">Validity Time</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="validity" type="text" placeholder="Validity Time" id="validityid" value="<?php echo $validity; ?>">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="remaining" class="col-sm-2 col-form-label">Remaining Days</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="remaining" type="number" placeholder="Remaining Days" id="remailningid" value="<?php echo $remaining; ?>">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="validityapp" class="col-sm-2 col-form-label">App Validity</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="validityapp" type="text" placeholder="App Validity" id="appid" value="<?php echo $validityapp; ?>">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="defaultpass" class="col-sm-2 col-form-label">Default Password</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="defaultpass" placeholder="Default Password" type="password" id="passid" value="<?php echo $defaultpass; ?>">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="installpname" class="col-sm-2 col-form-label">Installation Person Name</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="installpname" placeholder="Installation Person Name" type="text" id="personid" value="<?php echo $installpname; ?>">
                                  </div>
                              </div>
                              <div class="row  mb-3">
                                  <label class="col-sm-2 col-form-label">Project Name</label>
                                  <div class="col-sm-10">
                                      <select class="form-select" name="projectname" id="mySelect" aria-label="Default select example" name="roll" onchange='GetValue(this.value)'>

                                          <option value="">Select Project</option>
                                          <!-- <?php echo $projectnamelist; ?> -->
                                      </select>
                                  </div>
                                  <div id="project">
                                      <!-- <div class="row mb-3" id="pendrive"></div>
                                      <div class="row mb-3" id="client"></div>
                                      <div class="row mb-3" id="technology"></div>
                                      <div class="row mb-3" id="appname"></div>
                                      <div class="row mb-3" id="appversion"></div>
                                      <div class="row mb-3" id="supportmail"></div>
                                      <div class="row mb-3" id="supportphone"></div> -->
                                  </div>
                              </div>
                              <div class="row  mb-3">
                                  <label class="col-sm-2 col-form-label">School Name</label>
                                  <div class="col-sm-10">
                                      <select class="form-select" name="schoolname" aria-label="Default select example" name="roll" onchange='SchoolValue(this.value)'>

                                          <option value="">Select School </option>
                                          <!-- <?php echo $schoollistname; ?> -->
                                      </select>
                                  </div>
                                  <div>
                                      <!-- <div class="row mb-3" id="principalname"></div>
                                      <div class="row mb-3" id="phonenumber"></div>
                                      <div class="row mb-3" id="city"></div>
                                      <div class="row mb-3" id="pincode"></div> -->
                                  </div>
                              </div>

                              <div class="col-12">
                                  <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <button type="button" onclick="history.back()" class="btn btn-danger waves-effect waves-light">Cancle</button>
                              </div>
                              </form>
                              <!-- end row -->
                          </div>
                      </div>
                  </div> <!-- end col -->
              </div>
          </div>
      </div>
      <!-- <script>
          function GetValue(a) {
              var url = '<?php echo base_url('Pendrive/getProject') ?>/' + a;
              $.get(url, function(data) {
                  $("#pendrive").html(data.pendrivename);
                  $("#client").html(data.clientname);
                  $("#technology").html(data.technology);
                  $("#appname").html(data.appname);
                  $("#appversion").html(data.appversion);
                  $("#supportmail").html(data.supportmail);
                  $("#supportphone").html(data.supportphone);
              }, "json");

          }

          function SchoolValue(a) {
              var url = '<?php echo base_url('Pendrive/getSchool') ?>/' + a;

              $.get(url, function(data) {
                  $("#principalname").html(data.principalname);
                  $("#phonenumber").html(data.phonenumber);
                  $("#city").html(data.city);
                  $("#pincode").html(data.pincode);
              }, "json");

          }
      </script> -->
  </div>
  @endsection