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
/*
Route::get('/', function () {
    $array_paste = config('pasta');
    return view('home',['paste'=>$array_paste]);
});*/

Route::get('/', function () {
    $menu_items = config('menu_items');
    $comics_array = config('comics');
    $buy_items = config('buy_items');
    $social_array = config('socials');
    return view(
        'main' , 
        [
            'menuItems'=> $menu_items , 
            'comics'=> $comics_array ,
            'buyItems'=> $buy_items ,
            'socials' => $social_array
        ]
    );
});