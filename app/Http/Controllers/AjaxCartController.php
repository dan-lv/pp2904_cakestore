<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AjaxCartController extends Controller
{
    public function countCart(Request $request) {
        if($request->ajax()) 
        {
            return view('checkout.count_cart')->render();
        }
    }

    public function addManyProduct(Request $request) {
        if($request->ajax()) 
        {
            return view('checkout.count_cart')->render();
        }
    }
}
