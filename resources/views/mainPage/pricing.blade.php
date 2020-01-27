@extends('masterPage')

@section('content')
     <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>@if ($pricing!=null)
                    {{$pricing->name_pricing}}
                @endif</h4>

            </div>
        </div>
    </section>


       <section class="blog_details_area p_100">
        <div class="fuild-container">
            <div class="row blog_details_inner">
                <div class="col-md-12" style="padding-right:0px">
                    <div class="blog_d_text blog_table">
                            @if ($pricing!=null)
                                {!!$pricing->content!!}
                         @endif
                    </div>
                


                </div>
              
            </div>
        </div>
    </section>


@endsection
