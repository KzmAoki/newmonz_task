<div class="col-md-8 col-lg-9">
        <div class="table-responsive">            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th><th>カテゴリ</th><th>メーカー</th><th>商品名</th><th>価格</th><th>登録日</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td>{{ $product->user->name }}</td>
                        <td><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></td>
                        <td>{{ $product->price }}</td>
                        <td>{{ Carbon\Carbon::parse($product->created_at)->format('Y年m月d日') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {{ $products->appends(Request::all())->links() }}
    </div>