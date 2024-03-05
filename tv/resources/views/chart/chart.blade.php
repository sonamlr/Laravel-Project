
@extends('site.main')
@push('title')
    <title>Pendrive Record</title>
@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <form action="">
            <div class="row col-lg-6  mb-3">
                <label for="example-date-input" class="col-sm-2 col-form-label">Date</label>
                <div style="display: flex; align-items: center; gap: 45px;">
                    <div class="col-sm-6">
                        <input class="form-control" type="date" name="mydate" id="example-date-input" required>
                    </div>
                    <div><button type="submit" class="btn btn-outline-secondary waves-effect">Search</button></div>
                </div>
            </div>
            </form>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title mb-4">Files</h4>
                            <div id="chart-container"></div>
                            <!-- <script>
                                // Assuming $data['result'] contains the retrieved data
                                var result = ;

                                var categories = [];
                                var dataCount = [];

                                for (var i = 0; i < result.length; i++) {
                                    categories.push(result[i].category);
                                    dataCount.push(result[i].count);
                                }

                                var options = {
                                    chart: {
                                        type: 'bar'
                                    },
                                    series: [{
                                        name: 'Count',
                                        data: dataCount
                                    }],
                                    xaxis: {
                                        categories: categories
                                    }
                                };

                                var chart = new ApexCharts(document.querySelector("#chart-container"), options);
                                chart.render();
                            </script> -->

                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 918px; height: 426px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div>
        </div>
    </div>
</div>
@endsection