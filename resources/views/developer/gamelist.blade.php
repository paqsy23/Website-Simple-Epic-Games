@extends('developer.layout')

@section('header')
    <title>Game List</title>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Game List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('developer/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Game List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List Of Game Developed by {{$developer->name}}</h3>
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
                  @foreach ($developer->gameDeveloper as $curGame)
                  <tr>
                    <td>{{$curGame->developer->name}}</td>
                    <td>{{$curGame->publisher->name}}</td>
                    <td>{{$curGame->name}}</td>

                    @if ($curGame->status==1)
                    <td>Active</td>
                    <td>
                        <a href="{{url('admin/ban/game/'.$curGame->id)}}"><button class="btn btn-danger">Deactivate</button></a>
                    </td>
                    @else
                    <td>Non-Active</td>
                    <td>
                        <a href="{{url('admin/confirm/game/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a>
                    </td>
                    @endif

                  </tr>
                  @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <div class="card">
                <div class="card-header">
                  <h3 class="card-title">List Of Game Published by {{$developer->name}}</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  <table id="example2" class="table table-bordered table-striped">
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
                          @foreach ($developer->gamePublisher as $curGame)
                          <tr>
                            <td>{{$curGame->developer->name}}</td>
                            <td>{{$curGame->publisher->name}}</td>
                            <td>{{$curGame->name}}</td>

                            @if ($curGame->status==1)
                            <td>Active</td>
                            <td>
                                <a href="{{url('admin/ban/game/'.$curGame->id)}}"><button class="btn btn-danger">Deactivate</button></a>
                            </td>
                            @else
                            <td>Non-Active</td>
                            <td>
                                <a href="{{url('admin/confirm/game/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a>
                            </td>
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
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
@endsection

@section('script')
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
@endsection
