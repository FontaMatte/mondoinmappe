<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('categories')->paginate(6);
        return view('products.index', compact('products'));

    }

    public function show($id): View
    {
        $product = Product::findOrFail($id);
        $product->load('categories', 'orderItems');
        return view('products.show', compact('product'));
    }
}
