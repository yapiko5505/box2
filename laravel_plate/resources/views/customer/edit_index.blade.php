@extends('layouts.layoutapp')

@section('title', 'Customer.Edit')

@section('menubar')
    @parent
    更新ページ
@endsection

@section('content')
    <form action="" method="post" class="form-horizontal">
        <table>
        {{ csrf_field() }}
        {{ method_field('patch') }}
            <tr><th>id: </th><td><input type="text" name="id" value="{{$form->id}}"></td></tr>
            @if ($errors->has('name'))
            <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
            @endif
            <tr><th>name: </th><td><input type="text" name="名称" value="{{$form->name}}"></td></tr>
            @if ($errors->has('postal'))
            <tr><th>ERROR</th><td>{{$errors->first('postal')}}</td></tr>
            @endif
            <tr><th>postal: </th><td><input type="text" name="郵便番号" value="{{$form->postal}}"></td></tr>
            @if ($errors->has('address'))
            <tr><th>ERROR</th><td>{{$errors->first('address')}}</td></tr>
            @endif
            <tr><th>address: </th><td><input type="text" name="住所" value="{{$form->address}}"></td></tr>
            @if ($errors->has('phone'))
            <tr><th>ERROR</th><td>{{$errors->first('phone')}}</td></tr>
            @endif           
            <tr><th>phone: </th><td><input type="text" name="電話番号" value="{{$form->phone}}"></td></tr>
            @if ($errors->has('email'))
            <tr><th>ERROR</th><td>{{$errors->first('email')}}</td></tr>
            @endif
            <tr><th>email: </th><td><input type="text" name="eメール" value="{{$form->email}}"></td></tr>
            @if ($errors->has('todo'))
            <tr><th>ERROR</th><td>{{$errors->first('todo')}}</td></tr>
            @endif
            <tr><th>todo: </th><td><input type="text" name="用途" value="{{$form->todo}}"></td></tr>
            <tr><th></th><td><input type="submit" value="send"></td></tr>
        </table>
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection