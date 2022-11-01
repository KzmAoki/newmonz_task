@extends('layouts.app')
@section('content')
<form action="{{ route('products.store') }}" method="post">
@include('products.form')
<button type="submit">登録する</button>
<a href="{{ route('home') }}">キャンセル</a>
@endsection()