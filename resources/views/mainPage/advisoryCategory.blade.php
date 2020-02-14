@extends('masterPage')
@section('title')
Tư vấn
@endsection
@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$advisoryName}}</h4>

            </div>
        </div>
    </section>



    <!--================End Project Single Area =================-->
    <section class="latest_news_area">
        <div class="container" id="data">

        @include('mainPage.advisoryCategoryData')
            
        </div>
    </section>
    <!--================Our Latest Project Area =================-->
    <script src="{{ asset('/public/js/ajax-pagination.js')}}"></script>  
@endsection
