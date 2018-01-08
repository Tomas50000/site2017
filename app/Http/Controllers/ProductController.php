<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
//modelio iskvietimas

class ProductController extends Controller
{
  public function index() {

  }

 public function create() {
  return view('products/create');
}
public function store(Request $request) {
  $this->validate($request, ['product_title'-> 'required',]);
  

  // dd($request);
  $product = new Product;
  $product->title = $request->product_title;

  $product->description = $request->product_description;
  $product->quantity = $request->product_quantity;
  $product->price = $request->product_price;
  $product->category = 1;
  $product->manufacturer = 1;


  $product->save();
}
    //
}
