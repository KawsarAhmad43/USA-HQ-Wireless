@extends('back-end.admin')

{{-- content section --}}
@section('content')

<div class="row ml-2">
    <!-- left column -->
    <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
                <h2 class="card-title">Create Featured Card</h2>
            </div>
            <!-- /.card-header -->
            <!-- form start -->






            <form role="form" action="{{route('featuredstore')}}" method="post" enctype="multipart/form-data">
                {{-- {{route('backend.category.store')}} --}}
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label>Card Title</label>
                        <input type="text" class="form-control" name="name" value="{{ old("name") }}"
                            placeholder="Enter name">
                    </div>
                   



                    <div class="form-group">
                        <img src="" id="preview" height="150px"
                            width="150px">
                            {{-- {{asset('backend/defaults/default-image.jpg')}} --}}
                    </div>

                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" name="image" class="custom-file-input" id="imageUpload">
                                <label class="custom-file-label">Choose file</label>
                            </div>
                        </div>
                    </div>
               

                    
                    <div class="form-group">
                        <label>Category Link</label>
                        <input type="text" class="form-control" name="category_link"
                            placeholder="Enter the link">
                    </div>
                   



                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
















        </div>
    </div>
    <!--/.col (left) -->






</div>





<!--/.col (right) -->


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