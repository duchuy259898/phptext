@extends('users01.layout')
@section('content')
<div class="seation__container-header">
	<h1  style="color: red;text-align:center" font-size="30px">Home Page</h1>
</div>
    <div class="seation__container-auth-button-share">
        <a href="{{url('/users01/create')}}"><button class="btn btn--primary" type="submit">新規登録</button></a>
        <a href=""><button class="btn btn--primary" type="submit">ログイン</button></a>
        <a href=""><button class="btn btn--primary" type="submit">パスワード変更</button></a>
	</div>
@endsection