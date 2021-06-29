@extends('layout')
@section('title', 'カレンダー')
@section('content')
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else<p>※ログインしていません。(<a href="/login">ログイン</a> | <a href="/register">登録</a> )</p>
@endif
    {!!$cal_tag!!}
@endsection
<a href="{{ url('/holiday') }}">休日設定</a>