<form action="{{ url('/ticket/submit') }}" method="POST">
    @csrf
    <input type="hidden" name="flight_id" value="{{ $flight->flights_id }}">
    <p>Flight Code: {{ $flight->flight_code }}</p>
    <p>From: {{ $flight->origins }} → To: {{ $flight->destination }}</p>

    <label>Name: <input type="text" name="passenger_name" required></label><br>
    <label>Phone: <input type="text" name="phone" required></label><br>
    <label>Seat Number: <input type="text" name="seat_number" maxlength="5" required></label><br>

    <button type="submit">Book Ticket</button>
</form>
