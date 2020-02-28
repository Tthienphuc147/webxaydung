@extends('admin.masterPageAdmin')

@section('content')
      <div class="card">
                            <h5 class="card-header">DANH SÁCH USER</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>User Name</th>
                                                <th>User Pass</th>
                                                <th>Xóa User</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($dataUser as $key=>$item)
                                            <tr>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->username}}</td>
                                                <td>{{$item->password}}</td>
                                                <td style="display:flex;justify-content:center">
                                                    <a href="/admin/user/delete/{{$item->id}}">
                                                        <i class="fa fa-trash">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $dataUser->links() }}

                            
        </div>
                         
@endsection
