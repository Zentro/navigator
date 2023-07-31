<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class HistoryController extends Controller
{
    public function showHistory(Request $request)
    {
        $userId = auth()->user()->id;

        // Query the quotes table to get all quotes for the current user
        $quotes = Quote::where('user_id', $userId)->get();

        // Pass the quotes data to the view
        return view('fuelquotehistory', compact('quotes'));
    }
}
