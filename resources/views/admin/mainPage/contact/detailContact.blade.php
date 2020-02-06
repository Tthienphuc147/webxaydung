@extends('admin.masterPageAdmin')

@section('content')
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết liên hệ</span>
                                   
                                </div>
                            </div>
                            <div class="email-head-sender">
                                
                              
                                <div class="sender"><a href="#">{{$contactDetail->full_name}}</a> gửi liên hệ đến <a href="#">Dconstech</a>
                                
                                </div>
                            </div>
                        </div>
                        <div class="email-body">
                            <div class="row">
                                <div class="col-sm-3">
                                        @if ($contactDetail->address)
                                              <p>Địa chỉ: {{$contactDetail->address}}</p>
                                        @endif
                                      
                                           @if ($contactDetail->email)
                                             <p>Email: {{$contactDetail->email}}</p>
                                        @endif
                                       
                                           @if ($contactDetail->phone)
                                             <p>Sđt: {{$contactDetail->phone}}</p>
                                        @endif
                                       
                                           @if ($contactDetail->demand)
                                              <p>Nhu cầu cần liên hệ:{{$contactDetail->demand}}</p>
                                        @endif
                                      
                                           @if ($contactDetail->type)
                                            <p>Loại công trình:{{$contactDetail->type}}</p>
                                        @endif
                                        
        
                                        @if ($contactDetail->type == "Loại khác")
                                            <p>Yêu cầu riêng:{{$contactDetail->other}}</p>
                                        @endif 
                                        @if ($contactDetail->land_direction)
                                               <p>Hướng đất: {{$contactDetail->land_direction}}</p>
                                        @endif
                                     
                                        @if ($contactDetail->message)
                                            <p>Nội dung:{{$contactDetail->message}}</p>
                                        @endif
                                        
                                </div>
                                <div class="col-sm-4">
                                       @if ($contactDetail->plot_map_image!=null)
                                       <p>Ảnh sơ đồ lô đất</p>
                         
                                   <img src="/public/image/contact/{{$contactDetail->plot_map_image}}" alt="" width="100%" height="400px">
                            @endif
                             
                          
                                </div>
                                 <div class="col-sm-4">
                                    @if ($contactDetail->land_image!=null)   
                            <p>Ảnh khu đất</p>
                           
                                 <img src="/public/image/contact/{{$contactDetail->land_image}}" alt="" width="100%" height="400px">
                            @endif
                                </div>
                            </div>
                            
                         
                           
                            
                           
                        </div>
                        <button class="btn btn-primary"><a href="/admin/contactDetail/change/{{$contactDetail->id}}" style="color:#fff">Chuyển Trạng Thái Đã Xử Lý</a></button>
                     
                    </div>
@endsection

