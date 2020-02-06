@extends('admin.masterPageAdmin')

@section('content')
      <div class="card">
                            <h5 class="card-header">DANH SÁCH LIÊN HỆ</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>Họ và tên</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                                <th>Nhu cầu</th>
                                                <th>Loại công trình</th>
                                                <th>Ngày</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contactList as $item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$item->full_name}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->demand}}</td>
                                                <td>{{$item->type}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                <td style="display:flex;justify-content:center"><a href="/admin/contactDetail/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $contactList->links() }}

                            <h5 class="card-header">DANH SÁCH LIÊN HỆ ĐÃ XỬ LÝ</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>Họ và tên</th>
                                                <th>Địa chỉ</th>
                                                <th>Email</th>
                                                <th>Nhu cầu</th>
                                                <th>Nội dung</th>
                                                <th>Ngày Xử Lý</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($contactListAccept as $item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$item->full_name}}</td>
                                                <td>{{$item->address}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{$item->demand}}</td>
                                                <td>{{$item->message}}</td>
                                                <td>{{$item->updated_at}}</td>
                                                
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $contactListAccept->links() }}
        </div>
                         
@endsection
