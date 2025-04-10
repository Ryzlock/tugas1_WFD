<form action="{{ url('/ticket/board/'.$ticket->id) }}" method="POST">
    @csrf
    @method('PUT')
    <button type="submit">Confirm Boarding</button>
</form>

<form action="{{ url('/ticket/delete/'.$ticket->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <button type="submit" onclick="return confirm('Are you sure?')">Delete Ticket</button>
</form>
