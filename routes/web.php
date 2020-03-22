<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::group(['middleware'=>['web','auth']],function(){

	Route::get('/', function () {
    return view('welcome');
    });
    Route::get('/home',function(){
    	if(Auth::user()->admin ==0){
    		return view('HOME');
    		    	}
    		    	else{
    		    		$users['users']=\App\user::all();
    		    		return view('welcome',$users);
    		    	}
    });
    });
