@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="card-panel">
            <canvas id="employee"></canvas>
        </div>
    </div>
    <br>
    <script src="{{asset('js/Chart.js')}}"></script>
    
    {{-- Create the chart with javascript using canvas --}}
    <script>
        // Get Canvas element by its id
        employee_chart = document.getElementById('employee').getContext('2d');
        chart = new Chart(employee_chart,{
            type:'line',
            data:{
                labels:[
                    /*
                        this is blade templating.
                        we are getting the date by specifying the submonth
                     */
                    '{{Carbon\Carbon::now()->subMonths(4)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(3)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(2)->toFormattedDateString()}}',
                    '{{Carbon\Carbon::now()->subMonths(1)->toFormattedDateString()}}'
                    ],
                datasets:[{
                    label:'Employment Last Four Months',
                    data:[
                        '{{$emp_count_4}}',
                        '{{$emp_count_3}}',
                        '{{$emp_count_2}}',
                        '{{$emp_count_1}}'
                    ],
                    backgroundColor: [
                        'rgba(178,235,242 ,1)'
                    ],
                    borderColor: [
                        'rgba(0,150,136 ,1)'
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero:true
                        }
                    }]
                }
            }
        });
    </script>
@endsection