@extends('back-end.admin')

@section('title')
Notification Settings
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('admin/mail/update') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Email Notification Settings</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Customer Notify <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <label class="form-check-label">
                          <input class="form-check-input" name="notify_customer" type="checkbox"
                           @if(!empty($info->notify_customer))
                           @if($info->notify_customer==1)
                           checked 
                           @endif
                           @endif>
                          Notify Customer for new order!</label>
                        </div>
                        @error('notify_customer')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Admin Notify <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <div class="form-check">
                          <label class="form-check-label">
                          <input class="form-check-input" name="notify_admin" type="checkbox" @if(!empty($info->notify_admin))
                          @if($info->notify_admin==1) 
                          checked 
                           @endif
                           @endif>
                          Notify Admin for new order!</label>
                        </div>
                        @error('notify_admin')
                            <span style="color:red;" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Admin Mail Address <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('admin_mail') is-invalid @enderror" id="admin_mail" name="admin_mail" value="{{ $info->admin_mail ?? ''}}" required placeholder="Enter Admin Mail Address">
                        @error('admin_mail')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <br />
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Driver <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_driver') is-invalid @enderror" id="mail_driver" name="mail_driver" value="{{ $info->mail_driver ?? ''}}" required placeholder="Enter Admin Mail Driver">
                        @error('mail_driver')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Host <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_host') is-invalid @enderror" id="mail_host" name="mail_host" value="{{ $info->mail_host ?? ''}}" required placeholder="Enter Admin Mail Host">
                        @error('mail_host')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Port <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_port') is-invalid @enderror" id="mail_port" name="mail_port" value="{{ $info->mail_port ?? ''}}" required placeholder="Enter Admin Mail Port">
                        @error('mail_port')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Username <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_username') is-invalid @enderror" id="mail_username" name="mail_username" value="{{ $info->mail_username ?? ''}}" required placeholder="Enter Admin Mail Username">
                        @error('mail_username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Password <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control @error('mail_password') is-invalid @enderror" id="mail_password" name="mail_password" value="{{ $info->mail_password ?? ''}}" required placeholder="Enter Admin Mail Password">
                        @error('mail_password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail Encryption <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_encryption') is-invalid @enderror" id="mail_encryption" name="mail_encryption" value="{{ $info->mail_encryption ?? ''}}" required placeholder="Enter Admin Mail Encryption">
                        @error('mail_encryption')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail From Address <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_from_address') is-invalid @enderror" id="mail_from_address" name="mail_from_address" value="{{ $info->mail_from_address ?? ''}}" required placeholder="Enter Admin Mail From Address">
                        @error('mail_from_address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 control-label">Mail From Name <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('mail_from_name') is-invalid @enderror" id="mail_from_name" name="mail_from_name" value="{{ $info->mail_from_name ?? ''}}" required placeholder="Enter Admin Mail From Name">
                        @error('mail_from_name')
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
