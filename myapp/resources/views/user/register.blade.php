@extends('app')
@section('content')
<div class="row">
    <div class="col md-6">
        @if($errors->any())<!--Hàm any() được sử dụng trong Laravel để kiểm tra xem biến $errors có chứa ít nhất một phần tử hay không. -->
        @foreach($errors->all() as $err)
        <p class="alert alert-danger">{{ $err }}</p>
        @endforeach
        @endif
        <form method="post" action="{{ route('register.action') }}">
            @csrf
            <div class="mb-3">
                <label>Name<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="name" value="{{old('name')}}"/><!--Khi người dùng nhập dữ liệu và submit form nhưng bị lỗi validation, các giá trị đã nhập sẽ được lưu trong session và được gọi bằng hàm old() để hiển thị lại trên form để người dùng có thể chỉnh sửa và submit lại. -->
            </div>
            <div class="mb-3">
                <label>Username<span class="text-danger">*</span></label>
                <input type="text" class="form-control" name="username" value="{{old('username')}}"/>
            </div>
            <div class="mb-3">
                <label>Password<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password"/>
            </div>
            <div class="mb-3">
                <label>Password Confirmation<span class="text-danger">*</span></label>
                <input type="password" class="form-control" name="password_confirmation"/>
            </div>
            <div class="mb-3">
                <button class="btn btn-primary">Register</button>
                <a class="btn btn-danger" href="{{route('home')}}">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection