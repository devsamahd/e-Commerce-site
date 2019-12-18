<?php

namespace App\Http\Controllers;

use App\cart;

use App\product;

use Illuminate\Http\Request;

use  App\Http\Requests;

use Session;


class productsController extends Controller
{
    public function getIndex(){
    	$product=product::all();
    	return view('shop.index',['product' => $product]);
    }

    public function getAddToCart(Request $request, $id){
    	$product = product::find($id);
    	$oldcart = Session::has('cart') ? Session::get('cart') : null;
    	$cart = new Cart($oldcart);
    	$cart->add($product, $product->id);

    	$request->Session()->put('cart', $cart);
    	// dd($request->Session()->get('cart'));
    	return redirect()->route('products.index');
    }

    public function getCart(){
    	if (!Session::has('cart')) {
    		return view('shop.shopping-cart');
    	}
    	$oldcart=Session::get('cart');
    	$cart= new Cart($oldcart);
    	return view('shop.shopping-cart', ['products' => $cart->items, 'totalprice' => $cart->totalprice]);
    }

    public function getCheckout(){
    	if (!Session::has('cart')) {
    		return view('shop.shopping-cart');
    		$oldcart = Session::get('cart');
    		$cart = new Cart($oldcart);
    		$total = $cart->totalprice;
    		return view('shop.checkout', ['total' => $total]);
    	}
    }
}
