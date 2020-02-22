@extends('admin.masterPageAdmin')

@section('content')
<script src="{{asset('../../public/ckeditor/ckeditor.js')}}"></script>
                   
   <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">CHI TIẾT DỰ ÁN</h5>
                                    <div class="card-body">
                                        <form  action="/admin/project/update" method="POST" enctype="multipart/form-data">
                                            {{csrf_field()}}
                                            <input type="text" class="form-control" id="idd" placeholder="id" name="idd" value="{{$projectDetail->id}}" hidden="true">
                                            <div class="form-group">
                                                <label for="name_project" class="col-form-label">Tên dự án</label>
                                                <input id="name_project" type="text" class="form-control" name="name_project"
                                                 placeholder="{{$projectDetail->name_project}}">
                                            </div>
                                             <div class="form-group d-flex flex-column">
                                                <label for="image" class="col-form-label">Ảnh giới thiệu</label>
                                                   <img src="/public/image/project/{{ $projectDetail->image}}" alt="" width="500px">
                                                <input id="image" type="file"  name="image" >

                                            </div>
                                              <div class="form-group">
                                                <label for="customer_name" class="col-form-label">Tên dự án</label>
                                                <input id="customer_name" type="text" class="form-control" name="customer_name"
                                                placeholder="{{$projectDetail->customer_name}}">
                                            </div>
                                             <div class="form-group">
                                                <label for="investor" class="col-form-label">Chủ đầu tư</label>
                                                <input id="investor" type="text" class="form-control" name="investor"
                                                placeholder="{{$projectDetail->investor}}">
                                            </div>
                                               <div class="form-group">
                                                <label for="description">Mô tả</label>
                                                <textarea class="form-control" id="description" rows="3" name="description" placeholder="{{$projectDetail->description}}"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="land_area" class="col-form-label">Diện tích đất</label>
                                                <input id="land_area" type="text" class="form-control" name="land_area" placeholder="{{$projectDetail->land_area}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="building_area" class="col-form-label">Diện tích xây dựng</label>
                                                <input id="building_area" type="text" class="form-control" name="building_area" placeholder="{{$projectDetail->building_area}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="construction_progresss" class="col-form-label">Tiến độ hoàn thành</label>
                                                <input id="construction_progresss" type="text" class="form-control" name="construction_progresss"
                                                placeholder="{{$projectDetail->construction_progress}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="total_amount" class="col-form-label">Tổng kinh phí xây dựng</label>
                                                <input id="total_amount" type="text" class="form-control" name="total_amount"
                                                placeholder="{{$projectDetail->total_amount}}">
                                            </div>
                                            <div class="form-group">
                        
                        <select name="project_category_id" class="form-control">
                             <option value="{{$projectDetail->project_category_id}}">{{$projectDetail->name}}</option>
                        @foreach ($projectCategory as $key=>$item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                        @endforeach
                        </select>
                      </div>
                                               <textarea name="content"  class="form-control" rows="3" id="demo"  >{{$projectDetail->content}}</textarea>
                                                  <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff;margin:10px">  Sửa</span>
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
                                filebrowserBrowseUrl: '../../public/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '../../public/ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl: '../../public/ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: '../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                </script>
@endsection

