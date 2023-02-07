<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Skills;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class EmployeeSkills extends Controller
{

    public function EmployeeSkillsView() {
        $users = User::orderBy('name', 'ASC')->get();
        $skills = Skills::orderBy('name', 'ASC')->get();
        return view('admin.EmployeeSkills')->with('skills', $skills)->with('users', '$users');
    }

    public function EmployeeSkillsEdit($id) {
        $permission = Permission::get();
        $skills = Skills::find($id);
        return view('admin.EditEmployeeSkills',compact('permission'))->with('skills', $skills);
    }

    public function CreateEmployeeSkill(){
        $permission = Permission::get();
        return view('admin.CreateEmployeeSkills',compact('permission'));
    }

    public function StoreEmployeeSkill(Request $request){
        $validator = $request->validate([
            'name' => 'required'
        ]);
        $a = new Skills;
        $a->name = $request->input('name');
        $a->role= $request->input('Role');
        $a->Note = $request->input('Note');
        $role = Role::create(['name' => $request->input('name')]);
        $permission = Permission::create(['name' => $request->input('name')]);

        $a->permissionid = $permission->id;
        $a->save();

        return redirect('/admin/employeeskills');
    }

    public function DeleteEmployeeSkill($id) {
        $skills = Skills::find($id);
        $permissionid = $skills->permissionid;
        if ($permissionid != null) {
            $permission = Permission::find($permissionid);
            $permission->delete();
        }
        $skills->delete();
        return redirect('/admin/employeeskills');
    }

    public function UpdateSkill(Request $request, $id) {
        $skills = Skills::find($id);
        $skills->name = $request->input('name');
        $skills->role = $request->input('Role');
        $skills->Note = $request->input('Note');
        $skills->save();
        return redirect('/admin/employeeskills');
    }

   public function UsersSkills($id){


       // $user = User::find($id);
       //$user->givePermissionTo($request->input('name'));

   }
}
