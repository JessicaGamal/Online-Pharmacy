<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
    public function index()
    {
        return view('AdminPages.Addmedicine');
    }

    public function store(Request $request)
    {
       $validatedData = $request->validate([
           'Product_name' => 'required',
           'image' => 'required',
           'Price' => 'required|numeric',

        ]);

        Product::create($request->all());

        return redirect('/products');

    }

    public function destroy( $id)
    {
        $request=request::find($id);
        $request->delete();
        return redirect('/products')->with('success','products removed');


    }
}
