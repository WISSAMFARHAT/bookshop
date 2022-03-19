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
    return view('pages.home');
})->name("home");


Route::get('/book/{name}', function ($name) {
   $title="";
    if($name=="arabic")
    {
        $title="كتب عربية";
    }else if($name=="english")
    {
        $title="كتب أنجليزية";
    }
    else if($name=="store")
    {
        $title="متجر";
    }
    else if($name=="publications")
    {
        $title="منشورات نصوص";
    }
    return view('pages.book', compact(['title'=>'title','name'=>'name']));
})->name('book');


Route::get('/book/{name}/{id}',function($name,$id){
    return view('pages.bookdetails', compact(['name'=>'name','id'=>'id']));

})->name('details');


Route::get('/cart',function(){

    return view('pages.cart');
})->name('cart');


Route::get('/whishlist',function(){

    return view('pages.whishlist');
})->name('whishlist');

Route::get('/checkout',function(){

    return view('pages.checkout');
})->name('checkout');



Route::get("/login",function(){
    return view('auth.login');
})->name('auth_login');


Route::group(['prefix'=>'admin'],function(){

    Route::get("/",function(){
        return view('admin.pages.home');
    })->name('admin_home');

});