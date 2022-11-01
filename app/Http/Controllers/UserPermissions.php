<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class UserPermissions extends Controller
{
    public function UserViews() {
        $users = User::orderBy('name', 'ASC')->get();
        return view('admin.UserList')->with('users', $users);
    }

    public function ShowUserUpdate($id) {
        $permission = Permission::get();
        $users = User::find($id);
        return view('admin.ShowPermissions', compact('permission'))->with('users', $users);
    }

    public function AddPermission($id, Request $request ){
        $permission = Permission::get();
        $users = User::find($id);
        foreach ($permission as $p) {
            if ($request->id = 1 ){
                $users->givePermissionTo($p);
            }
        }

}
}
// $user = User::find($id);
//$user->givePermissionTo($request->input('name'));
