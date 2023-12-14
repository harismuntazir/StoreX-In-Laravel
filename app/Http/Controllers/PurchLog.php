<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

// Use the Log model

class PurchLog extends Controller
{
    public function addLog(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        // Return the view for adding a new log
        return view('logger/add');
    }

    public function storeLog(Request $request): RedirectResponse
    {
        // Validate the request data
        $request->validate([
            'log_date' => 'required|date',
            'log_time' => 'required|date_format:H:i',
            'amount' => 'required|numeric',
            'desc' => 'required|string',
            'logType' => 'required|string',
        ]);

        // Create a new log
        $log = new \App\Models\PurchLog();
        $log->log_date = $request->input('log_date');
        $log->log_time = $request->input('log_time');
        $log->amount = $request->input('amount');
        $log->desc = $request->input('desc');
        $log->logType = $request->input('logType');
        $log->save();

        // Redirect to a specific route after successful creation
        return redirect()->route('logs.all')->with('success', 'Log added successfully.');
    }

    // all logs ordered by date and time recent to oldest
    public function list(): View|Application|Factory|\Illuminate\Contracts\Foundation\Application
    {
        $logs = \App\Models\PurchLog::orderBy('log_date', 'asc')->orderBy('log_time', 'asc')->get();
        return view('logger/list', ['logs' => $logs]);
    }

    // delete a log by id
    public function delete($id): RedirectResponse
    {
        $log = \App\Models\PurchLog::find($id);
        $log->delete();
        return redirect()->route('logs.all')->with('success', 'Log deleted successfully.');
    }
}
