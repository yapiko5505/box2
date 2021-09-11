@extends('layouts.addressapp')

@section('title', 'Addresses.Index')

@section('menubar')
    @parent
    インデックスページ<br>
    <a href="{{ url('/addresses/add') }}">新規登録</a><br>
    <a href="{{ url('/addresses/find') }}">検索</a><br>
    <a href="{{ url('/addresses/edit?id=') }}">更新</a><br>
    <a href="{{ url('/addresses/del?id=') }}">削除</a><br>
@endsection

@section('content')
        <table>
            @csrf
            <tr><th>id</th><th>name</th><th>postal</th><th>address</th><th>phone</th><th>email</th><th>todo</th><tr>
                @foreach ($items as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->postal}}</td>
                    <td>{{$item->address}}</td>
                    <td>{{$item->phone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->todo}}</td>
                </tr>
                @endforeach
        </table>

@endsection

@section('footer')
copyright 2021
yasuko.
@endsection