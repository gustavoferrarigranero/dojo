<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add()
    {
        return view('products.add');
    }

    public function store(Request $request) {

        $date = explode("T", $request->get('date_end'));
        $hour = $date[1];
        $date = $date[0] ;

        Product::create([
            "title"=>$request->get("title"),
            "description"=>$request->get("description"),
            "price"=>$request->get("price"),
            "bid"=>$request->get("bid"),
            "date_end"=> $date . " " . $hour,
            "image"=>""
        ]);
        dd(Product::all());
    }
    public function detail($id){
        $product = Product::find($id);
        return view ("products.detail", compact("product"));

    }
}
