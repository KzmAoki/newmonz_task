@csrf
<dl class="form-list">
    <dt>カテゴリ</dt>
    <dd>
        <select name="category_id" class="form-select">
            <option value=""></option>
            @foreach (App\Models\Category::all() as $category)
            <option value="{{ $category->id }}"{{ Request::get('category_id') == $category->id ? ' selected' : ''}}>{{ $category->name }}</option>
            @endforeach
        </select>
    </dd>
    <dt>商品名</dt>
    <dd><input type="text" name="name" value="{{ old('name', $product->name) }}"></dd>
    <dt>価格</dt>
    <dd><input type="number" name="price" min="100" value="{{ old('price', $product->price) }}"></dd>
</dl>