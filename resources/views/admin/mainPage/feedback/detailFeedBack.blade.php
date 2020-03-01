@extends('admin.masterPageAdmin')

@section('content')
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết đánh giá khách hàng</span>

                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/feedback/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="idd" placeholder="HỌ TÊN" name="idd" value="{{$feedBackDetail->id}}" hidden="true">

                    </div>
                </div>
                <p><label>Tên khách hàng</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" value="{{$feedBackDetail->customer_name}}" name="name"  required>
                    </div>
                </div>

                <p><label>Đánh giá</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="feedback" value="{{$feedBackDetail->feedback}}" name="feedback"  required>
                    </div>
                </div>

                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Sửa</span>
                  </div>

                </button>
                     </form>
                    </div>
@endsection

