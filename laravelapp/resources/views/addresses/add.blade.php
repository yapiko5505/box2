@extends('layouts.addressapp')

@section('title', 'Addresses.Add')

@section('menubar')
    @parent
    新規作成ページ
@endsection

@section('content')
    <form action="/addresses/add" method="post">
        <table>
            @csrf
            <tr><th>name: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
            <tr><th>postal: </th><td><input type="text" name="postal" value="{{old('postal')}}"></td></tr>
            <tr><th>address: </th><td><input type="text" name="address" value="{{old('address')}}"></td></tr>
            <tr><th>phone: </th><td><input type="text" name="phone" value="{{old('phone')}}"></td></tr>
            <tr><th>email: </th><td><input type="text" name="email" value="{{old('email')}}"></td></tr>
            <tr><th>todo: </th><td><input type="text" name="todo" value="{{old('todo')}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection

