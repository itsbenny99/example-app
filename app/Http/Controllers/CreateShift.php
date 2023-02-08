<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use App/Modles/NewShifts as NewShifts; 
use App\Models\Shift;
use App\Models\ProcessedEmployeeAvail;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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

    public function AssignShift() {
        $shift = Shift::orderby('date', 'ASC')->get();
        $skills = Skills::orderBy('name', 'ASC')->get();
        $users = User::inRandomOrder()->get();


        foreach($shift as $shift) {
            $users = User::permission($shift->permission)->inRandomOrder()->get();
            foreach($users as $u) {

                $Avail = ProcessedEmployeeAvail::where('EmployeeId', '=', $u->id)->where('date', '=', $shift->date)->orderBy('start_time')->first();
                if ($Avail!= null) {
                    if ($Avail->start_time <= $shift->start_time) {
                        if ($Avail->end_time >= $shift->end_time) {
                            $a = new NewShifts;
                            //$a->date = $shift->date;
                            //$a->start_time = $shift->start_time;
                            //$a->end_time = $shift->end_time;
                            //$a->EmployeeId = $Avail->EmployeeId;

                            //$a->save();

                            //$avail->delete();
                            //$shift->delete();


                        }
                    }



                 }






            }

        }
    }
}
