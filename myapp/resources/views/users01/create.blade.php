@extends('users01.layout')
@section('content')
    <div class="seation__container-header">
            <h1 class="seation__container-heading">新規登録</h1>
        </div>
        <!-- login -->
        <form method="post" action="{{ url('users01') }}">
        @csrf
        <div class="seation__container-auth-form">
            <div class="seation__container-form-group">
                <label for="email" class="seation__container-form-label">メールアドレス</label>
                <input type="text" name="email" class="seation__container-form-input" placeholder="abc@gmail.com">
                <label for="pass" class="seation__container-form-label">パスワード</label>
                <input type="password" name="password" class="seation__container-form-input"placeholder="最低6文字必要です">
                <label for="name" class="seation__container-form-label">氏名</label>
                <input type="text" name="name" class="seation__container-form-input">
            </div>
            <label for="country" class="seation__container-form-label">国籍</label>
            <select class="seation__container-form-select" name="country">
                <option  value="hide">Country</option>
                <option value="日本">日本</option>
                <option value="ベトナム">ベトナム</option>
                <option value="中国">中国</option>
                <option value="ネパール">ネパール</option>
            </select>
            <label for="sex" class="seation__container-form-label">性別</label>
            <input type="radio" name="sex" value="女性">女性
            <input type="radio" name="sex" value="男性">男性
            <input type="radio" name="sex" value="どちらでもない">どちらでもない
            <label for="hobby" class="seation__container-form-label">趣味</label>
            <input type="checkbox" name="hobby" value="サッカー">サッカー
            <input type="checkbox" name="hobby" value="テニス">テニス
            <input type="checkbox" name="hobby" value="スウィング">スウィング
            <div class="seation__container-auth-button">
               <button type="submit" class="btn btn-primary">保存</button>
            </div>
            <h3 th:text="${checkUser}" style="color: red;"></h3>
               <h3 th:text="${checkUser1}" style="color: red;"></h3>
            </form>
    </div>
@endsection