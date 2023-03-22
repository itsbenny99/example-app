<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use App\Models\AssignedShifts;
use App\Models\Shift;
use App\Models\ProcessedEmployeeAvail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Log;
class CreateShift extends Controller
{
    public function ShowShift(){
        $permission = Permission::get();
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.createshifts', compact('permission'))->with('users', '$users');
    }

    public function StoreShift(Request $request){
        $a = new Shift;
        $a->date = $request->input('date');
        $a->start_time = $request->input('StartTime');
        $a->end_time = $request->input('EndTime');
        $permission = $request->input('permission');

        foreach($permission as $permission) {
           $a->permission= $permission;
       }
        $a->save();
    }

    public function ShowStoredShifts() {
        $shift = Shift::orderby('date', 'ASC')->get();
        $skills = Skills::orderBy('name', 'ASC')->get();
        return view('admin.ShowShift')->with('skills', $skills)->with('shift', $shift);
    }

    public function NewAssShift() {
        $a = NewShiftAs::orderby('date', 'ASC')->get();
    } 
    public function AssignShift() {
        $shift = Shift::orderby('date', 'ASC')->get();
        $skills = Skills::orderBy('name', 'ASC')->get();
        $users = User::inRandomOrder()->get();
        Log::info("this is info message");

        foreach($shift as $shift) {
            $Comp = 'False';
            $users = User::permission($shift->permission)->inRandomOrder()->get();
            foreach($users as $u) {

                $Avail = ProcessedEmployeeAvail::where('EmployeeId', '=', $u->id)->where('date', '=', $shift->date)->orderBy('start_time')->first();
                if ($Avail!= null) {
                    if ($Avail->start_time <= $shift->start_time) {
                        if ($Avail->end_time >= $shift->end_time) {
                            if ($Comp == 'False') {
                                $a = new AssignedShifts;
                                $a->date = $shift->date;
                                $a->start_time = $shift->start_time;
                                $a->end_time = $shift->end_time;
                                $a->EmployeeId = $Avail->EmployeeId;
                                $Comp = 'True';
                                $a->save();

                                $Avail->delete();
                                $shift->delete();

                            }
                        }

    
                        }
                    }



                 }






            }
        return redirect('/admin/showshift/');

        }

}
