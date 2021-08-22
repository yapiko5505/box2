@extends('layouts.addressapp')

@section('title', 'Index')

@section('menubar')
    @parent
    インデックスページ
@endsection

@section('content')
    <p>ここが本文のコンテンツです。</p>
    <p>必要な分だけ記述できます。</p>
@endsection

@component('components.message')
    @slot('msg_title')
    メッセージの表示です。
    @endslot

    @slot('msg_content')
    hello
    @endslot
@endcomponent

@section('footer')
copyright 2021
yasuko.
@endsection