<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ProductController extends Controller
{
    public function index(Request $request)
    {
//        $products = Product::query()->paginate(10);
//
//        if ($request->has('success')) {
//            return Inertia::render('Product/Index', ['success' => $request->get('success')]);
//        }
        return Inertia::render('Product/Index');
    }

    public function store(StoreProductRequest $request)
    {
        try {
            Product::query()->create($request->validated());
            return redirect()->route('product', ['success' => 'Thêm sản phẩm thành công!']);
        } catch (\Exception $e) {
            return back()->withErrors(['error' => 'Thêm sản phẩm thất bại!']);
        }
    }
}
