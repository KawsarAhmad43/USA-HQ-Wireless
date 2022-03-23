@extends('front-end.master')

@section('title')
{{ $page->title }}
@endsection

@section('content')

<section class="best_seller_product" style="background-color: #fff;padding-bottom: 10px" id="main_content_area">

    <div class="container" style="padding-right:0px">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 " style="padding-left: 0px">
                <div class="panel panel-success">
                    <div class="panel-heading"><strong style="font-size: 22px;color: #3c763d"><i class="fa fa-info-circle" style="color: #3c763d"> </i> {{ $page->title }} </strong></div>
                    <div class="panel-body" style="padding-left: 30px;padding-right: 30px">
                        {!! $page->description !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
