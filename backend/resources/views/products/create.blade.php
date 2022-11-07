@extends('layouts.app')
@section('content')
@include('commons.errors')
<form action="{{ route('products.store') }}" method="post">
@include('products.form')
<button type="submit" class="btn btn-primary">登録する</button>
<a href="{{ route('home') }}">キャンセル</a>
@endsection()