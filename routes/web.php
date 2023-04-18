<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeSkills;
use App\Http\Controllers\Availability;
use App\Http\Controllers\UserPermissions;
use App\Http\Controllers\CreateShift;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\FrontController;

// Home Page(s)
Route::get('/', [FrontController::class, 'home'])->middleware('auth');;
Route::get('/dashboard', [FrontController::class, 'home'])->name('dashboard')->middleware('auth');

// Employee Availability 
Route::get('/myavailability/', [Availability::class, 'EditAvailability'])->middleware('auth');
Route::get('/myavailability/new', [Availability::class, 'CreateAvailability'])->middleware('auth');
Route::post('/myavailability/new', [Availability::class, 'PostAvailability'])->middleware('auth');

Route::get('/admin/accepted/employeeavail', [Availability::class, 'ReviewAvailability'])->middleware('auth');
Route::get('/admin/accepted/employeeavail/{id}/{eid}/{a}' , [Availability::class, 'AcceptedAvailability'])->middleware('auth');
Route::get('/admin/view/employeeavail', [Availability::class, 'ViewEmployee'])->middleware('auth');

//Employee Skills
Route::get('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'EmployeeSkillsEdit'])->middleware('auth');
Route::post('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'UpdateSkill'])->middleware('auth');

Route::get('/admin/create/employeeskill', [EmployeeSkills::class, 'CreateEmployeeSkill'])->middleware('auth');
Route::post('/admin/create/employeeskill', [EmployeeSkills::class, 'StoreEmployeeSkill'])->middleware('auth');

Route::get('/admin/create/deleteemployeeskill/{id}', [EmployeeSkills::class, 'DeleteEmployeeSkill'])->middleware('auth');
Route::get('/admin/userskills/{id}', [EmployeeSkills::class, 'UserSkills'])->middleware('auth');
Route::get('/admin/employeeskills', [EmployeeSkills::class, 'EmployeeSkillsView'])->middleware('auth');

Route::get('/admin/userlist/', [UserPermissions::class, 'UserViews'])->middleware('auth');
Route::get('/admin/userlist/{id}', [UserPermissions::class, 'ShowUserUpdate'])->middleware('auth');
Route::post('/admin/userlist/{id}', [UserPermissions::class, 'AddPermission'])->middleware('auth');

//Shifts
Route::get('/admin/createshift/', [CreateShift::class, 'ShowShift'])->middleware('auth');
Route::post('/admin/createshift/', [CreateShift::class, 'StoreShift'])->middleware('auth');
Route::get('/admin/showshift', [CreateShift::class, 'ShowStoredShifts'])->middleware('auth');
Route::get('/admin/shift/allocated/', [CreateShift::class, 'ShowAllocatedShifts'])->middleware('auth');
Route::get('/admin/AutoAssign', [CreateShift::class, 'AssignShift'])->middleware('auth');


Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);


require __DIR__.'/auth.php';
