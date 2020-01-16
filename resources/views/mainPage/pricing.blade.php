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


       <section class="our_latest_project">
        <div class="container">
         
           @if ($pricing!=null)
                      {!!$pricing->content!!}
                @endif

        </div>
    </section>


@endsection
