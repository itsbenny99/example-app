<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateShift extends Controller
{
    public function ShowShift(){
        $permission = Permission::get();
        return view('admin.createshifts', compact('permission'));
    }

    public function SaveShift(){

    }
}
