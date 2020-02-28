@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết bài viết</span>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/post/add" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    
                </div>
                <p><label>Tên bài viết</label></p>
                <div class="form-group">
                
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="" name="name" required>
                    </div>
                </div>
                <p><label>Mô tả tóm tắt</label></p>
                    <textarea name="tomtat"  class="form-control" rows="3" required>
                        
                        </textarea>
                <p><label>Nội dung</label></p>
                    <textarea name="noidung" id="demo" class="form-control ckeditor" rows="3" >
                       
                        </textarea>
                        <label>Chọn danh mục tư vấn</label>
                        <div class="col-md-6">
                    <div class="form-group">
                        
                        <select name="category" class="form-control">
                        @foreach ($postCategory as $key=>$item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                      </div>
                </div>
                        <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label for="anhgioithieu">Ảnh giới thiệu</label>
                    <input type="file" name="anhgioithieu" id="anhgioithieu" required>
                    
                  </div>


                </div>
                    
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
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Thêm</span>
                  </div>
                
                </button>
                     </from>
                    </div>
@endsection

