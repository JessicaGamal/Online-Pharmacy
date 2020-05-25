<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Illuminate\Requests;
use App\Http\Controllers\Controller;

class productscontroller extends Controller
{
     public function indeex(){

     	$products = DB::select('select * from products');
     	return view('AdminPages.delete',['products'=>$products]);
     }

      public function delete($id)
    {
        DB::delete('delete from products where id = ?',[$id]);
        return redirect('AdminPages.delete')->with('success','datadelete');
    }

}
