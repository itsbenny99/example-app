<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeSkills;
use App\Http\Controllers\Availability;
use App\Http\Controllers\UserPermissions;
use App\Http\Controllers\CreateShift;


Route::get('/', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/user/addavail/{id}', [Availability::class, 'EditAvailability']);
Route::get('/admin/employeeskills', [EmployeeSkills::class, 'EmployeeSkillsView']);



//Employee Skills
Route::get('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'EmployeeSkillsEdit']);
Route::post('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'UpdateSkill']);
Route::get('/admin/create/employeeskill', [EmployeeSkills::class, 'CreateEmployeeSkill']);
Route::post('/admin/create/employeeskill', [EmployeeSkills::class, 'StoreEmployeeSkill']);
Route::get('/admin/create/deleteemployeeskill/{id}', [EmployeeSkills::class, 'DeleteEmployeeSkill']);
Route::get('/admin/userskills/{id}', [EmployeeSkills::class, 'UserSkills']);





Route::get('/admin/userlist/', [UserPermissions::class, 'UserViews']);
Route::get('/admin/userlist/{id}', [UserPermissions::class, 'ShowUserUpdate']);
Route::post('/admin/userlist/{id}', [UserPermissions::class, 'AddPermission']);


Route::get('/admin/createshift/', [CreateShift::class, 'ShowShift']);


require __DIR__.'/auth.php';
