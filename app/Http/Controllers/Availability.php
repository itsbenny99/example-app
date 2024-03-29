<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RequestedEmployeeAvail;
use Auth;
use Illuminate\Support\Facades\Log;



class Availability extends Controller
{
    public function EditAvailability() {
        $user = Auth::user();
        $users = User::find($user->id);
        $availability = RequestedEmployeeAvail::where('EmployeeId', '=', $users->id)->orderby('id', 'DESC')->get();
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
        return redirect('/myavailability/');
    }
    
    public function ReviewAvailability() {
         $availability = RequestedEmployeeAvail::where('Status', '=', 0)->get();
         return view('admin.reviewavail')->with('availability', $availability);
    }
    
    public function AcceptedAvailability($id, $eid, $a) {
        $availability = RequestedEmployeeAvail::where('id', '=', $id)->first();
        if ($a == 'a') {
           $oldAvailability = RequestedEmployeeAvail::where('EmployeeId', '=', $eid)->where('status', '=', '1')->first();
           
            if (!empty($oldAvailability)) {
               $oldAvailability->Status = 2;
               $oldAvailability->save();
            }
          
            $availability->Status = 1; 
           $availability->save();  
        }
        
        if ($a == 'r') {
           $availability->Status = 2; 
           $availability->save();
        }
        
        return redirect('/admin/accepted/employeeavail');
        
    }
    
    public function ViewEmployee() {
        $users = User::orderBy('name', 'ASC')->get();
        $availability = RequestedEmployeeAvail::where('Status', '=', 1)->get();
        return view('admin.viewemployeeavail')->with('availability', $availability)->with('users', $users);
    }
       
}
