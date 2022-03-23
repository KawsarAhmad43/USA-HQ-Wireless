@extends('back-end.vendor.layout.master')

@section('title')
view Products
@endsection

@section('content')

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">All Products</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive">
                        <div class="dataTables_wrapper dt-bootstrap4">
                            <table id="products" class="table table-bordered table-hover dataTable" role="grid"
                                aria-describedby="products">
                                <thead>
                                    <tr>
                                        <th>SL#</th>
                                        <th>Image</th>
                                        <th>Title</th>
                                        <th>Seller Name</th>
                                        <th>Item Code</th>
                                        <th>Reqular Price</th>
                                        <th>Standard Price</th>
                                        <th>Publish Date</th>

                                    </tr>
                                </thead>

                            </table>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>

            </div>
        </div>
    </div>
    <!--/. container-fluid -->
    <div class="modal fade" id="modal-delete">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-header">
                    <h4 class="modal-title">Delete Confirm</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete the item?</p>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">No</button>
                    <form action="" method="post" id="deleteform">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-light">Yes</button>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

</section>

@endsection

@section('script')
@foreach(['success','error'] as $type)
    @if(Session::has('msg-'.$type))
      toastr.{{ $type }}('{{ Session::get('msg-'.$type) }}');
    @endif
@endforeach
$(document).ready(function(){
    $("#products").DataTable({
      pageLength: 25,
      processing: true,
      serverSide: true,
      ajax:{
        url: "{{ url('/vendor/products/view') }}",
      },
      columns:[
        {
          data: 'DT_RowIndex',
          name: 'DT_RowIndex'
        },
        {
          data: 'img1',
          name: 'img1',
          render: function(data,type,full,meta){
            return "<img src={{ URL::to('/') }}/image/product_image/"+data+" width='70' />";
          },
          orderable: false
        },
        {
          data: 'title',
          name: 'title'
        },
        {
          data: 'name',
          name: 'name'
        },
        {
          data: 'pcode',
          name: 'pcode'
        },
        {
          data: 'rprice',
          name: 'rprice'
        },
        {
          data: 'sprice',
          name: 'sprice'
        },
        {
          data: 'pdate',
          name: 'pdate'
        }
        
      ]
    });
    
});

@endsection




