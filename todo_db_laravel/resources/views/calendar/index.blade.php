@extends('layout')
@section('title', 'カレンダー')
@section('content')
<a href="{{ url('/holiday') }}">スケジュール設定</a><br>
<a href="{{ url('/home') }}">ホームからのログアウト</a>
    {!!$cal_tag!!}
@endsection
