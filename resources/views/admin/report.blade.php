@extends('adminlte::page')

@section('title', 'Report')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Report</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Report</li>
        </ol>
      </div>
    </div>
  </div>
@stop

@section('content')
<div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Game Selling</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
      </div>
    </div>

    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th>Transaction Date</th>
              <th>Game Price</th>
              <th>Game Name</th>
              <th>User</th>
            </tr>
            </thead>
            <tbody>
                @foreach ($trans as $trs)
                    <tr>
                        <td>{{$trs->tanggal_trans}}</td>
                        <td>{{$trs->game_price}}</td>
                        <td>{{$trs->games->name}}</td>
                        <td>{{$trs->users->name}}</td>
                        {{-- @if ($curGame->status==-1)
                            <td>Banned</td>
                            <td><a href="{{url('admin/reactivate/game/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a></td>
                        @elseif($curGame->status==2)
                            <td>Requesting Activation</td>
                            <td><a href="{{url('admin/reactivate/game/'.$curGame->id)}}"><button class="btn btn-success">Activate</button></a></td>
                        @endif --}}
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Top Sale</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
      </div>
    </div>

    <div class="card-body">
        <div id="chartContainer" style="height: 370px; width: 100%;"></div>
    </div>
    <!-- /.card-body -->
  </div>
  <div class="card card-danger">
    <div class="card-header">
      <h3 class="card-title">Top Sale</h3>

      <div class="card-tools">
        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i>
        </button>
        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-times"></i></button>
      </div>
    </div>

    <div class="card-body">
        <div id="chartContainer2" style="height: 370px; width: 100%;"></div>
    </div>
    <!-- /.card-body -->
  </div>
@stop

<?php
    $dataPoints = [];
    foreach ($game as $value) {
        $i = 0;
        foreach ($trans as $trs) {
            if($trs->games->name == $value->name){
                $i = $i+1;
            }
        }
        if($i > 0){
            array_push($dataPoints,array("label"=> $value->name, "y"=> $i));
        }
    }
    $dataPoints2 = [];
    foreach ($user as $value) {
        $i = 0;
        foreach ($trans as $trs) {
            if($trs->users->id == $value->id){
                $i = $i+1;
            }
        }
        if($i > 0){
            array_push($dataPoints2,array("label"=> $value->name, "y"=> $i));
        }
    }
?>

<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<script>
    window.onload = function () {
        var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Game Sell"
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart.render();

        var chart2 = new CanvasJS.Chart("chartContainer2", {
            animationEnabled: true,
            exportEnabled: true,
            title:{
                text: "Top Buyer"
            },
            subtitles: [{
                text: ""
            }],
            data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($dataPoints2, JSON_NUMERIC_CHECK); ?>
            }]
        });
        chart2.render();
    }
</script>
