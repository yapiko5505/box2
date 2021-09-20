@extends('layouts.layoutapp')

@section('title', 'Customer.Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="" method="post">
        <table>
        {{ csrf_field() }}
        {{ method_field('patch') }}
            <tr><th>id: </th><td><input type="text" name="id" value="{{$form->id}}"></td></tr>
            <tr><th>name: </th><td><input type="text" name="name" value="{{$form->name}}"></td></tr>
            <tr><th>postal: </th><td><input type="text" name="postal" value="{{$form->postal}}"></td></tr>
            <tr><th>address: </th><td><input type="text" name="address" value="{{$form->address}}"></td></tr>
            <tr><th>phone: </th><td><input type="text" name="phone" value="{{$form->phone}}"></td></tr>
            <tr><th>email: </th><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
            <tr><th>todo: </th><td><input type="text" name="todo" value="{{$form->todo}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection