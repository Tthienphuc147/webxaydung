@extends('admin.masterPageAdmin')

@section('content')
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Đổi mật khẩu {{$user->username}}</span>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/user/changed" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                
                    <p><label>User name</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        {{$user->username}}
                    </div>
                </div>
                <p><label>User Pass</label></p>
                <div class="form-group">
                    <div class="col-sm-12">
                        <input type="password" class="form-control" id="pass" placeholder="{{$user->password}}" name="pass" value="" required>
                    </div>
                </div>
                        
                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Thay đổi</span>
                  </div>
                
                </button>
                     </form>
                    </div>
@endsection

