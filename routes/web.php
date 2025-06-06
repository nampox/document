<?php

use App\Http\Controllers\ExcelController;
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

Route::get('/', function () {return view('welcome');})->name('home');

Route::get('/excel', [ExcelController::class, 'index'])->name('excel');

Route::post('/excel/import', [ExcelController::class, 'import'])->name('excel.import');
Route::get('/excel/export', [ExcelController::class, 'export'])->name('excel.export');
