@extends('masterPage')

@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>{{$advisory->name_post}}</h4>

            </div>
        </div>
    </section>



    <!--================End Project Single Area =================-->
    <section class="blog_details_area p_100">
        <div class="container">
            <div class="row blog_details_inner">
                <div class="col-md-8">
                    <div class="blog_details_img">
                        <img src="/public/image/advisory/{{$advisory->image}}" alt="">
                        <div class="b_date">
                            <h3>{{Carbon\Carbon::createFromFormat('Y-m-d', $advisory->date)->day}}</h3>
                            <h5>Tháng {{Carbon\Carbon::createFromFormat('Y-m-d', $advisory->date)->month}}, {{Carbon\Carbon::createFromFormat('Y-m-d', $advisory->date)->year}}</h5>
                        </div>
                    </div>
                    <div class="blog_d_text">
                        <h6>Đăng bởi <a href="#">Dconstech</a></h6>
                        <a href="#">
                            <h3>{{$advisory->name_post}}</h3>
                        </a>
                        {!!$advisory->content!!}




                    </div>
                    <div class="row bootstrap snippets " style="margin-top:50px">
    <div class="">
        <div class="comment-wrapper">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Bình luận bài viết
                </div>
                <div class="panel-body">
                    <textarea class="form-control" placeholder="Viết bình luận..." rows="3" style="min-width:100%"></textarea>
                    <br>
                    <button type="button" class="btn btn-info pull-right btn-comment">Bình luận</button>
                    <div class="clearfix"></div>
                    <hr>
                    <ul class="media-list">
                        <li class="media">
                            <a href="#" class="pull-left">
                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                            </a>
                            <div class="media-body">
                                <span class="text-muted pull-right">
                                    <small class="text-muted">30 min ago</small>
                                </span>
                                <strong class="text-success">@MartinoMont</strong>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                    Lorem ipsum dolor sit amet, <a href="#">#consecteturadipiscing </a>.
                                </p>
                            </div>
                        </li>
                   
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>


                </div>
                <div class="col-md-4">
                    <div class="sidebar_area">
                        <aside class="right_widget r_post_widget">
                            <div class="r_w_title">
                                <h3>Bài viết liên quan</h3>
                            </div>
                            <div class="r_post_inner">
                                @foreach ($advisoryCategory as $item)
                                      <div class="r_post_item">
                                    <a href="/advisory/{{$item->id}}" style="cursor: pointer"><img src="/public/image/advisory/{{$item->image}}" alt=""></a>
                                    <a href="/advisory/{{$item->id}}">
                                        <p>{{$item->name_post}}</p>
                                    </a>
                                </div>
                                @endforeach
                              
                               
                            </div>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
