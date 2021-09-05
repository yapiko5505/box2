@extends('layouts.addressapp')

@section('title', 'Addresses.Find')

@section('menubar')
    @parent
    検索ページ
@endsection

@section('content')
    <form action="/addresses/find" method="post">
        @csrf
        <input type="text" name="input" value="{{$input}}">
        <input type="submit" value="find">
    </form>
    @if (isset($item))
    <table>
        <tr><th>Data</th></tr>
        <tr>
            <td>{{$item->getData()}}</td>
        </tr>
    </table>
    @endif
    </form>
@endsection

@section('footer')
copyright 2021
yasuko.
@endsection

