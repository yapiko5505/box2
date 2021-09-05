@extends('layouts.addressapp')

@section('title', 'Addresses.Index')

@section('menubar')
    @parent
    インデックスページ
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
    </form>

@endsection

@section('footer')
copyright 2021
yasuko.
@endsection