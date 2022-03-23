@extends('back-end.vendor.layout.master')

@section('title')
New Product
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
  <form class="form-horizontal" method="POST" action="{{ url('vendor/product/store') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Product</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Product Name <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter product name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label" >Seller ID <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="seller_id" value="{{ old('name') }}" required placeholder="Enter Seller ID">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>

                    <div class="form-group row">
                      <label for="pcode" class="col-sm-3 control-label">Product Code</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('pcode') is-invalid @enderror" id="pcode" name="pcode" value="{{ old('pcode') }}" required placeholder="Enter product code">
                        @error('pcode')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="phone" class="col-sm-3 control-label">Phone number(s)</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" value="{{ old('phone') }}" required placeholder="Enter phone number(s) separated by commas(,)">
                        @error('phone')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="bkash" class="col-sm-3 control-label">Bkash Marchent</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('bkash') is-invalid @enderror" id="bkash" name="bkash" value="{{ old('bkash') }}" required placeholder="Enter bkash Marchent number">
                        @error('bkash')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pcode" class="col-sm-3 control-label">Hot Deal</label>
                      <div class="col-sm-offset-2 col-sm-9">
                        <div class="form-check">
                          <input type="checkbox" name="hot" class="form-check-input" id="hot" @if( old('hot') ) checked @endif>
                          <label class="form-check-label" for="hot">Add as Hot Deal item</label>
                        </div>
                      </div>
                    </div>
                    <label for="usr">Upload Images:</label>
                    <div class="form-group row">
                      <div class="col-md-3" style="padding:0;">
                          <div class="border imgDiv">
                                  <img src="{{ asset('/') }}image/product_img.png" id="img1" class="images">
                                  <input type="file" name="img1" id="valueImg1" value="product_img.png" class="upload" onchange="readURL1(this);">
                          </div>
                          <input type="button" style="float:left;margin-left:5px;width: 140px;" class="btn btn-sm btn-info" value="Add">
                          <input type="button" style="float:left;margin-left:15px;padding: 4px 13px;" class="btn btn-sm btn-warning" value="x" id="r1">
                          @error('img1')
                              <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-3" style="padding:0;">
                          <div class="border imgDiv">
                                  <img src="{{ asset('/') }}image/product_img.png" id="img2" class="images">
                                  <input type="file" name="img2" id="valueImg2" class="upload" onchange="readURL2(this);">
                          </div>
                          <input type="button" style="float:left;margin-left:5px;width: 140px;" class="btn btn-sm btn-info" value="Add">
                          <input type="button" style="float:left;margin-left:15px;padding: 4px 13px;" class="btn btn-sm btn-warning" value="x" id="r2">
                          @error('img2')
                              <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                      <div class="col-md-3" style="padding:0;">
                          <div class="border imgDiv">
                                  <img src="{{ asset('/') }}image/product_img.png" id="img3" class="images">
                                  <input type="file" name="img3" id="valueImg3" class="upload" onchange="readURL3(this);">
                          </div>
                          <input type="button" style="float:left;margin-left:5px;width: 140px;" class="btn btn-sm btn-info" value="Add">
                          <input type="button" style="float:left;margin-left:15px;padding: 4px 13px;" class="btn btn-sm btn-warning" value="x" id="r3">
                          @error('img3')
                              <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>
                      <div class="col-md-3" style="padding:0;">
                          <div class="border imgDiv">
                                  <img src="{{ asset('/') }}image/product_img.png" id="img4" class="images">
                                  <input type="file" name="img4" id="valueImg4" class="upload" onchange="readURL4(this);">
                          </div>
                          <input type="button" style="float:left;margin-left:5px;width: 140px;" class="btn btn-sm btn-info" value="Add">
                          <input type="button" style="float:left;margin-left:15px;padding: 4px 13px;" class="btn btn-sm btn-warning" value="x" id="r4">
                          @error('img4')
                              <span style="color:red;color:red;display:block;clear: both;" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                    </div>
                    <br />

                    <label for="pcode" class="col-sm-3 control-label">Description <span style="color:red;">*</span></label>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <textarea id="long_description" name="long_description" required  placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                      </div>
                    </div>
                    <textarea id="des" style="display:none;">{{ old('description') }}</textarea>

                  </div>
                  <!-- /.card-body -->
            </div>

        </div>

        <div class="col-md-3">
              <!-- /.card -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Price</h3>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                      <div class="form-group">
                        <label for="rprice">Regular Price</label>
                        <input type="number" class="form-control" id="rprice" name="rprice" value="{{ old('rprice') }}" required placeholder="Regular Price">
                      </div>
                      <div class="form-group">
                        <label for="sprice">Standard Price <span style="color:red;">*</span></label>
                        <input type="number" class="form-control" id="sprice" name="sprice" value="{{ old('sprice') }}" required placeholder="Standard Price">
                      </div>
                  </div>
                  <!-- /.card-body -->
              </div>
              <!-- /.card -->
              <div class="card card-warning">
                <div class="card-header">
                  <h3 class="card-title">Select Categories <span style="color:red;">*</span></h3>
                </div>
                  <!-- /.card-header -->
                  <div class="card-body" style="height: 500px;overflow-y: auto;">
                    <table id="alldata" class="table table-striped table-sm" style="width:100%">
                      <tbody>
                          @foreach($categories as $category)
                          <tr>
                              <td style="display:none;">{{ $category->id }}</td>
                              <td>
                                <div class="form-group mb-0">
                                  <div class="form-check">
                                    <label class="form-check-label" style="display: block;">
                                        <input class="ctgs form-check-input" name="pr_ctg[]" value="{{ $category->id }}" type="checkbox" required>
                                        {{ $category->name }}
                                    </label>
                                  </div>
                                </div>
                              </td>
                          </tr>
                                @foreach(App\Category::where('mctg',$category->id)->orderBy('id')->get() as $subctg)
                                <tr>
                                    <td style="display:none;">{{ $subctg->id }}</td>
                                    <td style="display:none;">{{ $subctg->mctg }}</td>
                                    <td style="display:none;">{{ $subctg->name }}</td>
                                    <td>
                                      <div class="form-group ml-4 mb-0">
                                        <div class="form-check">
                                          <label class="form-check-label" style="display: block;">
                                              <input class="ctgs form-check-input" name="pr_ctg[]" value="{{ $subctg->id }}" type="checkbox" required>
                                              {{ $subctg->name }}
                                          </label>
                                        </div>
                                      </div>
                                    </td>
                                </tr>
                                @endforeach
                          @endforeach
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
              </div>

              <div class="card">
                  <!-- /.card-header -->
                  <div class="card-body">
                    <button type="submit" name="action" value="publish" class="btn btn-block bg-gradient-success btn-sm">Publish</button>
                    <button type="submit" name="action" value="draft" class="btn btn-block bg-gradient-info btn-sm">Save as Draft</button>
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
  @foreach(['success','error'] as $type)
      @if(Session::has('msg-'.$type))
        toastr.{{ $type }}('{{ Session::get('msg-'.$type) }}');
      @endif
  @endforeach

  $(document).ready(function() {
    $(function () {
      // Summernote
      var des = $("#des").val();
      $('#long_description').summernote({
        height: 500
      });

      @if(old('description'))
        $('#long_description').summernote('code', des);
      @endif
    });

    $(".ctgs").change(function(){
        var selected = 0;
        $(".ctgs").each(function(){
            if($(this).is(':checked')){
                selected = 1;
            }

        });

        if(selected == 1){
            $(".ctgs").each(function(){
                $(this).prop("required",false);
            });
        } else {
            $(".ctgs").each(function(){
                $(this).prop("required",true);
            });
        }

    });

    $("#r1").click(function(){
        $('#img1').attr('src', '{{ asset('/') }}image/product_img.png').width(185).height(185);
        $("#valueImg1").val("");
    });

    $("#r2").click(function(){
        $('#img2').attr('src', '{{ asset('/') }}image/product_img.png').width(185).height(185);
        $("#valueImg2").val("");
    });

    $("#r3").click(function(){
        $('#img3').attr('src', '{{ asset('/') }}image/product_img.png').width(185).height(185);
        $("#valueImg3").val("");
    });

    $("#r4").click(function(){
        $('#img4').attr('src', '{{ asset('/') }}image/product_img.png').width(185).height(185);
        $("#valueImg4").val("");
    });
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

  function readURL2(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img2')
                  .attr('src', e.target.result).width(185).height(185);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
  function readURL3(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img3')
                  .attr('src', e.target.result).width(185).height(185);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }
  function readURL4(input) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();

          reader.onload = function (e) {
              $('#img4')
                  .attr('src', e.target.result).width(185).height(185);
          };

          reader.readAsDataURL(input.files[0]);
      }
  }

@endsection
