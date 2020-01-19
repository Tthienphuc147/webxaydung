@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
                   
   <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">THÊM DỰ ÁN</h5>
                                    <div class="card-body">
                                        <form  action="/admin/project/add" method="POST" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                            <div class="form-group">
                                                <label for="name_project" class="col-form-label">Tên dự án</label>
                                                <input id="name_project" type="text" class="form-control" name="name_project" required
                                               >
                                            </div>
                                             <div class="form-group">
                                                <label for="image" class="col-form-label">Ảnh giới thiệu</label>
                                                  
                                                <input id="image" type="file"  name="image" required >

                                            </div>
                                              <div class="form-group">
                                                <label for="customer_name" class="col-form-label">Tên dự án</label>
                                                <input id="customer_name" type="text" class="form-control" name="customer_name" required
                                             >
                                            </div>
                                             <div class="form-group">
                                                <label for="investor" class="col-form-label">Chủ đầu tư</label>
                                                <input id="investor" type="text" class="form-control" name="investor" required
                                                >
                                            </div>
                                               <div class="form-group">
                                                <label for="description">Mô tả</label>
                                                <textarea class="form-control" id="description" rows="3" name="description" required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="land_area" class="col-form-label">Diện tích đất</label>
                                                <input id="land_area" type="number" class="form-control" name="land_area" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="building_area" class="col-form-label">Diện tích xây dựng</label>
                                                <input id="building_area" type="number" class="form-control" name="building_area" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="construction_progress" class="col-form-label">Tiến độ hoàn thành</label>
                                                <input id="construction_progress" type="number" class="form-control" name="construction_progress" required
                                               >
                                            </div>
                                            <div class="form-group">
                                                <label for="total_amount" class="col-form-label">Tổng kinh phí xây dựng</label>
                                                <input id="total_amount" type="number" class="form-control" name="total_amount" required
                                               >
                                            </div>
                                              <div class="form-group">
                        
                        <select name="project_category_id" class="form-control">
                        @foreach ($projectCategory as $key=>$item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                      </div>
                                               <textarea name="content"  class="form-control" rows="3" id="demo" ></textarea>
                                                  <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff;margin:10px">Thêm</span>
                  </div>
                
                </button>
                                        </form>
                                    </div>
                                    
                                </div>
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
@endsection

