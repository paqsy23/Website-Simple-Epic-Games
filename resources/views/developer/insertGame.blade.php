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
              <form action="{{url('developer/insertGame')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                    {{-- Left Input --}}
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Game Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Game Name" value="{{old('name')}}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Game Description<span class="text-danger">*</span></label>
                            <textarea rows="3" class="form-control" name="description" placeholder="Game Description"></textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date:<span class="text-danger">*</span></label>
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
                            <label>Tags<span class="text-danger">*</span></label>
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
                            <label>Game Price<span class="text-danger">*</span></label>
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
                            <label>Developer<span class="text-danger">*</span></label>
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
                            <label>Publisher<span class="text-danger">*</span></label>
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
                            <label for="exampleInputFile">Insert Logo Image<span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" name="gameLogo" id="gameLogo">
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                            </div>
                            @error('gameLogo')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div class="form-group">
                            <label for="exampleInputFile">Insert Game Image<span class="text-danger">*</span></label>
                            <div class="input-group">
                              <div class="custom-file">
                                <input type="file" class="custom-file-input" id="gameImage" name="gameImage[]" multiple>
                                <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                              </div>
                            </div>
                            @error('gameImage')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                          </div>
                          <div>
                            <label for="exampleInputFile">Select Game Platform<span class="text-danger">*</span></label>
                          </div>
                          @foreach ($platformList as $curPlatform)
                          <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="{{$curPlatform->name}}" value="{{$curPlatform->id}}" name="platform[]">
                            <label class="form-check-label" for="{{$curPlatform->name}}">
                              {{$curPlatform->name}}
                            </label>
                          </div>
                          @endforeach
                          <br>
                          @error('platform')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                          <hr>
                          <div class="form-check">
                            <input class="form-check-input" id="my-checkbox" type="checkbox" name="mycheckbox" onclick="showHideGame()">
                            <label class="form-check-label" for="my-checkbox">Is This Game an Add-On ?</label>
                        </div>
                        <div class="form-group" id="gameparent" style="display:none">
                            <label>Game Parent<span class="text-danger">*</span></label>
                            <select class="form-control" name="add_ons">
                                @foreach ($gameParent as $curGame)
                                    @if ($curGame->status==1)
                                    <option value="{{$curGame->id}}">{{$curGame->name}}</option>
                                    @endif
                                @endforeach
                            </select>
                            @error('add_ons')
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
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram Link" value="{{old('instagram')}}">
                            </div>
                            @error('instagram')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-dribbble"></i></div>
                                </div>
                                <input type="text" class="form-control" name="Website" placeholder="Website Link" value="{{old('website')}}">
                            </div>
                            @error('website')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Reddit</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-reddit"></i></div>
                                </div>
                                <input type="text" class="form-control" name="reddit" placeholder="Reddit Link" value="{{old('reddit')}}">
                            </div>
                            @error('reddit')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Youtube</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-youtube"></i></div>
                                </div>
                                <input type="text" class="form-control" name="youtube" placeholder="Youtube Link" value="{{old('youtube')}}">
                            </div>
                            @error('youtube')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-facebook"></i></div>
                                </div>
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook Link" value="{{old('facebook')}}">
                            </div>
                            @error('facebook')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Twitch</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-twitch"></i></div>
                                </div>
                                <input type="text" class="form-control" name="twitch" placeholder="Twitch Link" value="{{old('twitch')}}">
                            </div>
                            @error('twitch')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-twitter"></i></div>
                                </div>
                                <input type="text" class="form-control" name="twitter" placeholder="Twitter Link" value="{{old('twitter')}}">
                            </div>
                            @error('twitter')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>OS</label>
                            <input type="text" class="form-control" name="os" placeholder="OS" value="{{old('os')}}">
                            @error('os')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>CPU</label>
                            <input type="text" class="form-control" name="cpu" placeholder="CPU" value="{{old('cpu')}}">
                            @error('cpu')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Graphics</label>
                            <input type="text" class="form-control" name="graphics" placeholder="Graphics" value="{{old('graphics')}}">
                            @error('graphics')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Processor</label>
                            <input type="text" class="form-control" name="processor" placeholder="Processor" value="{{old('processor')}}">
                            @error('processor')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Memory</label>
                            <input type="text" class="form-control" name="memory" placeholder="Memory" value="{{old('memory')}}">
                            @error('memory')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Storage</label>
                            <input type="text" class="form-control" name="storage" placeholder="Storage" value="{{old('storage')}}">
                            @error('storage')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Direct X</label>
                            <input type="text" class="form-control" name="directx" placeholder="Direct X" value="{{old('directx')}}">
                            @error('directx')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Note</label>
                            <input type="text" class="form-control" name="note" placeholder="Additional Note" value="{{old('note')}}">
                            @error('note')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    {{-- End Right Input --}}
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
    $('#gameLogo').on('change',function(e){
        //get the file name
        let nama = e.target.files[0].name;
        nama = nama.substr(0, nama.lastIndexOf('.'));
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(nama);
    })

    $('#gameImage').on('change',function(e){
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
    function showHideGame() {
            var checkBox = document.getElementById("my-checkbox");
            var element=document.getElementById('gameparent');
            if (checkBox.checked == true){
                element.style.display='block';
            } else {
                element.style.display='none';
            }
        }
    </script>
@endsection
