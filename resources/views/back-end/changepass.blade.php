@extends('back-end.admin')

@section('title')
Change Password
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('admin/changepass') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Change Password</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Current Password <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control @error('crpassword') is-invalid @enderror" id="crpassword" name="crpassword"required placeholder="Enter current Password">
                        @error('crpassword')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">New Password <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password"required placeholder="Enter new Password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Confirm Password <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation"required placeholder="Confirm new Password">
                        @error('password_confirmation')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
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
