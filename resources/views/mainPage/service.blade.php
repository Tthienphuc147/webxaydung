@extends('masterPage')
@section('title')
Dịch vụ
@endsection
@section('content')
     <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>@if ($service!=null)
                    {{$service->name_service}}
                @endif</h4>

            </div>
        </div>
    </section>


       <section class="our_latest_project">
        <div class="container">
           @if ($service!=null)
                      {!!$service->content!!}
                @endif
         

        </div>
    </section>


@endsection
