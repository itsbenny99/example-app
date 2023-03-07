<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\RequestedEmployeeAvail;

class Availability extends Controller
{
    public function EditAvailability($id) {
        $users = User::find($id);
        $availability = RequestedEmployeeAvail::where('EmployeeId', '=', $id)->get();
        return view('User.Availability.edit')->with('users', $users)->with('availability', $availability);
    }
    
    public function CreateAvailability() {
        $user = Auth::user();
        return view('User.Availability.create')->with('user', $user);
    }
}
