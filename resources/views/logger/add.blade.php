@extends('app')

@section('content')
    <h1 class="title">Add Log</h1>

    <form method="POST" action="{{ route('logs.store') }}">
        @csrf

        <div class="field">
            <label class="label" for="log_date">Log Date</label>
            <div class="control">
                <input class="input" type="date" id="log_date" name="log_date" value="{{ date('Y-m-d') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="log_time">Log Time</label>
            <div class="control">
                <input class="input" type="time" id="log_time" name="log_time" value="{{ date('H:i') }}" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="amount">Amount</label>
            <div class="control">
                <input class="input" type="number" id="amount" name="amount" step="0.01" required>
            </div>
        </div>

        <div class="field">
            <label class="label" for="desc">Description</label>
            <div class="control">
                <textarea class="textarea" id="desc" name="desc" required></textarea>
            </div>
        </div>

        <div class="field">
            <label class="label">Log Type</label>
            <div class="control">
                <label class="radio">
                    <input type="radio" name="logType" value="Assecries" required>
                    Accessories
                </label>
                <label class="radio">
                    <input type="radio" name="logType" value="Electronics" required>
                    Electronics
                </label>
                <label class="radio">
                    <input type="radio" name="logType" value="Service" checked required>
                    Services
                </label>
                <label class="radio">
                    <input type="radio" name="logType" value="Stationary" required>
                    Stationary
                </label>
            </div>
        </div>

        <div class="field">
            <div class="control">
                <button class="button is-link" type="submit">Add Log</button>
            </div>
        </div>
    </form>
@endsection
