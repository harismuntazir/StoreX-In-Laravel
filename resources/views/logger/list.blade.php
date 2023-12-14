@extends('app')

@section('content')
    <h1 class="title">Logs</h1>

    <table class="table is-fullwidth">
        <thead>
        <tr>
            <th>Date</th>
            <th>Time</th>
            <th>Amount</th>
            <th>Description</th>
            <th>Log Type</th>
            <th>Tools</th>
        </tr>
        </thead>
        <tbody>
        @foreach($logs->sortByDesc('log_date') as $log)
            <tr>
                <td>{{ $log->log_date }}</td>
                <td>{{ $log->log_time }}</td>
                <td>{{ $log->amount }}</td>
                <td>{{ $log->desc }}</td>
                <td>{{ $log->logType }}</td>
                <th>
                    <form action="{{ route('logs.delete', $log->log_id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="button is-danger" type="submit">X</button>
                    </form>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
