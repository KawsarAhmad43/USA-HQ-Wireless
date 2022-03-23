@extends('back-end.admin')

@section('title')
Custom Code
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('admin/code/update') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Update Custom Code</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group">
                      <label>Custom Header Code</label>
                      <textarea class="form-control" name="header_code" rows="8" placeholder="Enter ...">{{ $info->header_code }}</textarea>
                    </div>
                    <div class="form-group">
                      <label>Custom Footer Code</label>
                      <textarea class="form-control" name="footer_code" rows="8" placeholder="Enter ...">{{ $info->footer_code }}</textarea>
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

@endsection
