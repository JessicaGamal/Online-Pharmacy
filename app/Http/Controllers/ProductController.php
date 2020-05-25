<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;
use Illuminate\support\facades\url;
use Illuminate\support\facades\DB;
use App\products;
class ProductController extends Controller
{
    public function index()
    {
        
        return view ('AdminPages.delete');
    }

    public function store(Request $request)
    {
        $Product_name = $request->input('Product_name');
        $price = $request->input('price');
        $image = $request->input('image');
        DB::insert('insert into products (id,Product_name,price,image) values (?,?,?,?)',[null,$Product_name,$price,$image]);

    }
    
     public function delete($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('delete_medicine')->with('success','datadelete');
    }

        
}
