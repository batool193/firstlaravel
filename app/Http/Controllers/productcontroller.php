<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class productcontroller extends Controller
{
    //
   
    public function index(): View
        {
            $products = DB::table('products')->get();  
        return view('products.index', ['products' => $products]);
        }
        
        public function addone(): View
        {
        return view('products.newproduct');
        
        }

    public function store(Request $request)
    {       
            $product = new product();
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->save();
         return self::index();
        
    }
}
