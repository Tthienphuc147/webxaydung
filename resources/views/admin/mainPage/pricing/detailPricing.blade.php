@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
      <div class="container-fluid p-0">
                        <div class="email-head">
                            <div class="email-head-subject">
                                <div class="title"><a class="active" href="#"><span class="icon"><i class="fas fa-star"></i></span></a> <span>Chi tiết bảng giá</span>
                                   
                                </div>
                            </div>
                        </div>
                        <form class="form-horizontal"  action="/admin/pricing/update" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="idd"  name="idd" value="{{$pricingDetail->id}}" hidden="true">
                      
                    </div>
                </div>
                <p><label>Tên bảng giá</label></p>
                <div class="form-group">
                
                    <div class="col-sm-12">
                        <input type="text" class="form-control" id="name" placeholder="{{$pricingDetail->name_pricing}}" name="name">
                    </div>
                </div>
              
                <p><label>Nội dung</label></p>
                    <textarea name="noidung" id="demo" class="form-control ckeditor" rows="3" >
                        {!! $pricingDetail->content !!}
                        </textarea>
                        <label>Chọn danh mục bảng giá</label>
                        <div class="col-md-6">
                    <div class="form-group">
                        
                        <select name="category" class="form-control">
                        @foreach ($pricingCategory as $key=>$item)
                          <option value="{{$item->id}}">{{$item->name_pricing_category}}</option>
                        @endforeach
                        </select>
                      </div>
                </div>
                    
             
                <script>
                CKEDITOR.replace('demo', {
                    language: 'vi',
                    filebrowserBrowseUrl: '../../public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '../../public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '../../public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
                </script>
                        
                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Sửa</span>
                  </div>
                
                </button>
                     </form>
                    </div>
@endsection

