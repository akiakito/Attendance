@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
<div class="index__whole">
    <div class="good">
        <h2 class="good__font">
            福場麟太郎さんお疲れ様です！
        </h2>
    </div>
    <div class="work">
        <div class="service">
            <form class="service__left">
                <input class="start__input"type="submit"value="勤務開始">
            </form>
            <form class="service__right">
                <input class="end__input"type="submit"value="勤務終了">
            </form>
        </div>
        <div class="service">
            <form class="service__left">
                <input class="start__input"type="submit"value="休憩開始">
            </form>
            <form class="service__right">
                <input class="end__input"type="submit"value="休憩終了">
            </form>
        </div>
    </div>
</div>
<small class="small">Atte,inc.</small>
@endsection