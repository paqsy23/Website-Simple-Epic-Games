@extends('developer.layout')

@section('header')
    <title>Edit Game | {{$game->name}}</title>

@endsection

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit Game | {{$game->name}}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('developer/home')}}">Home</a></li>
              <li class="breadcrumb-item active">Edit Game</li>
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
                <h3 class="card-title">Edit Game | {{$game->name}}</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{url('developer/editGame')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    <div class="row">
                    {{-- Left Input --}}
                    <input type="hidden" name="id" value="{{$game->id}}">
                    <input type="hidden" name="status" value="2">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Game Name<span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="name" placeholder="Game Name" value="{{$game->name}}">
                            @error('name')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Game Description<span class="text-danger">*</span></label>
                            <textarea rows="3" class="form-control" name="description" placeholder="Game Description">
                                {{$game->description}}
                            </textarea>
                            @error('description')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Date:<span class="text-danger">*</span></label>
                              <div class="input-group date" id="release" data-target-input="nearest">
                                  <input type="text" class="form-control datetimepicker-input" name="release" data-target="#release" value="{{$game->release}}"/>
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
                               @foreach ($game->tags as $curTag)
                                    <option value="{{$curTag->id}}" selected>{{$curTag->name}}</option>
                               @endforeach
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
                                <input type="number" class="form-control" name="price" placeholder="Game Price" value="{{$game->price}}">
                            </div>
                            @error('price')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Developer<span class="text-danger">*</span></label>
                            <select class="form-control" name="developer">
                                @foreach ($developerList as $curList)
                                    @if ($curList->id == $game->developer_id)
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
                                    @if ($curList->id == $game->publisher_id)
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
                          <div class="form-check">
                            <input class="form-check-input" id="my-checkbox" type="checkbox" name="mycheckbox" onclick="showHideLogo()">
                            <label class="form-check-label" for="my-checkbox">Change Logo Image ?</label>
                        </div>
                          <div class="form-group" id="logo" style="display:none">
                            <label for="exampleInputFile">Insert Logo Image</label>
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
                          <div class="form-check">
                            <input class="form-check-input" id="my-checkbox2" type="checkbox" name="mycheckbox2" onclick="showHideGameImage()">
                            <label class="form-check-label" for="my-checkbox2">Change Game Image ?</label>
                        </div>
                          <div class="form-group"  id="gameimage" style="display:none">
                            <label for="exampleInputFile">Insert Game Image</label>
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

                          <div class="form-check">
                            <input class="form-check-input" id="my-checkbox3" type="checkbox" name="mycheckbox3" onclick="showHideGame()">
                            <label class="form-check-label" for="my-checkbox3">Is This Game an Add-On ?</label>
                        </div>
                        <div class="form-group" id="gameparent" style="display:none">
                            <label>Game Parent<span class="text-danger">*</span></label>
                            <select class="form-control" name="add_ons">
                                @foreach ($gameParent as $curGame)
                                    @if ($curGame->status==1 && $curGame->id != $game->id)
                                    <option value="{{$curGame->id}}" selected>{{$curGame->name}}</option>
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
                                <input type="text" class="form-control" name="instagram" placeholder="Instagram Link" value="{{$game->instagram}}">
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
                                <input type="text" class="form-control" name="Website" placeholder="Website Link" value="{{$game->website}}">
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
                                <input type="text" class="form-control" name="reddit" placeholder="Reddit Link" value="{{$game->reddit}}">
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
                                <input type="text" class="form-control" name="youtube" placeholder="Youtube Link" value="{{$game->youtube}}">
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
                                <input type="text" class="form-control" name="facebook" placeholder="Facebook Link" value="{{$game->facebook}}">
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
                                <input type="text" class="form-control" name="twitch" placeholder="Twitch Link" value="{{$game->twitch}}">
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
                                <input type="text" class="form-control" name="twitter" placeholder="Twitter Link" value="{{$game->twitter}}">
                            </div>
                            @error('twitter')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label>OS</label>
                            <input type="text" class="form-control" name="OS" placeholder="OS" value="{{$game->OS}}">
                            @error('OS')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>CPU</label>
                            <input type="text" class="form-control" name="CPU" placeholder="CPU" value="{{$game->CPU}}">
                            @error('CPU')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Graphics</label>
                            <input type="text" class="form-control" name="graphics" placeholder="Graphics" value="{{$game->graphics}}">
                            @error('graphics')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Processor</label>
                            <input type="text" class="form-control" name="processor" placeholder="Processor" value="{{$game->processor}}">
                            @error('processor')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Memory</label>
                            <input type="text" class="form-control" name="memory" placeholder="Memory" value="{{$game->memory}}">
                            @error('memory')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Storage</label>
                            <input type="text" class="form-control" name="storage" placeholder="Storage" value="{{$game->storage}}">
                            @error('storage')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Direct X</label>
                            <input type="text" class="form-control" name="direct_x" placeholder="Direct X" value="{{$game->direct_x}}">
                            @error('direct_x')
                                <small class="text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Note</label>
                            <input type="text" class="form-control" name="note" placeholder="Additional Note" value="{{$game->note}}">
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
        format: 'L',
        defaultDate : JSON.parse("{{ json_encode($game->release) }}")
    });

    function showHideLogo() {
        var checkBox = document.getElementById("my-checkbox");
        var element=document.getElementById('logo');
        if (checkBox.checked == true){
            element.style.display='block';
        } else {
            element.style.display='none';
        }
    }

    function showHideGameImage() {
        var checkBox = document.getElementById("my-checkbox2");
        var element=document.getElementById('gameimage');
        if (checkBox.checked == true){
            element.style.display='block';
        } else {
            element.style.display='none';
        }
    }

    function showHideGame() {
        var checkBox = document.getElementById("my-checkbox3");
        var element=document.getElementById('gameparent');
        if (checkBox.checked == true){
            element.style.display='block';
        } else {
            element.style.display='none';
        }
    }
    </script>
@endsection
