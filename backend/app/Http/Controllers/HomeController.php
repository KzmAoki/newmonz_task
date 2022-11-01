<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function index()
    {
        $products = \Auth::user()->products()->orderBy('created_at', 'desc')->orderBy('id', 'desc')->paginate(20);
        $data = [
            'products' => $products,
        ];

        return view('home', $data);
    }
}
