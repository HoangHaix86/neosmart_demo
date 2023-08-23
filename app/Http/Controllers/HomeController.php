<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;


class HomeController extends Controller
{
    public function index()
    {
        return view('client.index');
    }

    public function product()
    {
        $allProduct = Product::query()->paginate(6);
        // dd($allProduct);
        return view('client.product.index')->with('allProduct', $allProduct);
    }

    public function productShow(string $slug)
    {
        return view('client.product.show');
    }

    public function contact()
    {
        return view('client.contact');
    }

    public function news()
    {
        return view('client.news.index');
    }

    public function solution()
    {
        return view('client.solution.index');
    }
}