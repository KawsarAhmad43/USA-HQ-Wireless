@extends('back-end.admin')

@section('title')
Sliders
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Image</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ url('admin/slider/save') }}" enctype="multipart/form-data">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Title</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required placeholder="Enter title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Image <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="custom-file">
                            <input type="file" name="slider" class="custom-file-input @error('slider') is-invalid @enderror"  onchange="readURL(this);">
                            <label class="custom-file-label">Choose file</label>
                          </div>
                        </div>
                        @error('slider')
                            <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <img id="img" src="" class="col-md-12 mt-4">
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
            </div>

        </div>

        <div class="col-md-7">

          <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Images</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th style="width:80px;">SL#</th>
                      <th>Title</th>
                      <th>Image</th>
                      <th style="width:150px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $sl = 1 @endphp
                      @foreach($sliders as $slider)
                      <tr>
                        <td>{{ $sl }}</td>
                        <td style="display:none;">{{ $slider->id }}</td>
                        <td style="display:none;">{{ $slider->position }}</td>
                        <td style="display:none;">{{ $slider->sts }}</td>
                        <td>{{ $slider->title }}</td>
                        <td><img src="{{ url('/'.$slider->img) }}" alt="{{$slider->title}}" width="300" /></td>
                        <td>
                          <div class="col-md-12">
                            <button type="button" class="deletebtn btn btn-danger btn-xs" data-toggle="modal" data-target="#deleteModal">Delete</button>
                          </div>
                        </td>
                      </tr>
                        @php $sl++ @endphp
                      @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>

        </div>
      </div>
  </div><!--/. container-fluid -->

  <!----  edit Model ----->
    <div class="modal fade" id="deleteModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">Delete Image</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <p>
                Are you sure to delete the image?
              </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
              <form role="form" action="{{ url('admin/slider/delete') }}" method="post">
                @csrf
                @method('DELETE')
                <input type="hidden" class="form-control" id="delete_id" name="delete_id" value="{{ old('delete_id') }}" required>
                <button type="submit" class="btn btn-outline-light">Yes</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!----- end models ----->

</section>

@endsection

@section('script')
  @foreach(['success','error'] as $type)
      @if(Session::has('msg-'.$type))
        toastr.{{ $type }}('{{ Session::get('msg-'.$type) }}');
      @endif
  @endforeach

  $(document).ready(function() {
    $(".deletebtn").click(function() {           
      var currentRow=$(this).closest("tr");             
      var id = currentRow.find("td:eq(1)").text()         
                
       $("#delete_id").val(id);
    });
  });

  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img').attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

@endsection
