@extends('back-end.admin')

@section('title')
Page:: {{ $page->title }}
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('admin/pages/'.$page->id) }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Update Page info</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Page Title <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ $page->title }}" required placeholder="Enter page title">
                        @error('title')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pcode" class="col-sm-3 control-label">Slug <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ $page->slug }}" required placeholder="Enter page slug">
                        @error('slug')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <label for="pcode" class="col-sm-3 control-label">Description </label>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <textarea class="textarea" name="description" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                      </div>
                    </div>
                    <textarea id="des" style="display:none;">{{ $page->description }}</textarea>

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

@endsection
