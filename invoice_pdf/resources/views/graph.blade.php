<!DOCTYPE html>
<html>
<head>
    {{-- make sure you are using http, and not https --}}
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    {{-- <style>
        .pie-chart {
            width: 600px;
            height: 400px;
            margin: 0 auto;
        }
    </style> --}}

    {{-- <script type="text/javascript" src="https://www.google.com/jsapi"></script>

    <script type="text/javascript">
        function init() {
            google.load("visualization", "1.1", {
                packages: ["corechart"],
                callback: 'drawChart'
            });
        }

        function drawChart() {
            var data = new google.visualization.DataTable();
            data.addColumn('string', 'Pizza');
            data.addColumn('number', 'Populartiy');
            data.addRows([
                ['Pepperoni', 33],
                ['Hawaiian', 26],
                ['Mushroom', 22],
                ['Sausage', 10], // Below limit.
                ['Anchovies', 9] // Below limit.
            ]);

            var options = {
                title: 'Popularity of Types of Pizza',
                sliceVisibilityThreshold: .2
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script> --}}
</head>
{{-- <body onload="init()"> --}}

<body>
    <img class="m-5" src="{{asset('storage\futura_energia_logo.jpeg')}}" alt="">
    <h1>NUMERO FATTURA : {{$NUMERO_FATTURA}}</h1>
      <thead>
        
    </thead> 
    @foreach ($invoice as $item)   
        <h1 class="m-5">{{$item->TIPO_FATTURA}}</h1>
    
   
        {{$item->RESELLER}}
    
        {{$item->INDIRIZZO_FATTURAZIONE}}</td>   
    @endforeach

</body>
</html>