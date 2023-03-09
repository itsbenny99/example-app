<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RequestedEmployeeAvail;
use Auth;

class Availability extends Controller
{
    public function EditAvailability() {
        $user = Auth::user();
        $users = User::find($user->id);
        $availability = RequestedEmployeeAvail::where('EmployeeId', '=', $users->id)->get();
        return view('User.Availability.edit')->with('users', $users)->with('availability', $availability);
    }
    
    public function CreateAvailability() {
        $user = Auth::user();
        return view('User.Availability.create')->with('user', $user);
    }
    
    public function PostAvailability(Request $request) {
       // $a = new RequestedEmployeeAvail;
        //$a->MondayStart = $request->input('monday_start_time');
        
       // $a->save();
    }
       
}
