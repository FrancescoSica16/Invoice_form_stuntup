<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvoiceController;

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

Route::get('create_edit_invoice', [InvoiceController::class, 'create'])->name('create_edit_invoice');

Route::get('show_invoice/{NUMERO_FATTURA}', [InvoiceController::class, 'show'])->name('show_invoice');

Route::post('create_edit_invoice', [InvoiceController::class, 'store'])->name('invoice_creator');

Route::get('preview', 'PDFController@preview');
Route::get('generate-pdf', 'PDFController@generatePDF');