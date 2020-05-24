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
        return view ('AdminPages.Add_medicine');
    }

    public function store(Request $request)
    {
        $Product_name = $request->input('Product_name');
        $price = $request->input('price');
        $image = $request->input('image');
        DB::insert('insert into products (id,Product_name,price,image) values (?,?,?,?)',[null,$Product_name,$price,$image]);

    }
}
