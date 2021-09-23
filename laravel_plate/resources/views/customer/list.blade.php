@extends('layouts.layoutapp')
@section('title', 'Customer.List')

@section('menubar')
    @parent
    インデックスページ<br>
@endsection

@section('content')
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-sm-10" style="margin-bottom: 10px;">
                <form method="get" action="" class="form-inline">
                    <div class="form-group">
                        <input type="text" name="keyword" class="form-control" value="{{$keyword}}" placeholder="検索キーワード">
                    </div>
                    <input type="submit" value="検索" class="btn btn-info">
                </form>
                <div class="col-sm-2">
                    <a href="/customer/new" class="btn btn-warning"><i class="glyphicon glyphicon-plus"></i> 新規登録</a>
                </div> 
            </div>
        </div>
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
                        <a href="" class="btn btn-primary btn-sm">編集</a>
                        <a href="/customer/delete/?" class="btn btn-danger btn-sm">削除</a>
                    </td>
                </tr>
                @endforeach
        </table>
        <!-- page control -->
        {!! $items->appends(['keyword'=>$keyword])->render() !!}

@endsection

@section('footer')
copyright 2021
yasuko.
@endsection