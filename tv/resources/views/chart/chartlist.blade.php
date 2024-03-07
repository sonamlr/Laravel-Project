
@extends('site.main')
@push('title')
    <title>Pendrive Record</title>
@endpush
@section('content')
<div class="main-content">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 mb-3">
                    <label class="col-sm-2 col-form-label">Pendrive</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="id" aria-label="Default select example" name="roll" onchange="GetPendrive(this)">

                            <option value=" ">Select Pendrive</option>
                            @if (isset($pendrives))
                            @foreach ($pendrives as $id => $pendrive)
                              <option value="{{ $id }}" @if($id == $selectedId)  selected @endif>{{ $pendrive }}</option>
                              @endforeach
                            @endif
                        </select>
                        <script>
                            function GetPendrive(selectElement) {
                                var selectedOption = selectElement.options[selectElement.selectedIndex];
                                if (selectedOption.value.trim() !== '') {
                                    var url = '/chart-pendrive/' + selectedOption.value;
                                    window.location.replace(url);
                                }
                            }
                        </script>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title mb-4">Watch Time</h4>
                            <div id="chart"></div>

                             <script> 
                               @if(isset($querydata))
                                    var chartData = @json($record);
                                @endif
                                
                                function formatDuration(seconds = 0) {
                                    const hours = parseInt(seconds / 3600);
                                    const minutes = parseInt((seconds % 3600) / 60);
                                    const vseconds = (seconds % 60);

                                    return hours + ':' + minutes + ':' + vseconds;
                                }
                                var chartSeries = chartData.map(item => formatDuration(item.total_duration));
                                console.log(chartSeries);
                                var chartLabels = chartData.map(item => item.subject);

                                var chartOptions = {
                                    chart: {
                                        type: 'bar'
                                    },
                                    series: [{
                                        name: 'Total duration',
                                        data: chartSeries
                                    }],
                                    xaxis: {
                                        categories: chartLabels,
                                        title: {
                                            text: 'Subjects'
                                        }
                                    },
                                    yaxis: {
                                        title: {
                                            text: 'Time (hours)'
                                        }
                                    }
                                };

                                // Initialize Apexchart
                                var chart = new ApexCharts(document.getElementById('chart'), chartOptions);
                                chart.render();
                            </script>

                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 918px; height: 426px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-body" style="position: relative;">
                            <h4 class="card-title mb-4">Files</h4>
                            <div id="chart-data"></div>

                             <script>
                                @if(isset($querydata))
                                    var chartData = @json($querydata);
                                @endif

                                // Initialize ApexCharts
                                var options = {
                                    chart: {
                                        type: 'bar',
                                    },
                                    series: [{
                                            name: 'Video Files',
                                            data: []
                                        },
                                        {
                                            name: 'Audio Files',
                                            data: []
                                        },
                                        {
                                            name: 'PDF',
                                            data: []
                                        }, {
                                            name: 'Assessment',
                                            data: []
                                        },
                                    ],
                                    xaxis: {
                                        categories: [],
                                    },
                                };

                                // Prepare data for ApexCharts
                                // Initialize data arrays
                                options.series[0].data = [];
                                options.series[1].data = [];
                                options.series[2].data = [];
                                options.series[3].data = [];

                                // Iterate through the values of the object
                                Object.values(chartData).forEach(function(item) {
                                    if (item.subject) {
                                        options.xaxis.categories.push(item.subject);
                                    }

                                    if (typeof item.video_count !== 'undefined') {
                                        options.series[0].data.push(item.video_count);
                                    }

                                    if (typeof item.audio_count !== 'undefined') {
                                        options.series[1].data.push(item.audio_count);
                                    }

                                    if (typeof item.pdf_count !== 'undefined') {
                                        options.series[2].data.push(item.pdf_count);
                                    }
                                    if (typeof item.assessment_count !== 'undefined') {
                                        options.series[3].data.push(item.assessment_count);
                                    }
                                });
                                var chart = new ApexCharts(document.querySelector("#chart-data"), options);
                                chart.render();
                            </script>

                            <div class="resize-triggers">
                                <div class="expand-trigger">
                                    <div style="width: 918px; height: 426px;"></div>
                                </div>
                                <div class="contract-trigger"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection