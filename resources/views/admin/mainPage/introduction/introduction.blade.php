@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
      <div class="container-fluid p-0">
                     <form class="form-horizontal"  action="/admin/introduction" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                <p><label>Lịch sử</label></p>
                    <textarea name="history" id="demo" class="form-control ckeditor" rows="3" >
                        {!! $data->history !!}
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
    <br>
                 <p><label>Thông tin chung</label></p>
                    <textarea name="information" id="demo1" class="form-control ckeditor" rows="3" >
                        {!! $data->information !!}
                        </textarea>
                <script>
                CKEDITOR.replace('demo1', {
                    language: 'vi',
                    filebrowserBrowseUrl: '../../../public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
                </script>
<br>
                 <p><label>Dịch vụ</label></p>
                    <textarea name="service" id="demo2" class="form-control ckeditor" rows="3" >
                        {!! $data->service !!}
                        </textarea>
                <script>
                CKEDITOR.replace('demo2', {
                    language: 'vi',
                    filebrowserBrowseUrl: '../../../public/ckfinder/ckfinder.html',
                    filebrowserImageBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Images',
                    filebrowserFlashBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Flash',
                    filebrowserUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                    filebrowserImageUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                    filebrowserFlashUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                });
                </script>
<br>
                 <p><label>Sơ đồ công ty</label></p>
                    <img src="/public/image/diagram/{{$data->company_diagram}}" alt="chưa có">
                    <input id="image_url" name="image_url" class="form-control" type="file">

                <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff">  Sửa</span>
                  </div>

                </button>
                     </from>
                    </div>
@endsection

