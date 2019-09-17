@extends('dash.layout-dash')
@section('title','MI LINEA DESENDIENTE')
@section ('content') 
@include('partials.session-status')


@include('partials.back')


<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

        const linea = @json($linea);
       
      google.charts.load('current', {packages:["orgchart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {

     

        var data = new google.visualization.DataTable(linea);
        data.addColumn('string', 'name');
        data.addColumn('string', 'manager');
        // // data.addColumn('string', 'ToolTip');

        // // For each orgchart box, provide the name, manager, and tooltip to show.

        for (let index = 0; index < linea.length; index++) {
            const element = linea;
        
            data.addRows([
          [{v:element, },
           ''],
          [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'},
           'Mike'],
          ['Alice', 'Mike'],
          ['Bob', 'Jim'],
          ['Carol', 'Bob']
        ]);
        

        }
        
         

        // data.addRows([
        //   [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'},
        //    ''],
        //   [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'},
        //    'Mike'],
        //   ['Alice', 'Mike'],
        //   ['Bob', 'Jim'],
        //   ['Carol', 'Bob']
        // ]);

        // Create the chart.
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        // Draw the chart, setting the allowHtml option to true for the tooltips.
        chart.draw(data, {allowHtml:true});
      }
   </script>
    </head>
  <body>
    <div id="chart_div"></div>
  </body>
</html>

@endsection