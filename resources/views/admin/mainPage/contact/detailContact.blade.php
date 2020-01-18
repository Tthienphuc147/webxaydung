@extends('admin.masterPageAdmin')

@section('content')
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết liên hệ</span>
                                   
                                </div>
                            </div>
                            <div class="email-head-sender">
                                
                              
                                <div class="sender"><a href="#">{{$contactDetail->full_name}}</a> To <a href="#">Dconstech</a>
                                
                                </div>
                            </div>
                        </div>
                        <div class="email-body">
                            <p>Địa chỉ: {{$contactDetail->address}}</p>
                            <p>Email: {{$contactDetail->email}}</p>
                            <p>Sđt: {{$contactDetail->phone}}</p>
                            <p>Nhu cầu cần liên hệ:{{$contactDetail->demand}}</p>
                            <p>Nội dung:{{$contactDetail->message}}</p>
                            <p>Hướng đất: {{$contactDetail->land_direction}}</p>
                            <p>Ảnh sơ đồ lô đất</p>
                            @if ($contactDetail->plot_map_image!=null)
                                   <img src="/public/image/contact/{{$contactDetail->plot_map_image}}" alt="" width="300px" height="300px">
                            @endif
                         
                            <p>Ảnh khu đất</p>
                            @if ($contactDetail->land_image!=null)
                                 <img src="/public/image/contact/{{$contactDetail->land_image}}" alt="" width="300px" height="300px">
                            @endif
                           
                            
                           
                        </div>
                        <button class="btn btn-primary"><a href="/admin/contactDetail/change/{{$contactDetail->id}}">Chuyển Trạng Thái Đã Xử Lý</a></button>
                     
                    </div>
@endsection

