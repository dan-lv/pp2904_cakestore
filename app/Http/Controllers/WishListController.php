<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class WishListController extends Controller
{
    public function wishList(Request $request) {
        if (!Auth::check()) {
            return redirect()->back()->with('alert', 'You need to login');
        }

        $user_id = Auth::user()->id;
        $user = User::find($user_id);
        $productlist = $user->products;
       
        return view('wishlist.wishlist', compact('productlist'));
    }

    public function addProduct($product_id)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $user->products()->attach($product_id);
        
        return redirect()->route('wishlist');
    }

    public function deleteProduct($product_id)
    {
        $user_id = Auth::user()->id;
        $user = User::find($user_id);

        $name_product = Product::find($product_id)->name;

        $user->products()->detach($product_id);
        
        return redirect()->back()->with('status', $name_product.' removed out your wish list.');
    }
}

