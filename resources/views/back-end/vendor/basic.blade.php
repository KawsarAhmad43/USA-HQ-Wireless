@extends('back-end.vendor.layout.master')

@section('title')
Basic Information
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('vendor/info/update') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Update Basic info</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Name <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ $info->name }}" required placeholder="Enter name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Contact Numbers <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('contact_no') is-invalid @enderror" id="contact_no" name="contact_no" value="{{ $info->contact_no }}" required placeholder="Enter contact numbers">
                        @error('contact_no')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Help Line <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ $info->phone }}" required placeholder="Enter contact numbers">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Marchant Bkash Number <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('bkas') is-invalid @enderror" id="bkas" name="bkas" value="{{ $info->bkas }}" required placeholder="Enter contact numbers">
                        @error('bkas')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Logo <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="custom-file @error('logo') is-invalid @enderror">
                            <input type="file" name="logo" class="custom-file-input"  onchange="readURL(this);">
                            <label class="custom-file-label">Choose file</label>
                            <input type="hidden" name="preLogo" class="form-control" value="{{ $info->logo }}">
                          </div>
                        </div>
                        @error('logo')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group">
                      <img id="logo" src="{{ url('/'.$info->logo) }}" class="col-md-4 mt-4">
                    </div>

                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
            </div>

        </div>

      </div>
    </form>
  </div><!--/. container-fluid -->

</section>

@endsection

@section('script')
  @foreach(['success','error'] as $type)
      @if(Session::has('msg-'.$type))
        toastr.{{ $type }}('{{ Session::get('msg-'.$type) }}');
      @endif
  @endforeach

  $(document).ready(function() {
    $(function () {
      // Summernote
      var des = $("#des").val();
      $('.textarea').summernote({
        height: 500
      });
      $('.textarea').summernote('code', des);
    });

  });
  function readURL(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#logo').attr('src', e.target.result);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

@endsection
