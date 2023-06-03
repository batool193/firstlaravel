<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productcontroller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
Route::get('/showproduct',[productcontroller::class, 'index']);
Route::get('/newproduct',[productcontroller::class, 'addone']);
Route::post('/newproduct', [productcontroller::class, 'store'])->name('products.store');
// Route::get('/myroute/{name?}', function ($name="xx") {
//     return view('myview',['name'=>$name]);
// });
