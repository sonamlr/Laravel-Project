
@extends('site.main')
@push('title')
    <title>Pendrive Record</title>
@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Include ApexCharts library -->


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

                            </div>
                            <!-- <h4 class="card-title">Record Management</h4> -->
                           
                            <div class="row col-lg-6 mb-3">
                                <label class="col-sm-2 col-form-label">Pendrive Name</label>
                                <div class="col-sm-10">
                                    <select class="form-select" name="id" aria-label="Default select example" name="roll" onchange='GetPendrive(this.value)'>

                                        <option value="">select option</option>
                                        @foreach ($pendriveNames as $id => $name)
                                            <option value="{{ $id }}">{{ $name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                {{-- <script>
                                    function GetPendrive(a) {
                                        var url = '<?php echo base_url('Pendrive/recordData/'); ?>' + a;
                                        window.location.replace(url);
                                    }
                                </script> --}}
                            </div>
                            <div class="table-responsive mb-4">
                                  <table class="table table-hover table-nowrap align-middle mb-0">

                                      <thead class="bg-light">
                                        <tr>
                                            <th>S.N.</th>
                                            <th>Pendrive Name</th>
                                            <th>Name</th>
                                            <th>Class </th>
                                            <th>Date of Access </th>
                                            <th>Time of Access</th>
                                            <th>Category </th>
                                            <th>Subject </th>
                                            <!-- <th>Resource</th> -->
                                            <th>Resource Name</th>
                                            <th>Duration of Use</th>
                                            <th>Created</th>
                                            <th>Updated</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                       
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