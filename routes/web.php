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
    $menu_item = config('menu_item');
    $comics_array = config('comics');
    return view('main' , ['menuitem'=>$menu_item] , ['comics'=>$comics_array]);
});