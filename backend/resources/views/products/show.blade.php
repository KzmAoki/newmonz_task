@extends('layouts.app')
@section('content')
<table class="table table-striped">
  <thead>
      <tr>
          <th>ID</th><th>カテゴリ</th><th>メーカー</th><th>商品名</th><th>価格</th><th>登録日</th>
      </tr>
  </thead>
  <tbody>
      <tr>
          <td>{{ $product->id }}</td>
          <td>{{ $product->category->name }}</td>
          <td>{{ $product->user->name }}</td>
          <td>{{ $product->name }}</td>
          <td>{{ $product->price }}</td>
          <td>{{ Carbon\Carbon::parse($product->created_at)->format('Y年m月d日') }}</td>
      </tr>
  </tbody>
</table>
@can('update', $product)
<div class="product-control">
  <a href="{{ route('products.edit', $product) }}">編集</a>
  <form onsubmit="return confirm('本当に削除しますか？')" action="{{ route('products.destroy', $product) }}" method="post">
      @csrf 
      @method('delete')
      <button type="submit" class="btn btn-danger">削除</button>
  </form>
</div>
@endcan
@endsection