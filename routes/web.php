<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeSkills;
use App\Http\Controllers\Availability;
use App\Http\Controllers\UserPermissions;
use App\Http\Controllers\CreateShift;
use App\Http\Controllers\CalenderController;
use App\Http\Controllers\FrontController;

Route::get('/', [FrontController::class, 'home']);
Route::get('/dashboard', [FrontController::class, 'home']);


Route::get('/user/addavail/{id}', [Availability::class, 'EditAvailability']);




//Employee Skills
Route::get('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'EmployeeSkillsEdit']);
Route::post('/admin/edit/employeeskill/{id}', [EmployeeSkills::class, 'UpdateSkill']);
Route::get('/admin/create/employeeskill', [EmployeeSkills::class, 'CreateEmployeeSkill']);
Route::post('/admin/create/employeeskill', [EmployeeSkills::class, 'StoreEmployeeSkill']);
Route::get('/admin/create/deleteemployeeskill/{id}', [EmployeeSkills::class, 'DeleteEmployeeSkill']);
Route::get('/admin/userskills/{id}', [EmployeeSkills::class, 'UserSkills']);
Route::get('/admin/employeeskills', [EmployeeSkills::class, 'EmployeeSkillsView']);




Route::get('/admin/userlist/', [UserPermissions::class, 'UserViews']);
Route::get('/admin/userlist/{id}', [UserPermissions::class, 'ShowUserUpdate']);
Route::post('/admin/userlist/{id}', [UserPermissions::class, 'AddPermission']);


Route::get('/admin/createshift/', [CreateShift::class, 'ShowShift']);
Route::post('/admin/createshift/', [CreateShift::class, 'StoreShift']);
Route::get('/admin/showshift', [CreateShift::class, 'ShowStoredShifts']);

Route::get('/admin/AutoAssign', [CreateShift::class, 'AssignShift']);


Route::get('calendar-event', [CalenderController::class, 'index']);
Route::post('calendar-crud-ajax', [CalenderController::class, 'calendarEvents']);

Route::get('/myavailability', [FrontController::class, 'ViewAvail']);

require __DIR__.'/auth.php';
