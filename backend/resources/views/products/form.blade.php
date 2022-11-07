@csrf
<dl class="form-list">
    <dt class="form-label">カテゴリ</dt>
    <dd>
        <select name="category_id" class="form-select">
            @foreach (App\Models\Category::all() as $category)
            <option value="{{ $category->id }}" @if($product->category_id == $category->id) selected @endif>{{ $category->name }}</option>
            @endforeach
        </select>
    </dd>
    <dt class="form-label">商品名</dt>
    <dd><input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control"></dd>
    <dt class="form-label">価格</dt>
    <dd><input type="number" name="price" min="100" value="{{ old('price', $product->price) }}" class="form-control"></dd>
</dl>