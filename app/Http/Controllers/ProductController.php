<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all()->toArray();

        return view('AdminPages.Addmedicine' , compact('products'));
    }

    public function create()
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
        $product = new Product([
            'medicine' => $request->get('medicine'),
            'price' => $request->get('price'),
            'image' => $request->get('image')

        ]);

        $product->save();

        return redirect()->route('AdminPages.Addmedicine')->with('success','medicines added');

        }

        

        

    

    public function destroy( $id)
    {
        $request=request::find($id);
        $request->delete();
        return redirect('/products')->with('success','products removed');


    }
}
