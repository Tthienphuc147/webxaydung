@extends('admin.masterPageAdmin')

@section('content')
      <div class="card">
                            <h5 class="card-header">DANH MỤC ĐÁNH GIÁ KHÁCH HÀNG</h5>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered first">
                                        <thead>
                                            <tr>
                                                <th hidden="true">Id</th>
                                                <th>STT</th>
                                                <th>Tên khách hàng</th>
                                                <th>Đánh giá</th>
                                                <th>Thao tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($feedBackList as $key=>$item)
                                            <tr>
                                                <td hidden="true">{{$item->id}}</td>
                                                <td>{{$key+1}}</td>
                                                <td>{{$item->customer_name}}</td>
                                                <td>{{$item->feedback}}</td>
                                                <td style="display:flex;justify-content:center"><a href="/admin/feedback/{{$item->id}}"><i class="fas fa-eye"></i></a></td>
                                            </tr>
                                            @endforeach
                                           
                                        </tbody>
                                    </table>
                                </div>
                                
                            </div>
                            {{ $feedBackList->links() }}

                            
        </div>
                         
@endsection
