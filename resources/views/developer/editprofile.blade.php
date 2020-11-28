@extends('developer.layout')

@section('header')
    <title>Edit Profile</title>
@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('developer/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            @if ($message = Session::get('message'))
              <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">×</button>
                  <strong>{{ $message }}</strong>
              </div>
            @endif
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit Profile</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('developer/editprofile')}}" method="POST">
                @csrf
                <input type="hidden" name="id" value="{{$developer->id}}">
                <div class="card-body">
                    <div class="row">
                    {{-- Left Input --}}
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Developer Name" value="{{$developer->name}}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username" placeholder="Developer Username" value="{{$developer->username}}" readonly>
                            @error('username')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" id="my-checkbox" type="checkbox" name="mycheckbox" onclick="showHidePassword()">
                            <label class="form-check-label" for="my-checkbox">Change Password</label>
                        </div>
                        <div class="form-group" id="oldpassword" style="display:none">
                            <label>Old Password</label>
                            <input type="password" class="form-control" name="oldpassword" placeholder="Old Password">
                            @error('oldpassword')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group" id="newpassword" style="display:none">
                            <label>New Password</label>
                            <input type="password" class="form-control" name="newpassword" placeholder="New Password">
                            @error('newpassword')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                </div>

                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection

@section('script')
<script>
    function showHidePassword() {
        var checkBox = document.getElementById("my-checkbox");
        var element=document.getElementById('oldpassword');
        var element2=document.getElementById('newpassword');

        if (checkBox.checked == true){
            element.style.display='block';
            element2.style.display='block';
        } else {
            element.style.display='none';
            element2.style.display='none';
        }
    }
</script>
@endsection
