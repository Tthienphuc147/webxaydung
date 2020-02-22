@extends('admin.masterPageAdmin')

@section('content')
      <div class="card">
                            <h5 class="card-header">DANH SÁCH SLIDE</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>STT</th>
                                        
                                                <th>Ảnh slide</th>
                                           
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($slideList as $key=>$item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$key+1}}</td>
                                                <td><img src="/public/image/slide/{{$item->image_url}}" alt="" width="500px"></td>
                                                <td style="display:flex;justify-content:center"><a href="/admin/slide/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $slideList->links() }}

                            
        </div>
                         
@endsection
