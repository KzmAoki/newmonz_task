@extends('layouts.app')
@section('content')
<h1>マイページ</h1>
<p>{{ Auth::user()->name }}</p>
<p><a href="{{ route('products.create') }}">新規商品登録</a></p>
<p><a href="{{ route('products.index') }}">商品一覧へ</a></p>
@include('products.products')
<form action="{{ route('logout') }}" method="post">
    @csrf 
    <button type="submit" class="btn btn-secondary">ログアウト</button>
</form>
@endsection()