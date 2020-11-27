@extends('developer.layout')

@section('header')
    <title>Insert New Game</title>

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Insert New Game</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('developer/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Insert New Game</li>
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
                <h3 class="card-title">Insert New Game</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('developer/insertGame')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row">
                    {{-- Left Input --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Game Name</label>
                            <input type="text" class="form-control" name="name" placeholder="Game Name" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Game Description</label>
                            <textarea rows="3" class="form-control" name="description" placeholder="Game Description"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date:</label>
                              <div class="input-group date" id="release" data-target-input="nearest">
                                  <input type="text" class="form-control datetimepicker-input" name="release" data-target="#release" value="{{old('release')}}"/>
                                  <div class="input-group-append" data-target="#release" data-toggle="datetimepicker">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                  </div>
                              </div>
                              @error('release')
                                    <small class="text-danger">{{ $message }}</small>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label>Tags</label>
                            <select class="select2" multiple="multiple" data-placeholder="Select a tag" name="tags[]" style="width: 100%;">
                               @foreach ($tagList as $curList)
                                   <option value="{{$curList->id}}">{{$curList->name}}</option>
                               @endforeach
                            </select>
                            @error('tags')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Game Price</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                <span class="input-group-text">$</span>
                                </div>
                                <input type="number" class="form-control" name="price" placeholder="Game Price" value="{{old('price')}}">
                            </div>
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Developer</label>
                            <select class="form-control" name="developer">
                                @foreach ($developerList as $curList)
                                    @if ($curList->id == Session::get('developer-login')->id)
                                    <option value="{{$curList->id}}" selected>{{$curList->name}}</option>
                                    @else
                                    <option value="{{$curList->id}}">{{$curList->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('developer')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label>Publisher</label>
                            <select class="form-control" name="publisher">
                                @foreach ($developerList as $curList)
                                    @if ($curList->id == Session::get('developer-login')->id)
                                    <option value="{{$curList->id}}" selected>{{$curList->name}}</option>
                                    @else
                                    <option value="{{$curList->id}}">{{$curList->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('publisher')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Insert Logo Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gameLogo" id="inputLogo" value="{{old('gameLogo')}}">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                            </div>
                            @error('gameLogo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Insert Game Image</label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="inputImage" name="gameImage[]" multiple>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                            </div>
                            @error('gameImage')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                    </div>
                    {{-- End Left Input --}}
                    {{-- Start Right Input --}}
                    <div class="col-md-6">

                        <div class="form-group">
                            <label>Instagram</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-instagram"></i></div>
                                </div>
                                <input type="number" class="form-control" name="instagram" placeholder="Instgram Link" value="{{old('instagram')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-dribbble"></i></div>
                                </div>
                                <input type="number" class="form-control" name="Website" placeholder="Website Link" value="{{old('website')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Reddit</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-reddit"></i></div>
                                </div>
                                <input type="number" class="form-control" name="reddit" placeholder="Reddit Link" value="{{old('reddit')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-youtube"></i></div>
                                </div>
                                <input type="number" class="form-control" name="youtube" placeholder="Youtube Link" value="{{old('youtube')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-facebook"></i></div>
                                </div>
                                <input type="number" class="form-control" name="facebook" placeholder="Facebook Link" value="{{old('facebook')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Twitch</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-twitch"></i></div>
                                </div>
                                <input type="number" class="form-control" name="twitch" placeholder="Twitch Link" value="{{old('twitch')}}">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-twitter"></i></div>
                                </div>
                                <input type="number" class="form-control" name="twitter" placeholder="Twitter Link" value="{{old('twitter')}}">
                            </div>
                        </div>
                    </div>
                    {{-- End Right Input --}}
                </div>
                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
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

<script type="text/javascript">
    $('.select2').select2({
      theme: 'bootstrap4',
      allowClear : true,
    //   tags: true,
    //   createTag: function (params) {
    //     var term = $.trim(params.term);

    //     if (term === '') {
    //     return null;
    //     }

    //     return {
    //     id: term,
    //     text: term,
    //     newTag: true // add additional parameters
    //     }
    // },
    //     insertTag: function (data, tag) {
    //     // Insert the tag at the end of the results
    //     data.push(tag);
    // }
    })
    $('#inputLogo').on('change',function(e){
        //get the file name
        let nama = e.target.files[0].name;
        nama = nama.substr(0, nama.lastIndexOf('.'));
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(nama);
    })

    $('#inputImage').on('change',function(e){
        //get the file name
        let nama = e.target.files[0].name;
        nama = nama.substr(0, nama.lastIndexOf('.'));
        if(e.target.files.length>1){
            let jumlah = e.target.files.length-1;
            nama = nama.concat(" + ",jumlah," other images");
        }
        // var fileName = e.target.files[0].name;
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(nama);
    })

    $('#release').datetimepicker({
        format: 'L'
    });
    </script>
@endsection
