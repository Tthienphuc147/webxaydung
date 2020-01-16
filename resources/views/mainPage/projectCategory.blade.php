@extends('masterPage')

@section('content')
  <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$projectCategoryName}}</h4>
            </div>
        </div>
    </section>

    <section class="our_project2_area">
        <div class="container">


            <div class="row our_project_details">
                @foreach ($project as $item)
                     <div class="col-md-4 col-sm-6 building isolation interior">
                    <div class="project_item">
                        <img src="/public/image/project/{{ $item->image}}" alt="">

                        <div class="project_hover">
                            <div class="project_hover_inner">
                                <div class="project_hover_content">
                                    <a href="/project/{{ $item->id}}">
                                        <h4>{{$item->name}}</h4>
                                    </a>
                                    <p>{{$item->description}}</p>
                                    <a class="view_btn" href="/project/{{ $item->id}}">Xem thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               
   
            </div>
        </div>
    </section>

@endsection
