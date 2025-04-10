<?php

namespace App\Http\Controllers;
use App\Models\tickets;
use App\Models\Flight;
use Illuminate\Http\Request;

class TicketController extends Controller
{
    public function submit(Request $request)
    {
        $request->validate([
            'flight_id' => 'required|exists:flights,flights_id',
            'passenger_name' => 'required|string|max:255',
            'phone' => 'required|string|max:15',
            'seat_number' => 'required|string|max:5|unique:tickets,seat_number',
        ]);

        tickets::create([
            'flight_id' => $request->flight_id,
            'passenger_name' => $request->passenger_name,
            'phone' => $request->phone,
            'seat_number' => $request->seat_number,
            'is_boarding' => 0,
        ]);

        return redirect('/flights')->with('success', 'Ticket booked!');
    }

    public function board(tickets $ticket)
    {
        $ticket->update([
            'is_boarding' => 1,
            'boarding_time' => now(),
        ]);

        return back()->with('success', 'Boarding confirmed.');
    }

    public function delete(tickets $ticket)
    {
        $ticket->delete();
        return back()->with('success', 'Ticket deleted.');
    }
}