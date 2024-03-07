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

                              <h4 class="card-title">Add New Pendrive</h4>
                              <form method="post" action="{{ route('pendrive.update', request()->segment(3)) }}" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="id" value="{{ request()->segment(3) }}">
                              <div class="row mb-3">
                                  <label for="pendrive" class="col-sm-2 col-form-label">Pendrive</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="pendrive" type="text" placeholder="Pendrive" value="{{  $pendrives->pendrive }}" id="pendriveid" required>
                                
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="activation" class="col-sm-2 col-form-label">Activation Code</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="activation_code" type="text" value="{{  $pendrives->activation_code }}" placeholder="Activation Code" id="codeid">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="validity" class="col-sm-2 col-form-label">Validity Time</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="validity_time" type="text" value="{{  $pendrives->validity_time }}" placeholder="Validity Time" id="validityid">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="remaining" class="col-sm-2 col-form-label">Remaining Days</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="remainingdays" type="number" value="{{  $pendrives->remainingdays }}" placeholder="Remaining Days" id="remailningid">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="validityapp" class="col-sm-2 col-form-label">App Validity</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="app_validity" type="text" value="{{  $pendrives->app_validity }}" placeholder="App Validity" id="appvid">
                                  </div>
                              </div>
                              <!-- end row -->
                              <div class="row mb-3">
                                  <label for="defaultpass" class="col-sm-2 col-form-label">Default Password</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="default_pass" value="{{  $pendrives->default_pass }}" placeholder="Default Password" type="password" id="passid">
                                  </div>
                              </div>
                              <div class="row mb-3">
                                  <label for="installpname" class="col-sm-2 col-form-label">Installation Person Name</label>
                                  <div class="col-sm-10">
                                      <input class="form-control" name="instatllation_person_name" value="{{  $pendrives->instatllation_person_name }}" placeholder="Installation Person Name" type="text" id="personid">
                                    </div>
                              </div>
                              <div class="row  mb-3">
                                  <label class="col-sm-2 col-form-label">Project Name</label>
                                  <div class="col-sm-10">
                                      <select class="form-select" name="projectname" required id="mySelect" aria-label="Default select example" name="roll" onchange='GetValue(this.value)'>
                                       
                                          <option value="">Select Project</option>
                                          @foreach($projects as $id => $projectName)
                                          <option value="{{ $id }}"  @if($id == $projectId) selected @endif>{{ $projectName }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                              

                              <div class="row  mb-3">
                                  <label class="col-sm-2 col-form-label">School Name</label>
                                  <div class="col-sm-10">
                                      <select class="form-select" name="schoolname" required aria-label="Default select example" name="roll" onchange='SchoolValue(this.value)'>

                                          <option value="">Select School </option>
                                          @foreach($schools as $id => $schoolName)
                                          <option value="{{ $id }}" @if($id == $schoolId) selected @endif>{{ $schoolName }}</option>
                                          @endforeach
                                      </select>
                                  </div>
                              </div>
                             
                                  <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;&nbsp;&nbsp;
                                  <button type="button" onclick="history.back()" class="btn btn-danger waves-effect waves-light">Cancle</button>
                              </div>
                              </form>
                            

                          </div>
                      </div>
                  </div> 
              </div>
          </div>
      </div>
     
  </div>
  @endsection