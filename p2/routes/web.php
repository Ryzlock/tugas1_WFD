<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FlightController;
use App\Http\Controllers\TicketController;

Route::get('/', function () {
    return view('main');

Route::get('/flights', [FlightController::class, 'index']);
Route::get('/flights/ticket/{flight}', [FlightController::class, 'showTickets']);
Route::get('/flights/book/{flight}', [FlightController::class, 'bookForm']);
Route::post('/ticket/submit', [TicketController::class, 'submit']);
Route::put('/ticket/board/{ticket}', [TicketController::class, 'board']);
Route::delete('/ticket/delete/{ticket}', [TicketController::class, 'delete']);

});