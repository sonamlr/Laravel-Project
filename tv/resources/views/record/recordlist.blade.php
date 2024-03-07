
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
                                       @if (isset($pendrives))
                                       @foreach ($pendrives as $id => $pendrive)
                                         <option value="{{ $id }}" @if($id == $selectedId)  selected @endif>{{ $pendrive }}</option>
                                         @endforeach
                                       @endif
                                    </select>
                                </div>
                                <script>
                                    function GetPendrive(a) {
                                        var url = '/pendriverecord/' + a;
                                        window.location.replace(url);
                                    }
                                </script>
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
                                        @php
                                            $i=1;
                                        @endphp
                                       @if (isset($matchingRecords))
                                           @foreach ($matchingRecords as $record)
                                               <tr>
                                                <td>{{ $i++ }}</td>
                                                <td>{{ $record->pendrive_name }}</td>
                                                <td>{{ $record->name }}</td>
                                                <td>{{ $record->class }}</td>
                                                <td>{{ $record->date_of_access }}</td>
                                                <td>{{ $record->time_of_access }}</td>
                                                <td>{{ $record->category }}</td>
                                                <td>{{ $record->subject }}</td>
                                                <td>{{ $record->resource_name }}</td>
                                                <td>{{ $record->duration_of_use }}</td>
                                                <td>{{ $record->created_at }}</td>
                                                <td>{{ $record->updated_at }}</td>
                                               </tr>
                                           @endforeach
                                       @endif
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