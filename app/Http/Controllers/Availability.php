<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class Availability extends Controller
{
    public function EditAvailability($id) {
        $users = User::find($id);

        return view('User.Availability.edit')->with('users', $users);


    }
}
