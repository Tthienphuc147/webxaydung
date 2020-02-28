@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết loại dịch vụ</span>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/service/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="idd"  name="idd" value="{{$serviceDetail->id}}" hidden="true">
                      
                    </div>
                </div>
                <p><label>Tên dịch vụ</label></p>
                <div class="form-group">
                
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="{{$serviceDetail->name_service}}" name="name">
                    </div>
                </div>
                <p><label>Nội dung</label></p>
                    <textarea name="noidung" id="demo" class="form-control ckeditor" rows="3" >
                        {!! $serviceDetail->content !!}
                        </textarea>
                <script>
                CKEDITOR.replace('demo', {
                    language: 'vi',
                    filebrowserBrowseUrl: '../../../public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
                </script>
                        
                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Sửa</span>
                  </div>
                
                </button>
                     </from>
                    </div>
@endsection

