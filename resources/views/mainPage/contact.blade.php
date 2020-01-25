@extends('masterPage')

@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4>Liên hệ</h4>

            </div>
        </div>
    </section>


    <section id="contact">

  <h2 class="section-header-contact">ĐẶT LỊCH TƯ VẤN THIẾT KẾ VÀ KHẢO SÁT DỰ ÁN VỚI DCONSTECH</h2>
        <div class="contact-wrapper">

            <!---------------- 
          
                CONTACT PAGE LEFT 
              
                ----------------->
          
            <form class="form-horizontal"  action="/contact/send" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="HỌ TÊN" name="full_name" value="" required>
                      
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="address" placeholder="ĐỊA CHỈ" name="address" value="" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="phone" placeholder="SỐ ĐIỆN THOẠI" name="phone" value="" required>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL" name="email" value="" required>
                    </div>
                </div>
                      <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="land_direction" placeholder="HƯỚNG DẤT" name="land_direction" value="">
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <select name="demand" id="demand" class="form-control">
                          <option value="Thiết kế" >Thiết kế</option>
                          <option value="Thi công">Thi công</option>
                      </select>
                    </div>
                </div>
                    <div class="form-group">
                    <div class="col-sm-6">
                       
                       <label for="file-upload" class="custom-file-upload">
    <i class="fa fa-cloud-upload"></i> Tải lên ảnh lô đất
</label>
<input id="file-upload" type="file" name="plot_map_image"/>
                    </div>
                    
                </div>
                  <div class="form-group">
                 
                      <div class="col-sm-6">
                       
                       <label for="file-upload-1" class="custom-file-upload ">
    <i class="fa fa-cloud-upload"></i> Tải lên ảnh khu đất
</label>
<input id="file-upload-1" type="file" name="land_image"/>
                    </div>
                </div>
               
                <textarea class="form-control" rows="10" placeholder="NỘI DUNG" name="message"></textarea>

                <button class="btn  send-button" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">GỬI LIÊN HỆ</span>
                  </div>
                
                </button>

            </form>
           
            <!---------------- 
          
                CONTACT PAGE RIGHT 
              
                ----------------->

            <div class="direct-contact-container">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3833.6272169221156!2d108.2346029148587!3d16.0848230888713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314218201ba38159%3A0xdcdb712d89331b21!2zMjQgVHLhuqduIFRow6FuaCBUw7RuZywgQW4gSOG6o2kgQuG6r2MsIFPGoW4gVHLDoCwgxJDDoCBO4bq1bmcgNTUwMDAw!5e0!3m2!1svi!2s!4v1579937282676!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Đà Nẵng</span></i></li>

                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="" title="Gọi điện">093 478 72 46</a></span></i></li>

                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Gửi email">	
                            dconstech.co@gmail.com</a></span></i></li>

                </ul>

                <hr>

                <hr>


            </div>

        </div>

    </section>

@endsection
