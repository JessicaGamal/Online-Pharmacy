<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
 
    public function index()
    {
        $product = product::all()->toArray();

        return view('AdminPages.Addmedicine' , compact('product'));
    }

    public function create()
    {

       return view('AdminPages.Addmedicine');

    }

    public function store(Request $request)
    {
       $this->validate($request ,[
           'medicine' => 'required',           
           'price' => 'required|numeric',
           'image' => 'required'

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
