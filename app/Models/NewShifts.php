<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Model;

class NewShifts extends Model
{
    protected $table = "NewAssignedShifts";
    protected $fillable = [
        'id',
        'date',
        'start_time',
        'end_time',
        'EmployeeId'
    ];
}
