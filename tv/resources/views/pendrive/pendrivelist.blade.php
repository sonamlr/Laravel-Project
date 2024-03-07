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
                                          <a href="{{ url('/create-pendrive') }}" class="btn btn-primary"><i class="mdi mdi-plus me-1"></i>Add Pendrive</a>
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
                                              <th colspan="2">Action</th>
                                          </tr>
                                      </thead>
                                      <tbody>
                                      <tbody>
                                        @php $i=1; @endphp
                                        @foreach ($pendrives as $pendrive)
                                        @php
                                            $project_id = $pendrive->project_id;
                                            $school_id = $pendrive->school_id;
                                            $project = DB::table('project')->where('id',$project_id)->first();
                                            $school = DB::table('school')->where('id',$school_id)->first();
                                            if ($project) {
                                                $project_name = $project->name;
                                            } 
                                            if ($school){
                                                $school_name = $school->name;
                                            }

                                        @endphp
                                            <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $pendrive->pendrive }}</td>
                                                <td>{{ $school_name }}</td>
                                                <td>{{ $project_name }}</td>
                                                <td>{{ $pendrive->activation_code }}</td>
                                                <td>{{ $pendrive->validity_time }}</td>
                                                <td>{{ $pendrive->remainingdays }}</td>
                                                <td>{{ $pendrive->app_validity }}</td>
                                                <td>{{ $pendrive->default_pass }}</td>
                                                <td>{{ $pendrive->instatllation_person_name }}</td>
                                                <td>{{ $pendrive->support_call }}</td>
                                                <td>{{ $pendrive->app_version }}</td>
                                                <td>{{ $pendrive->tv_information }}</td>
                                                <td>{{ $pendrive->version_android }}</td>
                                                <td>{{ $pendrive->created_at }}</td>
                                                <td>{{ $pendrive->updated }}</td>
                                                <td>
                                                    <a href="{{ route('pendrive.edit', $pendrive->id) }}" class="btn btn-primary">Edit</a>
                                                    <form action="{{ route('pendrive.destroy', $pendrive->id) }}" method="POST" style="display: inline;">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger">Delete</button>
                                                    </form>
                                                </td>
                            
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