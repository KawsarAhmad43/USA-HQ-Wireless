@extends('back-end.admin')

@section('title')
Delivery Info
@endsection

@section('style')

@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
  <!-- form start -->
  <form class="form-horizontal" method="POST" action="{{ url('admin/delivery/update') }}" accept-charset="utf-8" enctype="multipart/form-data">
    @csrf
    @method('put')
      <div class="row">
        <div class="col-md-9">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Update Delivery info</h3>
                </div>
                <!-- /.card-header -->
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Inside City Cost <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('delivery_cost1') is-invalid @enderror" id="delivery_cost1" name="delivery_cost1" value="{{ $info->delivery_cost1 }}" required>
                        @error('delivery_cost1')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="pcode" class="col-sm-3 control-label">Outside City Cost <span style="color:red;">*</span></label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('delivery_cost2') is-invalid @enderror" id="delivery_cost2" name="delivery_cost2" value="{{ $info->delivery_cost2 }}" required>
                        @error('delivery_cost2')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <label for="pcode" class="col-sm-12 control-label">Description(Inside City) </label>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <textarea id="inside_details" name="inside_details" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                      </div>
                    </div>
                    <textarea id="des1" style="display:none;">{{ $info->inside_details }}</textarea>

                    <label for="pcode" class="col-sm-12 control-label">Description(Outside City) </label>
                    <div class="form-group row">
                      <div class="col-sm-12">
                          <textarea id="outside_details" name="outside_details" placeholder="Place some text here" style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid rgb(221, 221, 221); padding: 10px; display: none;"></textarea>
                      </div>
                    </div>
                    <textarea id="des2" style="display:none;">{{ $info->outside_details }}</textarea>

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
      var des1 = $("#des1").val();
      var des2 = $("#des2").val();
      $('#inside_details,#outside_details').summernote({
        height: 300
      });
      $('#inside_details').summernote('code', des1);
      $('#outside_details').summernote('code', des2);
    });

  });

@endsection
