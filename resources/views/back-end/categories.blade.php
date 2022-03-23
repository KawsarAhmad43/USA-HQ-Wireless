@extends('back-end.admin')

@section('title')
Categories
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
      <div class="row">
        <div class="col-md-5">

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ url('admin/category/save') }}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Category Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required placeholder="Enter category name">
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" name="sts" class="form-check-input" id="sts" @if( old('sts') ) checked @endif>
                          <label class="form-check-label" for="sts">Display as Menu</label>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- /.card-body -->
                  <div class="card-footer">
                    <button type="submit" class="btn btn-info">Save</button>
                  </div>
                  <!-- /.card-footer -->
                </form>
            </div>

            <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Add Sub Category</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form class="form-horizontal" method="POST" action="{{ url('admin/category/savesub') }}">
                  @csrf
                  <div class="card-body">
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Category Name</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control @error('subname') is-invalid @enderror" id="subname" name="subname" value="{{ old('subname') }}" required placeholder="Enter category name">
                        @error('subname')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <label for="name" class="col-sm-3 control-label">Main Category</label>
                      <div class="col-sm-9">
                        <select class="form-control @error('mctg') is-invalid @enderror" name="mctg" required>
                          <option disabled selected value="">Select</option>
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                        @error('mctg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      </div>
                    </div>
                    <div class="form-group row">
                      <div class="col-sm-offset-2 col-sm-10">
                        <div class="form-check">
                          <input type="checkbox" name="substs" class="form-check-input" id="substs" @if( old('substs') ) checked @endif>
                          <label class="form-check-label" for="substs">Display as Sub-Menu</label>
                        </div>
                      </div>
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
                <h3 class="card-title">All Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover">
                  <thead>
                    <tr>
                      <th style="width:80px;">SL#</th>
                      <th>Name</th>
                      <th style="width:150px;">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @php $sl = 1 @endphp
                      @foreach($categories as $category)
                      <tr>
                        <td>{{ $sl }}</td>
                        <td style="display:none;">{{ $category->id }}</td>
                        <td style="display:none;">{{ $category->position }}</td>
                        <td style="display:none;">{{ $category->sts }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                          <div class="col-md-12">
                            <button type="button" class="editmctg btn btn-success btn-xs" data-toggle="modal" data-target="#editModal">Edit</button>
                            <button type="button" onclick="location.href='{{ url('admin/main/category/destroy/') }}/{{$category->id}}';"  class="dmctg btn btn-danger btn-xs" >Delete</button>
                          </div>
                        </td>
                      </tr>
                        @foreach(App\Category::where('mctg',$category->id)->orderBy('id')->get() as $subctg)
                        <tr>
                          <td></td>
                          <td style="display:none;">{{ $subctg->id }}</td>
                          <td style="display:none;">{{ $subctg->name }}</td>
                          <td style="display:none;">{{ $subctg->mctg }}</td>
                          <td style="display:none;">{{ $subctg->sts }}</td>
                          <td><i class="fas fa-arrow-right"></i> {{ $subctg->name }}</td>
                          <td>
                            <div class="col-md-12">
                              <button type="button" class="editsub btn btn-success btn-xs" data-toggle="modal" data-target="#editsubModal">Edit</button>
                            <button type="button" onclick="location.href='{{ url('admin/sub/category/destroy/') }}/{{$subctg->id}}';"  class="dmctg btn btn-danger btn-xs" >Delete</button>
                            </div>
                          </td>
                        </tr>
                        @endforeach

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
    <div class="modal fade" id="editModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Category</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">
              <!-- form start -->
              <form role="form" action="{{ url('admin/category/edit') }}" method="post">
                @csrf
                @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label>Category Name</label>
                    <input type="text" class="form-control @error('edit_name') is-invalid @enderror" id="edit_name" name="edit_name" value="{{ old('edit_name') }}" autocomplete="off" required>
                    <input type="hidden" class="form-control" id="edit_id" name="edit_id" value="{{ old('edit_id') }}" required>
                    <input type="hidden" class="form-control" id="edit_pos" name="edit_pos" value="{{ old('edit_pos') }}" required>
                    @error('edit_name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                  </div>
                  <div class="form-check">
                    <label class="form-check-label"><input class="form-check-input" id="edit_sts" name="edit_sts" @if( old('edit_sts') ) checked @endif type="checkbox"> Display as Menu</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    <!----- end models ----->

    <!----  edit Model ----->
      <div class="modal fade" id="editsubModal" style="display: none;" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="modal-title">Edit Sub-Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
              <div class="modal-body">
                <!-- form start -->
                <form role="form" action="{{ url('admin/category/editsub') }}" method="post">
                  @csrf
                  @method('PUT')
                  <div class="card-body">
                    <div class="form-group">
                      <label>Category Name</label>
                      <input type="text" class="form-control @error('edit_sub_name') is-invalid @enderror" id="edit_sub_name" name="edit_sub_name" value="{{ old('edit_sub_name') }}" autocomplete="off" required>
                      <input type="hidden" class="form-control" id="edit_sub_id" name="edit_sub_id" value="{{ old('edit_sub_id') }}" required>
                      @error('edit_sub_name')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label>Main-Category</label>
                        <select class="form-control @error('edit_mctg') is-invalid @enderror" id="edit_mctg" name="edit_mctg" required>
                          <option disabled selected value="">Select</option>
                          @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                          @endforeach
                        </select>
                        @error('edit_mctg')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-check">
                      <label class="form-check-label"><input class="form-check-input" id="edit_sub_sts" name="edit_sub_sts" @if( old('edit_sub_sts') ) checked @endif type="checkbox"> Display as Menu</label>
                    </div>
                  </div>
                  <!-- /.card-body -->

                  <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Update</button>
                  </div>
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

    @if($errors->has('edit_name'))
      $('#editModal').modal('show');
    @endif
    @if($errors->has('edit_sub_name') || $errors->has('edit_mctg'))
      $('#editsubModal').modal('show');
      var mctg = {{ old('edit_mctg') }};
      $("#edit_mctg").val(mctg);
    @endif

    $(".editmctg").click(function() {           
      var currentRow=$(this).closest("tr");             
      var id = currentRow.find("td:eq(1)").text();           
      var position = currentRow.find("td:eq(2)").text();           
      var sts = currentRow.find("td:eq(3)").text();           
      var name = currentRow.find("td:eq(4)").text();     

       console.log(id);               
       $("#edit_id").val(id);           
       $("#edit_name").val(name);           
       $("#edit_pos").val(position);

       if(sts == 1){
            $("#edit_sts").prop("checked", true);
        } else if(sts == 0){
            $("#edit_sts").prop("checked", false);
        }           

    });

    $(".editsub").click(function() {           
      var currentRow=$(this).closest("tr");             
      var id = currentRow.find("td:eq(1)").text();           
      var name = currentRow.find("td:eq(2)").text();     
      var mctg = currentRow.find("td:eq(3)").text();           
      var sts = currentRow.find("td:eq(4)").text();           
            
       $("#edit_sub_id").val(id);           
       $("#edit_sub_name").val(name);           
       $("#edit_mctg").val(mctg);

       if(sts == 1){
            $("#edit_sub_sts").prop("checked", true);
        } else if(sts == 0){
            $("#edit_sub_sts").prop("checked", false);
        }           

    });
  });

@endsection
