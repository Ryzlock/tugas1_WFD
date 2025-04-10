<?php

namespace App\Http\Controllers;
use App\Models\flights;
use App\Models\Ticket;

use Illuminate\Http\Request;

class FlightController extends Controller
{
    public function index()
    {
        $flights = flights::all();
        return view('flights.index', compact('flights'));
    }

    public function showTickets(flights $flight)
    {
        $tickets = $flight->tickets;
        return view('flights.tickets', compact('flight', 'tickets'));
    }

    public function bookForm(flights $flight)
    {
        return view('flights.book', compact('flight'));
    }
}