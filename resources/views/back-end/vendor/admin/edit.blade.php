@extends('back-end.admin')

@section('title')
Edit Vendor
@endsection

@section('style')
.imgDiv {
    width:195px; height:195px;
}
.images {
    width:195px; height:195px; padding:5px;
}
.upload {
    width:145px; height:33px;opacity:0;position:relative;left: 0;top:0;z-index: 20;
}
::-webkit-scrollbar {
  width: 15px;
}

/* Track */
::-webkit-scrollbar-track {
  box-shadow: inset 0 0 5px grey;
  border-radius: 5px;
}

/* Handle */
::-webkit-scrollbar-thumb {
  background: #bec3bf;
  border-radius: 5px;
}

/* Handle on hover */
::-webkit-scrollbar-thumb:hover {
  background: #9fa2a0;
}
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{url('admin/vendor/update/'.$vendor->id)}}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
     @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Vendor</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Vendor Name <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{$vendor->name}}" required placeholder="Enter vendor name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    
                    <div class="form-group row">
                      <label for="email" class="col-sm-3 control-label">E-mail</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{$vendor->email}}" placeholder="Enter the email">
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-3 control-label">Phone number(s)</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{$vendor->phone}}" placeholder="Enter phone number(s) separated by commas(,)">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="password" class="col-sm-3 control-label">Password</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('password') is-invalid @enderror" id="password" name="password" value="" placeholder="Enter the password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="address" class="col-sm-3 control-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" value="{{$vendor->address}}" placeholder="Enter address ">
                        @error('address')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    
                    
                    <br />

                    
                    
                  </div>
                  <!-- /.card-body -->
            </div>

        </div>

        <div class="col-md-3">
              <!-- /.card -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Upload Image</h3>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <div class="form-group">


                        <p></p>

                        <label for="usr">Upload Image:</label>
                    <div class="form-group row">
                      <div class="col-md-3" style="padding:20px;">
                          <div class="border imgDiv">
                                  <img src="{{ asset('/'.$vendor->img) }}" id="img1" class="images">
                                  <input type="file" name="img" id="valueImg1" value="product_img.png" class="upload" onchange="readURL1(this);">
                          </div>
  
                          <input type="button" style="float:left;margin-left:0px;width: 195px; " class="btn btn-sm btn-info" value="Add">
                          <input type="button" style="float:left;margin-left:80px;padding: 4px 13px;" class="btn btn-sm btn-warning" value="x" id="r1">
                          @error('img')
                              <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      

                    </div>
                  </div>

                </div>













                        
                  <!-- /.card-body -->
              </div>
             

              <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <button type="submit" name="action" value="publish" class="btn btn-block bg-gradient-success btn-sm">Publish</button>
                   
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
          </div>
          <!-- /.col -->

      </div>
    </form>
  </div><!--/. container-fluid -->

</section>

@endsection

@section('script')

    @if(Session::has("status"))
    
        toastr.success("{{ Session::get('status')}}");

    @endif


    $("#r1").click(function(){
        $('#img1').attr('src', '{{ asset('/') }}image/product_img.png').width(185).height(185);
        $("#valueImg1").val("");
    });

    

  function readURL1(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img1')
                  .attr('src', e.target.result).width(185).height(185);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

@endsection




