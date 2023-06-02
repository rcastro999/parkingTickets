<x-layouts.app>
    <h1>Reporte de Tickets</h1>

    <table class="table table-info">
        <thead>
            <th>IdTicket</th>
            <th>Company</th>
            <th>TP</th>
            <th>N° Ticket</th>
            <th>Parking Price</th>
            <th>Car Number</th>
            <th>Vehicle Type</th>
            <th>Start</th>
            <th>Expected End</th>
            <th>Real End</th>
            <th>Admin / Conductor Name</th>
            <th>Street Name</th>
            <th>Parking Status</th>
            <th>Extra Parking Price</th>
            <th>Type Charge</th>
        </thead>

        @dump(array($tickets))
        @foreach ($tickets as $ticket)
            <tr>
                {{-- <td>{{ $ticket->id}}</td>
                <td>{{ $ticket->imei}}</td>
                <td>{{ $ticket->no}}</td>
                <td>{{ $ticket->p}}</td>
                <td>{{ $ticket->cn}}</td>
                <td>{{ $ticket->vt}}</td>
                <td>{{ $ticket->st}}</td>
                <td>{{ $ticket->et}}</td>
                <td>{{ $ticket->ret}}</td>
                <td>{{ $ticket->an}}</td>
                <td>{{ $ticket->sn}}</td>
                <td>{{ $ticket->ps}}</td>
                <td>{{ $ticket->ep}}</td>
                <td>{{ $ticket->ct}}</td> --}}
            </tr>
        @endforeach
    </table>

    {{ $tickets->links() }}

</x-layouts.app>