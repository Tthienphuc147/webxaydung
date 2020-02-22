@extends('admin.masterPageAdmin')

@section('content')
   <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                               
                                <div class="card">
                                    <h5 class="card-header">SỬA SLIDE</h5>
                                    <div class="card-body">
                                        <form  action="/admin/slide/update" method="POST" enctype="multipart/form-data">
                                          {{csrf_field()}}
                                            </div>
                                             <div class="form-group">
                                                <label for="image" class="col-form-label">Ảnh slide</label>
                                                <img src="/public/image/slide/{{$slide->image_url}}" alt="" width="300px">
                                                <input id="image" type="file"  name="image_url"  >

                                            </div>
                          
                                                  <button class="btn btn-primary" id="submit" type="submit" value="SEND">
                  <div class="button">
                    <i class="fa fa-paper-plane" style="color:#fff"></i><span class="send-text" style="color:#fff;margin:10px">Sửa</span>
                  </div>
                
                </button>
                                        </form>
                                    </div>
                                    
                                </div>
                            </div>
              
@endsection

