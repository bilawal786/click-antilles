<?php

namespace App\Http\Controllers\Website\ProCustomer;

use App\CPU\Helpers;
use App\Http\Controllers\Controller;
use App\Model\Category;
use App\Model\Product;
use Illuminate\Http\Request;

class ProCustomerController extends Controller
{
    public function products($id = null, $position = null)
    {
        if ($id != null && $position != null) {

            $products = Product::where('pro','=',2)->where('featured', 1)->whereJsonContains('category_ids', [
                ['id' => strval($id), 'position' => (int)$position],
            ])
                ->paginate(10);
        } else {
            $products = Product::where('pro','=',2)->where('featured', 1)->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
    public function productSearchFilter($key)
    {
        $slug = decrypt($key);
        $query = Product::where('featured', 1)->where('pro','=',2);
        if ($slug == 'latest') {
            $fetched = $query->latest();
        } elseif ($slug == 'low-high') {
            $fetched = $query->orderBy('unit_price', 'ASC');
        } elseif ($slug == 'high-low') {
            $fetched = $query->orderBy('unit_price', 'DESC');
        } elseif ($slug == 'a-z') {
            $fetched = $query->orderBy('name', 'ASC');
        } elseif ($slug == 'z-a') {
            $fetched = $query->orderBy('name', 'DESC');
        } else {
            $fetched = $query;
        }
        $products = $fetched->paginate(10);
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
    public function productSearch(Request $request)
    {

        if ($request->min_price != null || $request->max_price != null) {
            $products = Product::where('featured', 1)->where('pro','=',2)->whereBetween('unit_price', [Helpers::convert_currency_to_usd($request['min_price']), Helpers::convert_currency_to_usd($request['max_price'])])->paginate(10);
        }
        else {
            $products = Product::where(function ($query) use ($request) {
                $query->orWhereJsonContains('category_ids', [
                    ['id' => strval($request->category_id)],
                ])->orWhere('name', 'like', "%{$request->name}%");
            })->where('featured', 1)->where('pro','=',2)
                ->paginate(10);
        }
        $category = Category::where('position', 0)->priority()->get();
        return view('website.product.proproduct.index', compact('products', 'category'));
    }
}
