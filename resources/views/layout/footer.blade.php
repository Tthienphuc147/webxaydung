<footer class="footer_area">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0&appId=1942841682494119&autoLogAppEvents=1"></script>
    <div class="footer_widgets_area footer_bg">
        <div class="container">
            <div class="row footer_widgets_inner">
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <img src="{{ asset('/public/img/logo.png')}}" alt="" class="logo">
                        <p>Công Ty TNHH Tư Vấn Xây Dựng Và Thương Mại Dconstech</p>
                       
                    </aside>
                     <aside class="f_widget address_widget">
                        <div class="fb-page" data-height="200" data-href="https://www.facebook.com/dconstech/" data-tabs="timeline" data-width="" data-height="" data-small-header="true" data-adapt-container-width="true"   data-hide-cover="false"
  data-show-facepile="false">><blockquote cite="https://www.facebook.com/dconstech/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/dconstech/">Dconstech - Thiết kế và xây dựng Đà Nẵng</a></blockquote></div>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <div class="f_w_title">
                            <h3>DỰ ÁN</h3>
                        </div>
                        
                       <ul >
                                @foreach ($projectCategoryMenu as $item)
                            <li><a href="/categoryProject/{{$item->id}}" class="text-uppercase">{{$item->name}}</a></li>
                                @endforeach
                            
                              
                            </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget about_widget">
                        <div class="f_w_title">
                            <h3>DỊCH VỤ</h3>
                        </div>
                            <ul >
                                @foreach ($serviceCategoryMenu as $item)
                                     <li><a href="/serviceCategory/{{$item->id}}">{{$item->name}}</a></li>
                                @endforeach
                               
                            
                            </ul>
                    </aside>
                </div>
                <div class="col-md-3 col-sm-6">
                    <aside class="f_widget address_widget">
                        <div class="f_w_title">
                            <h3>Địa chỉ</h3>
                        </div>
                        <div class="address_w_inner">
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <p>189 Lê đình Lý ,Đà Nẵng</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <p>093 478 7246</p>
                                    <p>091 141 2274</p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <p>dconstech.co@gmail.com
                                    </p>
                                </div>
                            </div>
                        </div>
                    </aside>
                    
                   
                </div>

            </div>
        </div>
    </div>
    <div class="footer_copy_right" hidden="true">
        <div class="container">
            <div class="copy_right_inner">
                <div class="pull-left">
                    <h4 hidden=true>

                        Copyright &copy;
                        <script>
                            document.write(new Date().getFullYear());
                        </script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    </h4>
                </div>

            </div>
        </div>
    </div>
     <div class="footer_copy_right" >
        <div class="container">
            <div class="copy_right_inner">
                <div class="pull-left">
                    <h4 >
                      Developed by NOSN team | email:nghiadh2016@gmail.com
                    </h4>
                </div>

            </div>
        </div>
    </div>
</footer>
