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
            @if ($message = Session::get('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
            </div>
          @endif
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
                  {{-- <tr data-toggle="modal" data-target="#modal-xl" data-url="http://127.0.0.1:8000/game/{{$curGame->id}}" data-title="{{$curGame->name}}"> --}}
                    @if ($curGame->status==-1)
                        <tr class="table-danger">
                    @else
                        <tr>
                    @endif
                    <td>{{$curGame->developer->name}}</td>
                    <td>{{$curGame->publisher->name}}</td>
                    <td>{{$curGame->name}}</td>

                    @if ($curGame->status==1)
                    <td>Active</td>
                    <td>
                        <a href="{{url('developer/deactivate/'.$curGame->id)}}"><button class="btn btn-danger">Deactivate</button></a>
                    </td>
                    @elseif($curGame->status==2)
                    <td>Waiting For Admin Confirmation</td>
                    <td>
                        <a href="{{url('developer/deactivate/'.$curGame->id)}}"><button class="btn btn-danger">Cancel</button></a>
                    </td>
                    @elseif($curGame->status==-1)
                    <td>Banned</td>
                    <td>
                        <a href="{{url('developer/reactivate/'.$curGame->id)}}"><button class="btn btn-secondary" disabled>Just Pray</button></a>
                    </td>
                    @else
                    <td>Non-Active</td>
                    <td>
                        <a href="{{url('developer/reactivate/'.$curGame->id)}}"><button class="btn btn-success toastrDefaultSuccess">Reactivate</button></a>
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
                          {{-- <tr data-toggle="modal" data-target="#modal-xl" data-url="http://127.0.0.1:8000/game/{{$curGame->id}}" data-title="{{$curGame->name}}"> --}}
                            <tr>
                            <td>{{$curGame->developer->name}}</td>
                            <td>{{$curGame->publisher->name}}</td>
                            <td>{{$curGame->name}}</td>

                            @if ($curGame->status==1)
                            <td>Active</td>
                            <td>
                                <a href="{{url('developer/deactivate/'.$curGame->id)}}"><button class="btn btn-danger">Deactivate</button></a>
                            </td>
                            @elseif($curGame->status==2)
                            <td>Waiting For Admin Confirmation</td>
                            <td>
                                <a href="{{url('developer/deactivate/'.$curGame->id)}}"><button class="btn btn-danger">Cancel</button></a>
                            </td>
                            @elseif($curGame->status==-1)
                            <td class="table-danger">Banned</td>
                            <td>
                                <a href="{{url('developer/reactivate/'.$curGame->id)}}"><button class="btn btn-secondary" disabled>Just Pray</button></a>
                            </td>
                            @else
                            <td>Non-Active</td>
                            <td>
                                <a href="{{url('developer/reactivate/'.$curGame->id)}}"><button class="btn btn-success">Reactivate</button></a>
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
    {{-- Modal --}}
    <div class="modal fade" id="modal-xl">
        <div class="modal-dialog modal-xl">
            <div class="modal-content" style="height:800px;">
            <div class="modal-header">
                <h4 class="modal-title">Extra Large Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="height:100%">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
        </div>
        {{-- End Modal --}}
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
    $('#modal-xl').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var link = button.data('url')
        var title =button.data('title');
        var modal = $(this)
        modal.find('.modal-title').text(title)
        $(".modal-body").html('<iframe width="100%" height="100%" frameborder="0" scrolling="yes" allowtransparency="true" src="'+link+'"></iframe>');
        // modal.find('.modal-body input').val(recipient)
    })
  </script>
@endsection
