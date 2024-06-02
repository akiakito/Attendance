@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register.css') }}">
@endsection

@section('content')
<div class="login__whole">
    <div class="login__div">
        <h2 class="font__inner">
            会員登録
        </h2>
    </div>
    <form class="form"action="/register" method="post">
        @csrf
        <div class="div">
            <input class="input"type="text"name="name"placeholder="名前" value="{{ old('name') }}" >
        </div>
        <div class="div">
            <input class="input"type="email"name="email"placeholder="メールアドレス"value="{{ old('email') }}" >
        </div>
        <div class="div">
            <input class="input"type="password"name="password"placeholder="パスワード">
        </div>
        <div class="div">
            <input class="input"type="password"name="password_confirmation"placeholder="確認用パスワード">
        </div>
        <div class="login__button">
            <button class="button"type="submit">会員登録</button>
        </div>
    </form>
    <div class="register">
        <p class="register__p">
            アカウントをお持ちの方はこちらから
        </p>
        <a class="register__a" href="/login">
            ログイン
        </a>
    </div>
</div>
<small class="small">Atte,inc.</small>
@endsection