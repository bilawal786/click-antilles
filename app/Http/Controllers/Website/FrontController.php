<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Model\Banner;
use App\Model\Category;
use App\Model\Product;

class FrontController extends Controller
{
    public function index()
    {
        $category = Category::where('position', 0)->priority()->take(11)->get();
        $main_banner = Banner::where('banner_type', 'Main Banner')->where('published', 1)->orderBy('id', 'desc')->get();
        $products = Product::where('featured', 1)->get();
        return view('website.index', compact('category', 'main_banner', 'products'));
    }

    public function productSingle($id)
    {
        $product = Product::find($id);
        $products = Product::where('featured', 1)->get();
        return view('website.product.single', compact('product', 'products'));

    }
}
