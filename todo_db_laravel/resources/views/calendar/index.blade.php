@extends('layout')
@section('title', 'カレンダー')
@section('content')
<head>
    <form name="Logout" method="post" action="/cgi-bin/Logout.cgi">
        <input type="submit" value="Logout" />
    </form>
</head>
@if (Auth::check())
<p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
@else<p>※ログインしていません。(<a href="/login">ログイン</a> | <a href="/register">登録</a> )</p>
<a href="{{ url('/holiday') }}">休日設定</a>
@endif
    {!!$cal_tag!!}
@endsection
