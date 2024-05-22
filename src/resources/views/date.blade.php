@extends('layout.layout')

@section('css')
<link rel="stylesheet" href="{{ asset('css/date.css') }}">
@endsection

@section('content')
<div class="date__whole">
    <div class="good">
        <h2 class="good__font">
            2021-11-01
        </h2>
    </div>
    <div class="table__div">
        <table class="day__table">
            <tr class="day__tr">
                <th class="day__th">名前</th>
                <th class="day__th">勤務開始</th>
                <th class="day__th">勤務終了</th>
                <th class="day__th">休憩時間</th>
                <th class="day__th">勤務時間</th>
            </tr>
            <tr class="day__tr">
                <td class="day__td">テスト太郎</td>
                <td class="day__td">10:00:00</td>
                <td class="day__td">20:00:00</td>
                <td class="day__td">00:30:00</td>
                <td class="day__td">09:30:00</td>
            </tr>
        </table>
    </div>
</div>
<small class="small">Atte,inc.</small>
@endsection