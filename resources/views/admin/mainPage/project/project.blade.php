@extends('admin.masterPageAdmin')

@section('content')
    @if(Request()->session()->get('role')==1)
    <div class="card">
                            <h5 class="card-header">DỰ ÁN</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th style="width:12rem">Tên dự án</th>
                                                <th style="width:10rem">Tên khách hàng</th>
                                                <th>Tên chủ đầu tư</th>
                                                <th>Mô tả</th>
                                                <th style="width:10rem">Loại dự án</th>
                                                <th style="width:6rem">Thao tác</th>
                                                <th>Duyệt </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projectListCheck as $key=>$item)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->name_project}}</td>
                                                <td>{{$item->customer_name}}</td>
                                                <td>{{$item->investor}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->name}}</td>
                                                <td style="text-align:center"><a href="/admin/project/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                                <td><a href="/admin/project/changestatus/{{$item->id}}"><i class="fas fa-check"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $projectList->links() }}

                            
        </div>
    @endif
      <div class="card">
                            <h5 class="card-header">DỰ ÁN</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>STT</th>
                                                <th style="width:12rem">Tên dự án</th>
                                                <th style="width:10rem">Tên khách hàng</th>
                                                <th>Tên chủ đầu tư</th>
                                                <th>Mô tả</th>
                                                <th style="width:10rem">Loại dự án</th>
                                                <th style="width:6rem">Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($projectList as $key=>$item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->name_project}}</td>
                                                <td>{{$item->customer_name}}</td>
                                                <td>{{$item->investor}}</td>
                                                <td>{{$item->description}}</td>
                                                <td>{{$item->name}}</td>
                                                <td style="text-align:center"><a href="/admin/project/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $projectList->links() }}

                            
        </div>
                         
@endsection
