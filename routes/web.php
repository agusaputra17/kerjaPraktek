<?php

use App\Http\Controllers\BooksController;
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

Route::get('/', function () {
    return view('layout.home');
});

Route::get('/home', function () {
    return view('layout.home');
});

Route::get('/books/add', function () {
    return view('books.formadd');
});

Route::get('/books/detail', function () {
    return view('books.detail');
});

Route::get('/login', function () {
    return view('admin.formlogin');
});

Route::get('/laporan', function () {
    return view('books.laporan');
});

Route::get('/instansi', function () {
    return view('instansi.instansi');
});

Route::get('/edit-instansi', function () {
    return view('instansi.editinstansi');
});

Route::get('/admin', function () {
    return view('admin.profiladmin');
});

Route::get('/edit-admin', function () {
    return view('admin.editadmin');
});

Route::resource('books',BooksController::class);
