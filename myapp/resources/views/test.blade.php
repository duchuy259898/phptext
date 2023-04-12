@extends('register')

@section('content')
<form method="POST" action="/login">
    <!-- Thêm các trường input cho form -->
    @csrf
    <input type="text" name="username" placeholder="Nhap username...">
    <input type="hidden" name="_method" value="POST">
    <!-- <input type="hidden" name="_token" value=""> -->
    <button type="submit">Đăng ký</button>
</form>
@endsection