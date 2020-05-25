<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use DB;
use App\Illuminate\Requests;
use App\Http\Controllers\Controller;
use App\prod;

class prodcontroller extends Controller
{
     public function index(){

     	$prod = DB::select('select * from products');
     	return view('UserPages.index',['prod'=>$prod]);
     }
}
