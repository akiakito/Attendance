@extends('layout.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="login__whole">
    <div class="login__div">
        <h2 class="font__inner">
            ログイン
        </h2>
    </div>
    <form class="form">
        <div class="div">
            <input class="input"type="email"name="email"placeholder="メールアドレス">
        </div>
        <div class="div">
            <input class="input"type="password"name="password"placeholder="パスワード">
        </div>
        <div class="login__button">
            <button class="button"type="submit">ログイン</button>
        </div>
    </form>
    <div class="register">
        <p class="register__p">
            アカウントをお持ちでない方はこちらから
        </p>
        <a class="register__a" href="/">
            会員登録
        </a>
    </div>
</div>
<small class="small">Atte,inc.</small>
@endsection