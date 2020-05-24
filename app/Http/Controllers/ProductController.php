<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Illuminate\support\facades\url;
use Illuminate\support\facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        
        return view ('AdminPages.delete_medicine');
    }

    public function store(Request $request)
    {
        $Product_name = $request->input('Product_name');
        $price = $request->input('price');
        $image = $request->input('image');
        DB::insert('insert into products (id,Product_name,price,image) values (?,?,?,?)',[null,$Product_name,$price,$image]);

    }

        public function show()
      {
        $products = DB::select('select * from products');
         return view('/AdminPages.delete',['products'=>$products]);
    }

     public function delete($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('delete_medicine')->with('success','datadelete');
    }

        
}
