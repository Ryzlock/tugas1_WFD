<?php

use App\Http\Controllers\CatalogueController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('mainWeb');
})->name('/');

Route::get('/catalogue', [CatalogueController::class, 'index']) -> name('catalogue.index');
Route::get('/catalogue/cube/{id}', [CatalogueController::class, 'show'])->name('catalogue.show');

Route::get('/login', function() {
    return view('login');
})->name('login');

Route::get('/register', function() {
    return view('register');
})->name('register');

Route::get('/about', function() {
    return view('about');
})->name('about');

?>