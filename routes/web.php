<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', [ContactController::class, 'index'])->name('Contact.index');
Route::post('/Contact/create', [ContactController::class, 'create'])->name('Contact.create');
Route::post('/Contact/submit', [ContactController::class, 'submit'])->name('Contact.submit');
Route::post('/Contact/delete', [ContactController::class, 'delete'])->name('Contact.delete');
Route::get('/Contact/thanks', [ContactController::class, 'thanks'])->name('Contact.thanks');