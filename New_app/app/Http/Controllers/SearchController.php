<?php

namespace App\Http\Controllers;

use App\Products_model;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function searchProducts(Request $request){
        $query = $_GET['query'];
        $products=Products_model::where('p_name', 'LIKE', '%'.$query.'%')->paginate(6);
//        dd($list_product);
//        $list_product->appends(['search' => $search_text]);
        return view('frontEnd.productSearch',compact('products', 'query'));
    }
}
