<?php

use App\Http\Controllers\Fetch;
use App\Http\Controllers\Index;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [Index::class, 'homepage']);
Route::get('print_tabulator', [Index::class, 'print_tabulator'])->name('print_tabulator');
Route::get('pagination_tabulator',[Index::class, 'pagination_tabulator'])->name('pagination_tabulator');
Route::get('filter_tabulator',[Index::class,'filter_tabulator'])->name('filter_tabulator');
Route::get('groupby_tabulator',[Index::class,'groupby_tabulator'])->name('groupby_tabulator');
Route::get('sum_tabulator',[Index::class,'sum_tabulator'])->name('sum_tabulator');
Route::get('avg_tabulator',[Index::class,'avg_tabulator'])->name('avg_tabulator');
Route::post('fetchemployee', [Fetch::class, 'empFetch'])->name('fetchemployee');

