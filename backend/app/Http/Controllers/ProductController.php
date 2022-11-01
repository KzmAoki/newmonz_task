<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $query = Product::select();
        if ($request->keyword) {
            $keyword = $request->keyword;
            $query->where(function ($q) use ($keyword) {
                $q->where('name', 'LIKE', '%'.$keyword.'%');
                $q->orWhere('maker', 'LIKE', $keyword);
            });
        }

        if ($request->category_id) {
            $query->where('category_id', $request->category_id);
        }

        if ($request->min_price) {
            $query->where('price', '>=', $request->min_price);
        }
        if ($request->max_price) {
            $query->where('price', '<=', $request->max_price);
        }

        if ($request->sort) {
            if ($request->sort == 'price_asc') {
                $query->orderBy('price', 'asc');
            } elseif ($request->sort == 'price_desc') {
                $query->orderBy('price', 'desc');
            } else {
                $query->orderBy('id', 'asc');
            }
        }

        $products = $query->paginate(20);
        $data = [
            'products' => $products,
        ];

        return view('products.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $product = new Product();
        $data = ['product' => $product];

        return view('products.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $product = new Product();
        $product->user_id = \Auth::id();
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect(route('home'));
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        $data = ['product' => $product];

        return view('products.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $this->authorize($product);
        $data = ['product' => $product];

        return view('products.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $this->authorize($product);
        $this->validate($request, [
            'category_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required',
        ]);
        $product->category_id = $request->category_id;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->save();

        return redirect(route('products.show', $product));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $this->authorize($product);
        $product->delete();

        return redirect(route('home'));
    }
}
