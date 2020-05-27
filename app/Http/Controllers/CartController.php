<?php

namespace App\Http\Controllers;
use App;
use Illuminate\Http\Request;
use Illuminate\support\facades\url;
use Illuminate\support\facades\DB;
use App\Cart;
use App\products;

class CartController extends Controller
{
    public function index()
    {
        
        return view ('UserPages.index');
    }
    public function store($ProdId)
    {  
       $products=products::whereid($ProdId)->first(); 
       

      $Carts = new Cart([
        
        'Prod_Name' => $products->Product_name,
         'Prod_Price' => $products->price,
       ]);
       $Carts->save();

       
        return redirect ('AdminPages.delete');
    }
}
