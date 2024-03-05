@extends('site.main')
@push('title')
    <title>Pendrive</title>
@endpush
@section('content')
  <div class="main-content">
      <div class="page-content">
          <div class="container-fluid">

              <div class="row">
                  <div class="col-lg-12">

                      <div class="card">
                          <div class="card-body">
                              <div class="row mb-2">
                                  <div class="col-md-6">
                                      <div class="form-inline float-md-start mb-3">
                                          <div class="search-box me-2">
                                              <div class="position-relative">
                                                  <input type="text" class="form-control border" placeholder="Search...">
                                                  <i class="ri-search-line search-icon"></i>
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-md-6">
                                      <div class="mb-3 float-end">


                                          <span style="float: right; cursor:pointer;">
                                          <a href="{{ url('/pendriveadd') }}" class="btn btn-primary"><i class="mdi mdi-plus me-1"></i>Add Pendrive</a>
                                          </span>


                                      </div>
                                  </div>
                              </div>
                              <!-- <h4 class="card-title">Pendrive Management </h4> -->

                              <div class="table-responsive mb-4">
                                  <table class="table table-hover table-nowrap align-middle mb-0">

                                      <thead class="bg-light">
                                          <tr>
                                              <th>S.N.</th>
                                              <th>Pendrive</th>
                                              <th>School Name</th>
                                              <th>Project Name</th>
                                              <th>Activation Code</th>
                                              <th>Validity Time</th>
                                              <th>Remaining Days</th>
                                              <th>App Validity</th>
                                              <th>Default Password</th>
                                              <th>Installation Person Name</th>
                                              <th>Support Call</th>
                                              <th>App Version</th>
                                              <th>Tv Information</th>
                                              <th>Version Android</th>
                                              <th>Created At</th>
                                              <th>Updated At</th>
                                              <th>Edit</th>
                                              <th>Delete</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      <tbody>
                                        @php $i = 1 @endphp
                                        @foreach ($pendrives as $pendrive)
                                        <tr>
                                            <td>{{ $i++ }}</td>
                                            <td>{{ $pendrive->pendrive }}</td>
                                            <td>{{ $pendrive->activation }}</td>
                                            <td>{{ $pendrive->validity }}</td>
                                            <td>{{ $pendrive->remaining }}</td>
                                            <td>{{ $pendrive->validityapp }}</td>
                                            <td>{{ $pendrive->defaultpass }}</td>
                                            <td>{{ $pendrive->installpname }}</td>
                                        </tr>
                                        
                                    @endforeach
                                      </tbody>
                                  </table>
                              </div>

                          </div>
                      </div>
                  </div>
              </div>


          </div>
      </div>
  </div>
  @endsection