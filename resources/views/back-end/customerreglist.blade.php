@php
   
   $registration = \App\CustomerReg::all();

@endphp


@extends('back-end.admin')

{{-- content section --}}
@section('content')

<div class="row">
  

    <!-- right column -->
    <div class="col-md-12">

        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Registered Customer List</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
                <table class="table table-bordered" style="width: 100%;">
                    
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>ID</th>
                            <th>Username</th>
                            <th style="width: 80px">First name</th>
                            <th style="width: 80px">Last name</th>
                            <th style="width: 80px">Telephone</th>
                            <th style="width: 80px">Email</th>
                            <th style="width: 80px">Password</th>
                            <th>State</th>
                            <th>City</th>
                            <th>Post Code</th>
                            <th>Company</th>
                            <th>street 1</th>
                            <th>TaxVat</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $serial=1;
                        @endphp
                        @forelse($registration as $reg)
                        <tr>
                            <td>{{$serial}}</td>
                            @php
                            $serial++;
                            @endphp
                            <td>{{ $reg->id}}</td>
                            <td>{{ $reg->username}}</td>
                            <td>{{ $reg->firstname}}</td>
                            <td>{{ $reg->lastname}}</td>
                            <td>{{ $reg->telephone}}</td>
                            <td>{{ $reg->email}}</td>
                            <td>{{ $reg->password}}</td>
                            <td>{{ $reg->state}}</td>
                            <td>{{ $reg->city}}</td>
                            <td>{{ $reg->postcode}}</td>
                            <td>{{ $reg->company}}</td>
                            <td>{{ $reg->street1}}</td>
                            <td>{{ $reg->taxvat}}</td>



                            <td>
                                {{-- {{route('featureddestroy',$reg->id)}} --}}
                                <a href=""
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>

                        @empty

                        @endforelse

                    </tbody>
                </table>
            </div>
            <!-- pagination-->
            {{-- <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                    {!! $reg->links() !!}
                </ul>
            </div> --}}
        </div>
        <!-- /.pagination -->
        <!-- /.card-body -->
    </div>




</div>





<!--/.col (right) -->
</div>

@endsection

@section('js')

<script>
    imageUpload.onchange = evt => {
        const [file] = imageUpload.files
        if (file) {
            preview.src = URL.createObjectURL(file)
            preview.style.height = '150px';
            preview.style.width = '150px';
        }
    }
</script>

@endsection