@extends('layouts.layoutapp')

@section('title', 'Customers.Index')

@section('menubar')
    @parent
    インデックスページ<br>
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
                    <td>
                        <a href="" class="btn btn-primary btn-sm">詳細</a>
                        <a href="" class="btn btn-primary btn-sm">編集</a>
                        <a href="" class="btn btn-danger btn-sm">削除</a>
                    </td>
                </tr>
                @endforeach
        </table>

@endsection

@section('footer')
copyright 2021
yasuko.
@endsection