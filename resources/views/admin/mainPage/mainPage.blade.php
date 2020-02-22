@extends('admin.masterPageAdmin')

@section('content')
<h1>Video hướng dẫn sử dụng</h1>
<video controls width="100%">
  <source src="{{ asset('/public/assets/video/1.mp4')}}"  type="video/mp4">
</video>
@endsection
