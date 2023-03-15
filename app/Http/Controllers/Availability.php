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
        $user = Auth::user();
       
        $a = new RequestedEmployeeAvail;
        $a->MondayStart = $request->input('monday_start_time');
        $a->MondayEnd = $request->input('monday_end_time');
        $a->TuesdayStart = $request->input('tuesday_start_time');
        $a->TuesdayEnd = $request->input('tuesday_end_time');        
        $a->WednesdayStart = $request->input('wednesday_start_time');
        $a->WednesdayEnd = $request->input('wednesday_end_time');        
        $a->ThursdayStart = $request->input('thursday_start_time');
        $a->ThursdayEnd = $request->input('thursday_end_time'); 
        $a->FridayStart = $request->input('friday_start_time');
        $a->FridayEnd = $request->input('friday_end_time');
        $a->SaturdayStart = $request->input('saturday_start_time');
        $a->SaturdayEnd = $request->input('saturday_end_time');
        $a->SundayStart = $request->input('sunday_start_time');
        $a->SundayEnd = $request->input('sunday_end_time');
        
        $a->EmployeeId = $user->id;
        $a->Status = ('0');
        
        
        $a->save();
    }
    
    public function ReviewAvailability() {
         $availability = RequestedEmployeeAvail::where('status', '=', 0)->get();
         return view('admin.reviewavail')->with('availability', $availability);
    }
    
    public function AcceptedAvailability($id, $a) {
        $availability = RequestedEmployeeAvail::where('EmployeeId', '=', $id)->where('status', '=', 0)->get();
        if ($a == 'a') {
           $availability->Status = 1; 
        }
    }
       
}
