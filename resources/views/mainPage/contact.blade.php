@extends('masterPage')
@section('title')
Liên hệ
@endsection
@section('content')
   <section class="banner_area" style="background: url(../public/img/banner/single-page-banner2.jpg); background-size: cover">
        <div class="container">
            <div class="banner_inner_text">
                <h4><a href="/">Trang chủ</a> / Liên hệ</h4>

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
                        <input type="text" class="form-control" id="name" placeholder="HỌ TÊN (*)" name="full_name" value="" required>
                      
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="address" placeholder="ĐỊA CHỈ" name="address" value="" >
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="number" class="form-control" id="phone" placeholder="SỐ ĐIỆN THOẠI (*)" name="phone" value="" required>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-12">
                        <input type="email" class="form-control" id="email" placeholder="EMAIL(*)" name="email" value="" >
                    </div>
                </div>
                      <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="land_direction" placeholder="HƯỚNG DẤT" name="land_direction" value="">
                    </div>
                </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                      <select name="demand" id="demand" class="form-control" >
                          <option value="" >-- Lựa chọn loại tư vấn --</option>
                          <option value="Thiết kế" >Thiết kế</option>
                          <option value="Thi công">Thi công</option>
                      </select>
                    </div>
                </div>
                 <div class="form-group">
                    <div class="col-sm-12">
                      <select name="type" id="type" class="form-control" >
                          <option value="" >-- Lựa chọn loại công trình --</option>
                          <option value="Nhà phố, liên kế" >Nhà phố, liên kế</option>
                          <option value="Biệt thự">Biệt thự</option>
                          <option value="Văn phòng-Khách sạn">Văn phòng-Khách sạn</option>
                          <option value="Loại khác">Loại khác</option>
                      </select>
                    </div>
                     
                </div>
                  <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="other" placeholder="Yêu cầu riêng" name="other" value="">
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.268145758468!2d108.20781361485831!3d16.05156918889181!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314219b9a4b0353f%3A0xc4d491aadaf560ce!2zMTg5IEzDqiDEkMOsbmggTMO9LCBIw7JhIFRodeG6rW4gTmFtLCBI4bqjaSBDaMOidSwgxJDDoCBO4bq1bmcgNTUwMDAw!5e0!3m2!1svi!2s!4v1581008336962!5m2!1svi!2s" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                <ul class="contact-list">
                    <li class="list-item"><i class="fa fa-map-marker fa-2x"><span class="contact-text place">Đà Nẵng</span></i></li>

                    <li class="list-item"><i class="fa fa-phone fa-2x"><span class="contact-text phone"><a href="" title="Gọi điện">093 478 7246 / 091 141 2274</a></span></i></li>

                    <li class="list-item"><i class="fa fa-envelope fa-2x"><span class="contact-text gmail"><a href="mailto:#" title="Gửi email">	
                            dconstech.co@gmail.com</a></span></i></li>

                </ul>

                <hr>

                <hr>


            </div>

        </div>

    </section>

@endsection
