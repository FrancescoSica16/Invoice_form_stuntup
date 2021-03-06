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

Route::get('index_invoice', [InvoiceController::class, 'index'])->name('index_invoice');

// route for generate and preview PDF
Route::get('preview/{NUMERO_FATTURA}', 'PDFController@preview')->name('invoice_preview');
Route::get('generate-pdf/{NUMERO_FATTURA}', 'PDFController@generatePDF')->name('invoice_generate_pdf');

Route::get('send-email-pdf/{NUMERO_FATTURA}', 'PDFController@index')->name('send-email');