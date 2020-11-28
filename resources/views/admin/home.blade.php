@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Game List</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Game List</li>
        </ol>
      </div>
    </div>
  </div>
@stop

@section('content')
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            @if ($message = Session::get('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
          @endif
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Game Waiting For Confirmation</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Developer</th>
                    <th>Publisher</th>
                    <th>Game Name</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($requestgame as $curGame)
                  @if ($curGame->status==-1)
                      <tr class="table-danger">
                  @else
                      <tr>
                  @endif
                    <td>{{$curGame->developer->name}}</td>
                    <td>{{$curGame->publisher->name}}</td>
                    <td>{{$curGame->name}}</td>
                    @if ($curGame->status==-1)
                        <td>Banned</td>
                        <td><a href="{{url('admin/reactivate/game/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a></td>
                    @elseif($curGame->status==2)
                        <td>Requesting Activation</td>
                        <td><a href="{{url('admin/reactivate/game/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a></td>
                    @endif
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of Game on Store</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Developer</th>
                    <th>Publisher</th>
                    <th>Game Name</th>
                    <th>Price</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($game as $curGame)
                  @if ($curGame->status==-1)
                      <tr class="table-danger">
                  @else
                      <tr>
                  @endif
                    <td>{{$curGame->developer->name}}</td>
                    <td>{{$curGame->publisher->name}}</td>
                    <td>{{$curGame->name}}</td>
                    @if ($curGame->price==0)
                        <td>Free</td>
                    @else
                        <td>${{$curGame->price}}</td>
                    @endif
                    <td><a href="{{url('admin/ban/game/'.$curGame->id)}}"><button class="btn btn-danger">Ban</button></a></td>
                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@stop

@section('css')
<link rel="stylesheet" href="{{asset('vendor/datatables/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('vendor/datatables-plugins/responsive/css/responsive.bootstrap4.min.css')}}">
@stop

@section('js')
<script src="{{asset('js/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- DataTables -->
<script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('vendor/datatables/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('vendor/datatables-plugins/responsive/js/responsive.bootstrap4.min.js')}}"></script>
<!-- AdminLTE App -->
{{-- <script src="{{asset('vendor/js/adminlte.min.js')}}"></script> --}}
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
      $("#example2").DataTable({
        "responsive": true,
        "autoWidth": false,
      });
    });
  </script>
@stop
