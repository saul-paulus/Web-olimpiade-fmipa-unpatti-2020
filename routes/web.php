<?php

use App\Http\Controllers\Webosmipa;
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

Route::get('/',[Webosmipa::class,'index']);


Route::get('/',[Webosmipa::class, 'index']);
Route::get('/tentang',[Webosmipa::class, 'tentang']);
Route::get('/osmipa',[Webosmipa::class, 'osmipa']);
Route::get('/galerifoto',[Webosmipa::class, 'galerifoto']);
Route::get('/kontak',[Webosmipa::class, 'kontak']);