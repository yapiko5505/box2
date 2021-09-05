@extends('layouts.addressapp')

@section('title', 'Show')

@section('menubar')
    @parent
    詳細ページ
@endsection

@section('content')
        <table>
            @csrf
            <tr><th>id: </th><td>{{$item->id}}</td></tr>
            <tr><th>name: </th><td>{{$item->name}}</td></tr>
            <tr><th>postal: </th><td>{{$item->postal}}</td></tr>
            <tr><th>address: </th><td>{{$item->address}}</td></tr>
            <tr><th>phone: </th><td>{{$item->phone}}</td></tr>
            <tr><th>email: </th><td>{{$item->email}}</td></tr>
            <tr><th>todo: </th><td>{{$item->todo}}</td></tr>
        </table>
    </form>

@endsection

@section('footer')
copyright 2021
yasuko.
@endsection