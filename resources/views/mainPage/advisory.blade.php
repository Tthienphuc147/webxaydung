@extends('masterPage')
@section('title')
{{$advisory->name_post}}
@endsection
@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4><a href="/">Trang chủ</a> / <a href="/advisoryCategory/{{$advisory->post_category_id}}">{{$advisory->name}}</a> / {{$advisory->name_post}}</h4>
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
                                    <form  action="/admin/comment/add" method="POST" enctype="multipart/form-data">
                                        {{csrf_field()}}
                                        <input name="idpost" hidden="true" value="{{$advisory->id}}">
                                        <textarea class="form-control" name="comment" placeholder="Viết bình luận..." rows="3" style="min-width:100%"></textarea>
                                        <br>
                                        <button  class="btn btn-info pull-right btn-comment" id="submit" type="submit" value="SEND">Bình luận</button>
                                        </form>
                                        <div class="clearfix"></div>
                                        <hr>
                                        <ul class="media-list">
                                        @foreach ($listComment as $key=>$item)
                                            <li class="media">
                                                <a href="#" class="pull-left">
                                                    <img src="https://bootdey.com/img/Content/user_1.jpg" alt="" class="img-circle">
                                                </a>
                                                
                                                <div class="media-body">
                                                    
                                                    <strong class="text-success">Khách Hàng</strong>
                                                    <p>
                                                        {{$item->content}}
                                                    </p>
                                                </div>
                                            </li>
                                    @endforeach
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
