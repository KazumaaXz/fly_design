<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\Information;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil 7 artikel terbaru, termasuk relasi user dan category
        $products = Product::with(['user', 'category'])->where('status', true)->latest()->limit(7)->get();
        $categories = Category::all();

        return view('home.main', compact('products', 'categories'));
    }
}