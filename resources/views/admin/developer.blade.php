@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Developer List</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Developer List</li>
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
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Developer List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Developer</th>
                    <th>Game List</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                    <td>Developer</td>
                    <td><a href="{{url('admin/developer/game/1')}}"><button class="btn btn-primary">Game List</button></a></td>
                    <td>
                        <a href="{{url('admin/confirm/game/1')}}"><button class="btn btn-success">Confirm</button></a>
                        <a href="{{url('admin/ban/game/1')}}"><button class="btn btn-danger">Reject</button></a>
                    </td>
                  </tr>
                  <tr>
                    <td>Developer</td>
                    <td><a href="{{url('admin/developer/game/1')}}"><button class="btn btn-primary">Game List</button></a></td>
                    <td>
                        <a href="{{url('admin/confirm/game/1')}}"><button class="btn btn-success">Confirm</button></a>
                        <a href="{{url('admin/ban/game/1')}}"><button class="btn btn-danger">Reject</button></a>
                    </td>
                  </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
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
{{-- <script src="{{asset('vendoradm/js/adminlte.min.js')}}"></script> --}}
<script>
    $(function () {
      $("#example1").DataTable({
        "responsive": true,
        "autoWidth": false,
      });

    });
  </script>
@stop
