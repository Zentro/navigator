<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quote;

class FormController extends Controller
{
    public function showForm(Request $request)
    {
        //logic for price per gallon
        $currentPPG = 1.50;
        $locationTexas = 0.02; // 2%
        $locationOutOfState = 0.04; // 4%
        $gallonsMoreThan1000 = 0.02; // 2%
        $gallonsLessThan1000 = 0.03; // 3%
        $noHistory = 0; // 0%
        $yesHistory = 0.01; // 1%
        $profitFactor = 0.10; // 10%

        $state = $request->user()->state;
        if($state == "TX")
        {
            $locationFactor = $locationTexas;
        }
        else
        {
            $locationFactor = $locationOutOfState;
        }

        $userId = $request->user()->id;
        $hasFormHistory = Quote::where('user_id', $userId)->exists();

        if($hasFormHistory)
        {
            $historyFactor = $yesHistory;
        }
        else
        {
            $historyFactor = $noHistory;
        }

        $gallons = $request->input('gallons');
        if($gallons > 1000)
        {
            $gallonsFactor = $gallonsMoreThan1000;
        }
        else
        {
            $gallonsFactor = $gallonsLessThan1000;
        }

        $margin = $currentPPG * ($locationFactor - $historyFactor + $gallonsFactor + $profitFactor);
        $suggestedPPG = $currentPPG + $margin;
        $suggestedPPG = round($suggestedPPG, 2);
        //address to be displayed
        $address = $request->user()->address;
        if($request->user()->apartment_number)
        {
            $address .= ", Suite " . $request->user()->apartment_number;
        }
        $address .= ", " . $request->user()->city . ", " . $request->user()->state . " " . $request->user()->zip_code;
        
        return view('quoteform', compact('address', 'state', 'suggestedPPG', 'locationFactor', 'historyFactor'));
    }
    public function submit(Request $request)
    {

        $request->validate([
            'gallons' => 'required|numeric|min:1|max:1000000',
            'totalamountdue' => 'required|numeric|min:0',
            'pricepergallons' => 'required|numeric|min:0',
            'delivdate' => 'required|date',
        ]);


        $user_id = $request->user()->id;
        $purchase_datetime = now();
        $gallons_requested = $request->input('gallons');
        $total_price = $request->input('totalamountdue');
        $price_per_gallon = $request->input('pricepergallons');
        $delivery_date = $request->input('delivdate');
        $delivery_address = $request->user()->address;
        if($request->user()->apartment_number)
        {
            $delivery_address .= ", Suite " . $request->user()->apartment_number;
        }
        $delivery_address .= ", " . $request->user()->city . ", " . $request->user()->state . " " . $request->user()->zip_code;

        $quote = new Quote([
            'user_id' => $user_id,
            'purchase_datetime' => $purchase_datetime,
            'gallons_requested' => $gallons_requested,
            'total_price' => $total_price,
            'price_per_gallon' => $price_per_gallon,
            'delivery_address' => $delivery_address,
            'delivery_date' => $delivery_date,
        ]);

        $quote->save();

        return redirect('quotehistory')->with('success', 'Form submitted successfully!');
    }
}
