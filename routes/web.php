<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PDFController;

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
    return view('choose');
})->name('choose');

Route::post('/product/choose', [ProductController::class, 'choose'])->name('product.choose');
Route::get('/product/{product_id}', [ProductController::class, 'show'])->name('product.show');;
Route::get('/pdf/{product_id}', [PDFController::class, 'export'])->name('product_pdf.export');;

