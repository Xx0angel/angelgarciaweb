<?php
use App\Http\Controllers\ContactanosController;
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

Route::view('/', 'angelweb')->name('inicio');

Route::post('contactanos', [ContactanosController::class, 'store'])->name('contactanos.store');
