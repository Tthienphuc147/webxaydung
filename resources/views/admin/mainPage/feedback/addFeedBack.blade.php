@extends('admin.masterPageAdmin')

@section('content')
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Thêm đánh giá khách hàng</span>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/feedback/add" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                
                    <p><label>Tên khách hàng</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="Tên khách hàng" name="name" value="" required>
                    </div>
                </div>

                <p><label>Đánh giá</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <textarea name="feedback" class="form-control ckeditor" rows="3" required placeholder="Đánh giá" ></textarea>
                    </div>
                </div>
                        
                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Thêm</span>
                  </div>
                
                </button>
                     </form>
                    </div>
@endsection

