<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\AssignedShifts;
use Auth;
use Illuminate\Support\Facades\Log;
class FrontController extends Controller
{
    public function home() {
        $user = Auth::user();

        $startDate = \Carbon\Carbon::now()->startOfWeek();
        $endDate = \Carbon\Carbon::now()->endOfWeek();
        $period = \Carbon\CarbonPeriod::create($startDate, $endDate);

        $dates = [];
        foreach ($period as $date) {
            $d = $date->format('l');
            $d2 = $date->format('d/m/Y');
            array_push($dates, $d2);
        }
        Log::error($dates);
        $shift = AssignedShifts::where('EmployeeId', '=', $user->id)->where('date', '=', $dates)->orderBy('date')->get();
        if ($shift = null) { 
                return view('dashboard');
        }
         
        return view('dashboard', compact('shift'));
    }
}
