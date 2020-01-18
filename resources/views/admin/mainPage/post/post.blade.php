@extends('admin.masterPageAdmin')

@section('content')
      <div class="card">
                            <h5 class="card-header">DANH SÁCH BÀI VIẾT TƯ VẤN</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>STT</th>
                                                <th>Tên bài viết</th>
                                                <th>Mô tả</th>
                                                <th>Ngày viết</th>
                                                <th>Mục tư vấn</th>
                                                <th> Quản lý comment</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($postList as $key=>$item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->name_post}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->date}}</td>
                                                <td>{{$item->name}}
                                                <td><button class= "btn btn-primary"><a href="/admin/comment/{{$item->id}}"style="color: white">Comment</a></button></td>
                                                <td style="display:flex;justify-content:center"><a href="/admin/post/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $postList->links() }}

                            
        </div>
                         
@endsection
