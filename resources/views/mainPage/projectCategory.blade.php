@extends('masterPage')
@section('title')
Dự án
@endsection
@section('content')
  <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$projectCategoryName}}</h4>
            </div>
        </div>
    </section>

    <section class="our_project2_area">
        <div class="container" id="data">

        @include('mainPage.projectCategoryData')
         
        </div>
    </section>
    <script src="{{ asset('/public/js/ajax-pagination.js')}}"></script>  
@endsection
