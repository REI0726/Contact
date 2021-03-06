<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Admin\AdminContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/thanks', [ContactController::class, 'thanks'])->name('contact.thanks');
Route::post('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/submit', [ContactController::class, 'submit'])->name('contact.submit');
Route::post('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');


Route::namespace('Admin')->group(function () {
    Route::prefix('admin')->group(function () {
      Route::get('/', [AdminContactController::class, 'index']);
      Route::get('/add', [AdminContactController::class, 'add']);
      Route::post('/add', [AdminContactController::class, 'create']);
    });
});