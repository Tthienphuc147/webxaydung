@extends('admin.masterPageAdmin')

@section('content')
<div class="card">
                            <h5 class="card-header">DANH SÁCH BÌNH LUẬN</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>STT</th>
                                                <th>Bình luận</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($commentList as $key=>$item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->content}}</td>
                                                <td style="display:flex;justify-content:center">
                                                @if($item->status==0)<button class="btn btn-success"><a href="/admin/comment/accept/{{$idpost}}/{{$item->id}}" style="color:white">Đồng ý</a></button>
                                                @else <button class="btn btn-danger"><a href="/admin/comment/denife/{{$idpost}}/{{$item->id}}"style="color:white">Từ Chối</a></button></td>
                                                @endif
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $commentList->links() }}

                            
        </div>
                         
@endsection
