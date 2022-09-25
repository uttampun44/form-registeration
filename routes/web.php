<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registeration;
use App\Models\Register;
// ***********getting data from controllers***********

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
Route::get('/form', [Registeration::class, 'form']);
Route::post('/register', [Registeration::class, 'register']);

Route::get('/customer', function(){
       
});
